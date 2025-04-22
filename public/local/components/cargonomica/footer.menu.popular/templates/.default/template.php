<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die;
}

/**
 * @var array $arResult
 */
foreach ($arResult['FREQUENTLY_SEARCHED']['section'] as $section) {
    if (!isset($section["ELEMENTS"])) {
        continue;
    }
    ?>
    <div class="footer__top-list-item">
        <h4 class="footer__top-list-item-heading"><a href=<?= $section['UF_LINK'] ?>><?= $section['UF_TEXT'] ?></a></h4>
        <ul>
            <?php
            foreach ($section["ELEMENTS"] as $element) { ?>
                <li><a href="<?= $element['PROPERTY_LINK_VALUE'] ?>"><?= $element['PROPERTY_TEXT_VALUE'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>
