<?php

namespace Components\Cargonomica;

use Bitrix\Main\ArgumentException;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\SystemException;
use CBitrixComponent;
use CIBlockElement;
use CIBlockSection;
use Exception;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * https://jira.cargonomica.com/browse/BD-815
 *
 * Очередность забора данных:
 * 1 id раздела 'Часто ищут' ( Это ссылка на секцию инфоблока часто ищут )
 * 2 получает разделы первого и второго уровня
 * 3 элементы разделов
 */
class FooterMenuPopular extends CBitrixComponent
{
    /**
     * @param $arParams
     * @return array
     * @throws Exception
     * Обрабатываем параметры на случай неисправности
     */
    public function onPrepareComponentParams($arParams): array
    {
        $arParams['IBLOCK_ID'] = (int)$arParams['IBLOCK_ID'];
        if (!$arParams['IBLOCK_ID']) {
            throw new Exception('IBLOCK_ID is empty');
        }

        if (!$arParams['ELEMENT_CODE']) {
            throw new Exception('ELEMENT_CODE is empty');
        }

        return $arParams;
    }

    /**
     * @return void
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException|Exception
     * Исполнение компонента
     */
    public function executeComponent(): void
    {
        if ($this->startResultCache()) { // кеширование
            $this->execution(); // получение данных
            $this->includeComponentTemplate();  // включение компонента в верстку
        }
    }

    /**
     * @return void
     * @throws ArgumentException
     * @throws ObjectPropertyException
     * @throws SystemException
     * @throws Exception
     */
    protected function execution(): void
    {
        // Получаем id раздела 'Часто ищут' который записан в элементе инфоблока 'Cargonomica Настройки шаблона сайта'
        $frequentlySearchedId = CIBlockElement::GetList(
            [],
            [
                'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
                'CODE' => $this->arParams['ELEMENT_CODE'],
            ],
            false,
            ['nTopCount' => 1],
            [
                'PROPERTY_FREQUENTLY_SEARCHED',
            ],
        )->Fetch()['PROPERTY_FREQUENTLY_SEARCHED_VALUE'];

        if (!$frequentlySearchedId) {
            throw new Exception('Element not found');
        }

        // Получаем разделы первого и второго уровня
        $frequentlySearchedSections = CIBlockSection::GetList(
            [],
            [
                'IBLOCK_ID' => CARGONOMICA_FREQUENTLY_SEARCHED_IB_ID,
            ],
            false,
            [
                'ID',
                'IBLOCK_ID',
                'IBLOCK_SECTION_ID',
                'CODE',
                'UF_TEXT',
                'UF_LINK',
            ],
        );

        // если родительский раздел неимеет привязки IBLOCK_SECTION_ID, а значит ему не нужны элементы ( значит он первого уровня )
        while ($element = $frequentlySearchedSections->Fetch()) {
            if (!empty($element["IBLOCK_SECTION_ID"])) {
                $section[] = $element;
            }
        }

        // Элементы разделов
        $frequentlySearchedElement = CIBlockElement::GetList(
            [],
            [
                'IBLOCK_ID' => CARGONOMICA_FREQUENTLY_SEARCHED_IB_ID,
                'ACTIVE' => 'Y',
            ],
            false,
            false,
            [
                "ID",
                "IBLOCK_SECTION_ID",
                "PROPERTY_TEXT",
                "PROPERTY_LINK",
                'IBLOCK_CODE',
            ],
        );

        $column = array_column($section, 'ID');  // берем id разделов
        while ($element = $frequentlySearchedElement->Fetch()) { // покуда есть запросы по методу CIBlockElement
            $key = array_search($element["IBLOCK_SECTION_ID"], $column); //сравниваем по очереди иблок принадолежности елемента к секции
            $section[$key]['ELEMENTS'][] = $element;  // по полученому свыше ключу записываем элемент в массив для передачи в темплейт
        }

        $this->arResult['FREQUENTLY_SEARCHED'] = [
            'section' => $section,
        ];
    }
}
