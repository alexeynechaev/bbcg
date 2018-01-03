<header class="main-header main-header-with-global">
    <div class="wrapper">
        <a href="#" class="main-header-toggler js-offcanvas">
            <? echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/assets/images/icons/icon-hamburger-menu.svg'); ?>
        </a>
        <div class="main-header-logo">
            <a href="/<?$APPLICATION->ShowProperty('code')?>/">
                <img src="<?$APPLICATION->ShowProperty('logo')?>" alt="<?$APPLICATION->ShowProperty('name')?>">
            </a>
        </div>
        <div class="main-header-mobile-logo">
            <a href="/<?$APPLICATION->ShowProperty('code')?>/">
                <img src="<?$APPLICATION->ShowProperty('logo')?>" alt="<?$APPLICATION->ShowProperty('name')?>" height="34">
            </a>
        </div>
        <nav class="main-header-menu">
            <ul>
                <? $APPLICATION->IncludeFile('/include/blocks/summit-about-pages.php'); ?>
                <li>
                    <a href="/<?$APPLICATION->ShowProperty('code')?>/events/">Программа</a>
                </li>
                <li>
                    <a href="/<?$APPLICATION->ShowProperty('code')?>/speakers/">Спикеры</a>
                </li>
                <li>
                    <a href="/<?$APPLICATION->ShowProperty('code')?>/partners/">Партнеры</a>
                </li>
                <li>
                    <a href="/<?$APPLICATION->ShowProperty('code')?>/news/">Новости</a>
                </li>
                <li>
                    <a href="/<?$APPLICATION->ShowProperty('code')?>/contacts/">Контакты</a>
                </li>
            </ul>
        </nav>

        <div class="main-header-userarea">
            <div class="main-header-userarea-login-register">
                <a href="login.php" data-side-modal data-side-modal-url="blocks/modal-login.php" data-side-modal-class="login-modal">
                    Войти
                </a>
                <a href="registration.php" data-side-modal data-side-modal-prevent-mobile data-side-modal-url="blocks/modal-registration.php" data-side-modal-class="registration-modal" data-side-modal-prevent-overlay-close data-side-modal-prevent-esc-close>
                    Регистрация
                </a>
            </div>
        </div>
    </div>
</header>