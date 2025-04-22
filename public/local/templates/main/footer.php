<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<footer class="footer">
    <nav class="footer__top">
        <div class="footer__top-inner">
            <h2 class="footer__top-heading">Часто ищут</h2>
            <div class="footer__top-list">

              
              
                <?php $APPLICATION->IncludeComponent(
                    "cargonomica:footer.menu.popular",
                    "",
                    [
                        'IBLOCK_ID' => CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
                        'ELEMENT_CODE' => 'CARGONOMICA_MAIN',
                        'IS_MAIN' => $APPLICATION->GetCurPage() == SITE_DIR,
                        'CACHE_TYPE' => 'A',
                        'CACHE_TIME' => 3600 * 24 * 365,
                    ],
                ); ?>


              
            </div>
        </div>
    </nav>

    <div class="footer__main">
        <div class="footer__header">
            <?php $APPLICATION->IncludeComponent(
                "cargonomica:logo",
                "footer_desktop",
                [
                    'IBLOCK_ID' => CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
                    'ELEMENT_CODE' => 'CARGONOMICA_MAIN',
                    'IS_MAIN' => $APPLICATION->GetCurPage() == SITE_DIR,
                    'CACHE_TYPE' => 'A',
                    'CACHE_TIME' => 3600 * 24 * 365,
                ],
            ); ?>
            <?php $APPLICATION->IncludeComponent(
                "cargonomica:footer.social",
                "footer",
                [
                    'IBLOCK_ID' => CARGONOMICA_SOCIAL_NETWORKS_IB_ID,
                    'CACHE_TIME' => 3600 * 24 * 365,
                    'CACHE_TYPE' => 'A',
                ],
            ); ?>
        </div>
        <?php $APPLICATION->IncludeComponent(
            "cargonomica:menu.footer",
            "",
            [
                'IBLOCK_ID' => CARGONOMICA_FOOTER_MENU_IB_ID,
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => 3600 * 24 * 365,
            ],
        ); ?>
    </div>

    <div class="footer__bottom">
        <div class="footer__bottom-inner">
            <div class="footer__bottom-policy">
                <p><a href="#">Правовая информация</a></p>
                <p><a href="#">Политика конфиденциальности и&nbsp;пользовательское соглашение </a></p>
                <p><a href="#">Документация</a></p>
            </div>
            <div class="footer__bottom-copy">
                <p>©&nbsp;ООО «Каргономика», 2023</p>
                <p>Все права защищены.</p>
            </div>
            <?php $APPLICATION->IncludeComponent(
                "cargonomica:logo",
                "footer_mobile",
                [
                    'IBLOCK_ID' => CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
                    'IS_MAIN' => $APPLICATION->GetCurPage() == SITE_DIR,
                    'ELEMENT_CODE' => 'CARGONOMICA_MAIN',
                    'CACHE_TYPE' => 'A',
                    'CACHE_TIME' => 3600 * 24 * 365,
                ],
            ); ?>
        </div>
    </div>
    </div>
</footer>

</div>

<?php $APPLICATION->IncludeComponent(
    "cargonomica:footer.cookies_accept_form",
    "",
    [
        'IBLOCK_ID' => CARGONOMICA_SITE_TEMPLATE_SETTINGS_IB_ID,
        'ELEMENT_CODE' => 'CARGONOMICA_MAIN',
        'CACHE_TYPE' => 'A',
        'CACHE_TIME' => 3600 * 24 * 365,
    ],
); ?>

<div class="burger-nav">
    <div class="burger-nav__inner">
        <div class="burger-nav__top">
            <div class="burger-nav__main">
                <ul class="burger-nav__main-top">
                    <li>
                        <button class="burger-nav__main-top-item">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/burger-logistics.png" alt="">
                            <span class="burger-nav__main-top-item-name">Перевозчикам</span>
                        </button>
                        <ul class="burger-nav__main-sub">
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-5.svg" alt="">
									Cargo.Journal
								</span>
                                    <span class="burger-nav__main-sub-item-descr">полезные статьи</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-3.svg" alt="">
									Cargo.Fuel
								</span>
                                    <span class="burger-nav__main-sub-item-descr">скидка на&nbsp;топливо</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-4.svg" alt="">
									Cargo.Insurance
								</span>
                                    <span class="burger-nav__main-sub-item-descr">страховка для компаний</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-1.svg" alt="">
									полуприцеп.рф
								</span>
                                    <span class="burger-nav__main-sub-item-descr">полуприцепы с&nbsp;выгодой</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="burger-nav__main-top-item">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/burger-employees.png" alt="">
                            <span class="burger-nav__main-top-item-name">Сотрудникам</span>
                        </button>
                        <ul class="burger-nav__main-sub">
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-4.svg" alt="">
									Cargo.Insurance
								</span>
                                    <span class="burger-nav__main-sub-item-descr">страховка для компаний</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-5.svg" alt="">
									Cargo.Journal
								</span>
                                    <span class="burger-nav__main-sub-item-descr">полезные статьи</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-3.svg" alt="">
									Cargo.Fuel
								</span>
                                    <span class="burger-nav__main-sub-item-descr">скидка на&nbsp;топливо</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="burger-nav__main-top-item">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/burger-partners.png" alt="">
                            <span class="burger-nav__main-top-item-name">Партнерам</span>
                        </button>
                        <ul class="burger-nav__main-sub">
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-1.svg" alt="">
									полуприцеп.рф
								</span>
                                    <span class="burger-nav__main-sub-item-descr">полуприцепы с&nbsp;выгодой</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-5.svg" alt="">
									Cargo.Journal
								</span>
                                    <span class="burger-nav__main-sub-item-descr">полезные статьи</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-3.svg" alt="">
									Cargo.Fuel
								</span>
                                    <span class="burger-nav__main-sub-item-descr">скидка на&nbsp;топливо</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="burger-nav__main-sub-item">
								<span class="burger-nav__main-sub-item-name">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about/products-logo-4.svg" alt="">
									Cargo.Insurance
								</span>
                                    <span class="burger-nav__main-sub-item-descr">страховка для компаний</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="burger-nav__main-back">
                        <span class="burger-nav__main-back-item"><svg width="24"
                                                                      height="24"
                                                                      fill="none"
                                                                      viewBox="0 0 24 24"
                            ><path stroke="#20212B"
                                   stroke-width="1.6"
                                   d="M13.242 16.243 9.07 12.07a.1.1 0 0 1 0-.142l4.172-4.172"
                                /></svg>Назад</span>
                </div>
            </div>
            <div class="burger-nav__sub">
                <ul>
                    <li><a href="suppliers.php">Поставщикам</a></li>
                    <li><a href="about.php">О&nbsp;компании</a></li>
                    <li><a href="contacts.php">Контакты</a></li>
                </ul>
            </div>
        </div>
        <div class="burger-nav__bottom">
            <?php $APPLICATION->IncludeComponent(
                "cargonomica:footer.social",
                "burger",
                [
                    'IBLOCK_ID' => CARGONOMICA_SOCIAL_NETWORKS_IB_ID,
                    'CACHE_TIME' => 3600 * 24 * 365,
                    'CACHE_TYPE' => 'A',
                ],
            ); ?>
        </div>
    </div>
</div>

<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/main.min.js"></script>

</body>
