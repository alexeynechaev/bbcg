<div class="main-heading main-heading-<?=$arResult['COLOR']?> program-table-main-heading">
    <div class="wrapper">
        <h1 class="main-heading-title">Программа</h1>

        <div>
            <div class="main-heading-tabs">
                <? foreach ($arResult['DATES'] as $k => $date): ?>
                    <? if ($arParams['DATE'] == $k): ?>
                        <a href="/<?=$arResult['CODE']?>/events/<?=$k?>/" class="main-heading-tabs-item active">
                            <?=$date?>
                        </a>
                    <? else: ?>
                        <a href="/<?=$arResult['CODE']?>/events/<?=$k?>/" class="main-heading-tabs-item">
                            <?=$date?>
                        </a>
                    <? endif ?>
                <? endforeach ?>
            </div>
        </div>
    </div>
</div>

<nav class="subnav program-table-subnav">
    <div class="wrapper">
        <ul class="subnav-list subnav-list-program subnav-list-wide subnav-list-program-menu">
            <li class="subnav-list-item">
                <a class="subnav-link">
                    <span>Вся программа</span>
                </a>
            </li>
        </ul>

        <ul class="subnav-list subnav-list-program subnav-list-wide subnav-list-right">
            <li class="subnav-list-item">
                <form method="GET" data-suggest-search="data/program-events.json" class="program-table-search">
                    <input type="text" class="program-table-search-input" placeholder="Поиск событий" name="search">
                    <button type="submit" class="program-table-search-button"></button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<?
global $eventsFilter;
$eventsFilter = $arParams['FILTER'];
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "events-page",
    Array(
        "FILTER_NAME" => "eventsFilter",
        "ADD_SECTIONS_CHAIN" => "N",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(),
        "IBLOCK_ID" => EVENTS_IBLOCK,
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "NEWS_COUNT" => "1000",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "main",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PROPERTY_CODE" => array("*"),
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SORT_BY1" => "ID",
        "SORT_ORDER1" => "ASC",
        "DATE" => $arParams['DATE'],
        "SUMMIT" => $arResult['CODE']
    )
);?>