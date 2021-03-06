<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/tecdoc-part-detail/([^\\/]+?)/([^\\/]+?)/#",
		"RULE" => "ARTICLE_ID=\$1&ARTICLE_LINK_ID=\$2",
		"ID" => "",
		"PATH" => "/auto/tecdoc/detail/index.php",
	),
	array(
		"CONDITION" => "#^/auto/part-detail/([^\\/]+?)/([^\\/]+?)/#",
		"RULE" => "ARTICLE_ID=\$1&ARTICLE_LINK_ID=\$2",
		"ID" => "",
		"PATH" => "/auto/tecdoc/detail/index.php",
	),
	array(
		"CONDITION" => "#^/auto/search/detail/(.+?)/(.+?)/#",
		"RULE" => "part_id=\$1&supplier_id=\$2&",
		"ID" => "",
		"PATH" => "/auto/search/index.php",
	),
	array(
		"CONDITION" => "#^/auto/search/(.+?)/(.+?)/#",
		"RULE" => "q=\$1&brand_title=\$2&",
		"ID" => "",
		"PATH" => "/auto/search/index.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/personal/garage/vpn/#",
		"RULE" => "",
		"ID" => "linemedia.auto:personal.request.vin.iblock",
		"PATH" => "/personal/garage/vpn/index.php",
	),
	array(
		"CONDITION" => "#^/acrit.exportpro/(.*)#",
		"RULE" => "path=\$1",
		"ID" => "",
		"PATH" => "/acrit.exportpro/index.php",
	),
	array(
		"CONDITION" => "#^/auto/catalogs/oem/#",
		"RULE" => "",
		"ID" => "linemedia.auto:original.catalog.index",
		"PATH" => "/auto/catalogs/oem/index.php",
	),
	array(
		"CONDITION" => "#^/auto/search/(.+?)/#",
		"RULE" => "q=\$1&",
		"ID" => "",
		"PATH" => "/auto/search/index.php",
	),
	array(
		"CONDITION" => "#^/m/personal/order/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/m/personal/order/index.php",
	),
	array(
		"CONDITION" => "#^/personal/order/#",
		"RULE" => "",
		"ID" => "bitrix:sale.personal.order",
		"PATH" => "/personal/_order/index.php",
	),
	array(
		"CONDITION" => "#^/services/idea/#",
		"RULE" => "",
		"ID" => "bitrix:idea",
		"PATH" => "/services/idea/index.php",
	),
	array(
		"CONDITION" => "#^/auto/tecdoc/#",
		"RULE" => "",
		"ID" => "linemedia.autotecdoc:tecdoc.catalog2",
		"PATH" => "/auto/tecdoc/index.php",
	),
	array(
		"CONDITION" => "#^/auto/tecdoc/#",
		"RULE" => "",
		"ID" => "linemedia.auto:tecdoc.catalog2",
		"PATH" => "/bitrix/templates/fast-start_blue/include/row_brands.php",
	),
	array(
		"CONDITION" => "#^/auto/tecdoc/#",
		"RULE" => "",
		"ID" => "linemedia.auto:tecdoc.catalog2",
		"PATH" => "/bitrix/templates/fast-start_blue_copy/include/row_brands.php",
	),
	array(
		"CONDITION" => "#^/about/idea/#",
		"RULE" => "",
		"ID" => "bitrix:idea",
		"PATH" => "/about/idea/index.php",
	),
	array(
		"CONDITION" => "#^/m/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/m/catalog/index.php",
	),
	array(
		"CONDITION" => "#^/auto/vin/#",
		"RULE" => "",
		"ID" => "linemedia.auto:personal.request.vin.iblock",
		"PATH" => "/auto/vin/index.php",
	),
	array(
		"CONDITION" => "#^/articles/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/articles/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/catalog/index.php",
	),
	array(
		"CONDITION" => "#^/m/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/m/news/index.php",
	),
	array(
		"CONDITION" => "#^/forum/#",
		"RULE" => "",
		"ID" => "bitrix:forum",
		"PATH" => "/forum/index.php",
	),
	array(
		"CONDITION" => "#^/blog/#",
		"RULE" => "",
		"ID" => "bitrix:blog",
		"PATH" => "/blog/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>