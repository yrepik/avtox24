<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<p class="title-h2"><?=GetMessage("SOA_TEMPL_SUM_TITLE")?></p>

<table class="sale_order_full data-table silver-table">
    <thead>
        <tr>
            <th><?=GetMessage("SOA_TEMPL_SUM_NAME")?></th>
            <th><?=GetMessage("SOA_TEMPL_SUM_PROPS")?></th>
            <th><?=GetMessage("SOA_TEMPL_SUM_PRICE_TYPE")?></th>
            <th><?=GetMessage("SOA_TEMPL_SUM_DISCOUNT")?></th>
            <th><?=GetMessage("SOA_TEMPL_SUM_WEIGHT")?></th>
            <th><?=GetMessage("SOA_TEMPL_SUM_QUANTITY")?></th>
            <th><?=GetMessage("SOA_TEMPL_SUM_PRICE")?></th>
        </tr>
    </thead>
    <tbody>

    <?
    foreach($arResult["BASKET_ITEMS"] as $arBasketItems)
    {
        ?>
        <tr>
            <td><?=$arBasketItems["NAME"]?></td>
            <td>
                <?
                foreach ($arBasketItems["PROPS"] as $val) {
                    if (in_array($val['CODE'], (array) $arParams['HIDE_PROPERTIES'])) {
                        continue;
                    }

                    if (strtoupper($val["CODE"]) == 'DELIVERY_TIME') {
                        $time_deliv = round(($val["VALUE"]/24), 0, PHP_ROUND_HALF_UP);
                        echo $val["NAME"]." ~ ".$time_deliv." ".GetMessage('LM_AUTO_DAYS').".<br />";
                        continue;
                    }
                    echo $val["NAME"].": ".$val["VALUE"]."<br />";
                }
                ?>
            </td>
            <td><?=$arBasketItems["NOTES"]?></td>
            <td><?=$arBasketItems["DISCOUNT_PRICE_PERCENT_FORMATED"]?></td>
            <td><?=$arBasketItems["WEIGHT_FORMATED"]?></td>
            <td><?=$arBasketItems["QUANTITY"]?></td>
            <td align="right"><?=$arBasketItems["PRICE_FORMATED"]?></td>
        </tr>
        <?
    }
    ?>
    <tr>
        <td align="right"><b><?=GetMessage("SOA_TEMPL_SUM_WEIGHT_SUM")?></b></td>
        <td align="right" colspan="6"><?=$arResult["ORDER_WEIGHT_FORMATED"]?></td>
    </tr>
    <tr>
        <td align="right"><b><?=GetMessage("SOA_TEMPL_SUM_SUMMARY")?></b></td>
        <td align="right" colspan="6"><?=$arResult["ORDER_PRICE_FORMATED"]?></td>
    </tr>
    <?
    if (doubleval($arResult["DISCOUNT_PRICE"]) > 0)
    {
        ?>
        <tr>
            <td align="right"><b><?=GetMessage("SOA_TEMPL_SUM_DISCOUNT")?><?if (strLen($arResult["DISCOUNT_PERCENT_FORMATED"])>0):?> (<?echo $arResult["DISCOUNT_PERCENT_FORMATED"];?>)<?endif;?>:</b></td>
            <td align="right" colspan="6"><?echo $arResult["DISCOUNT_PRICE_FORMATED"]?>
            </td>
        </tr>
        <?
    }
    /*
    if (doubleval($arResult["VAT_SUM_FORMATED"]) > 0)
    {
        ?>
        <tr>
            <td align="right">
                <b><?=GetMessage("SOA_TEMPL_SUM_VAT")?></b>
            </td>
            <td align="right" colspan="6"><?=$arResult["VAT_SUM_FORMATED"]?></td>
        </tr>
        <?
    }
    */
    if(!empty($arResult["arTaxList"]))
    {
        foreach($arResult["arTaxList"] as $val)
        {
            ?>
            <tr>
                <td align="right"><?=$val["NAME"]?> <?=$val["VALUE_FORMATED"]?>:</td>
                <td align="right" colspan="6"><?=$val["VALUE_MONEY_FORMATED"]?></td>
            </tr>
            <?
        }
    }
    if (doubleval($arResult["DELIVERY_PRICE"]) > 0)
    {
        ?>
        <tr>
            <td align="right">
                <b><?=GetMessage("SOA_TEMPL_SUM_DELIVERY")?></b>
            </td>
            <td align="right" colspan="6"><?=$arResult["DELIVERY_PRICE_FORMATED"]?></td>
        </tr>
        <?
    }
    ?>
    <tr>
        <td align="right"><b><?=GetMessage("SOA_TEMPL_SUM_IT")?></b></td>
        <td align="right" colspan="6"><b><?=$arResult["ORDER_TOTAL_PRICE_FORMATED"]?></b>
        </td>
    </tr>
    <?
    if (strlen($arResult["PAYED_FROM_ACCOUNT_FORMATED"]) > 0)
    {
        ?>
        <tr>
            <td align="right"><b><?=GetMessage("SOA_TEMPL_SUM_PAYED")?></b></td>
            <td align="right" colspan="6"><?=$arResult["PAYED_FROM_ACCOUNT_FORMATED"]?></td>
        </tr>
        <?
    }
    ?>
    </tbody>
</table>


<div align="right"><a class="btn" href="/auto/cart/" id="PATH_TO_CART"><?= GetMessage('SOA_CHANGE_ORDER') ?></a></div>
<br />

<div class="silver-block-mini">
    <div class="silver-block-mini-head"><?=GetMessage("SOA_TEMPL_SUM_ADIT_INFO")?></div>
    <table class="sale_order_full_table">
        <tr><td width="50%" align="left" valign="top"><b><?=GetMessage("SOA_TEMPL_SUM_COMMENTS")?></b></td></tr>
        <tr>
            <td>
                <textarea rows="4" cols="40" name="ORDER_DESCRIPTION"><?=$arResult["USER_VALS"]["ORDER_DESCRIPTION"]?></textarea>
            </td>
        </tr>
    </table>
</div>
