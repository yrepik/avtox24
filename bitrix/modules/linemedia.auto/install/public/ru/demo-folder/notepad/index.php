<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Блокнот");
?>
<?$APPLICATION->IncludeComponent(
    "linemedia.auto:personal.notepad",
    "",
    Array(
        "ADD_SECTION_CHAIN" => "Y",
        "INIT_JQUERY" => "Y",
        "SEARCH_ARTICLE_URL" => "/auto/search/"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>