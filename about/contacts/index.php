<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Avtox24");
/*$APPLICATION->SetTitle("Задайте вопрос");*/
?><p>
 <b>Телефоны отдела продаж:</b>
</p>
<p>
</p>
<h3> <b>8&nbsp;(495) 150-12-95</b>&nbsp;</h3>
<h3></h3>
<p>
</p>
<p>
	<span style="font-size: large; text-align: right;">8&nbsp;(499) 350-36-04&nbsp;</span> <br>
	<span style="font-size: large; text-align: right;">8&nbsp;(499) 705-93-62<br>
 </span><span style="font-size: large; text-align: right;">8 (800) 333-98-51</span>
</p>
<b>Адрес: &nbsp;</b><b style="font-size: large;">&nbsp;</b><b>127238</b>&nbsp;<b>г. Москва, Ильменский пр-д., д.1. стр1. оф 1</b>
<p>
 <a href="mailto:info@avtox24.ru">info@</a><a href="mailto:info@avtox24.ru">avtox24.ru</a>
</p>
<p>
	 <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=dh_w6LkreZTlkCG5jiHFW7PQqpfecPnf&width=-1&height=450"></script>
</p>
 <br>
<p>
</p>
<div style="page-break-after: always">
 <span style="display: none">&nbsp;</span>
</div>
 Уважаемые покупатели! <br>
 Прежде чем задать свой вопрос, обратите внимание на раздел <a href="../faq/">Помощь покупателю</a>. Возможно, там уже есть исчерпывающая информация по решению вашей проблемы.
<p>
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"lm-auto",
	Array(
		"COMPONENT_TEMPLATE" => "lm-auto",
		"EMAIL_TO" => "info@avtox24.ru",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>