<? 
    use \Bitrix\Main\Localization\Loc;
?>
<? if ($arResult['ITEMS']): ?>
    <section class="summit-price-block">
        <div class="wrapper">
            <div class="summit-price-block-title">
                <?=Loc::GetMessage('PARTICIPATE_PRICING', [], $arParams['LANG'])?>
            </div>

            <div class="summit-price-block-row">
                <div class="summit-price-block-left">
                    <div style="overflow-x: auto">
                        <table class="summit-price-block-table">
                            <tr class="summit-price-block-table-heading">
                                <th>
                                    <div class="summit-price-block-table-title">
                                        <?=Loc::GetMessage('REGISTRATION_TYPE', [], $arParams['LANG'])?>
                                    </div>
                                </th>
                                <td>
                                    <div class="summit-price-block-table-title">
                                        <?=Loc::GetMessage('EARLY_REGISTRATION', [], $arParams['LANG'])?>
                                    </div>
                                    <? if ($arResult['EARLY_REGISTRATION']): ?>
                                        <div class="summit-price-block-table-subtitle">
                                            <?=Loc::GetMessage('BEFORE', [], $arParams['LANG'])?> <?=$arResult['EARLY_REGISTRATION']?>
                                        </div>
                                    <? endif ?>
                                </td>
                                <td>
                                    <div class="summit-price-block-table-title">
                                        <?=Loc::GetMessage('LATE_REGISTRATION', [], $arParams['LANG'])?>
                                    </div>
                                    <? if ($arResult['EARLY_REGISTRATION']): ?>
                                        <div class="summit-price-block-table-subtitle">
                                            <?=Loc::GetMessage('AFTER', [], $arParams['LANG'])?> <?=$arResult['EARLY_REGISTRATION']?>
                                        </div>
                                    <? endif ?>
                                </td>
                            </tr>
                            <? foreach ($arResult['ITEMS'] as $item): ?>
                                <tr>
                                    <th>
                                        <div class="summit-price-block-table-border">
                                            <?=$item['NAME']?>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="summit-price-block-table-border">
                                            <span class="summit-price-block-table-value">
                                                <?=$item['PROPERTIES']['BEFORE']['VALUE']?>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="summit-price-block-table-border">
                                            <span class="summit-price-block-table-value">
                                                <?=$item['PROPERTIES']['AFTER']['VALUE']?>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            <? endforeach ?>
                            <tr>
                                <th>&nbsp;</th>
                                <td colspan="2">
                                    <div class="summit-price-block-table-charge">
                                        <?=Loc::GetMessage('PRICE_SPECIFIED_WITH_NDS', [], $arParams['LANG'])?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="summit-price-block-right">
                    <div class="summit-price-block-card">
                        <div class="summit-price-block-card-icon">
                            <? echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icons/icon-summit-registration-users.svg"); ?>
                        </div>
                        <?=Loc::GetMessage('TRADITIONAL_DISCOUNTS', [], $arParams['LANG'])?>
                    </div>

                    <div class="summit-price-block-card">
                        <div class="summit-price-block-card-icon">
                            <? echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/images/icons/icon-summit-registration-discount.svg"); ?>
                        </div>
                        <?=Loc::GetMessage('ADDITIONAL_DISCOUNT', [], $arParams['LANG'])?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? endif ?>