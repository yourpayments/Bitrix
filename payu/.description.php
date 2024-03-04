<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
include(GetLangFileName(dirname(__FILE__)."/", "/.description.php"));


$psTitle = "PayU";
$psDescription = "<a href=\"http://ypmn.ru\" target=\"_blank\">http://ypmn.ru</a>";

$array = array(
					'payu_merchant',
					'payu_secret_key',
					'payu_lu_url',
					'payu_price_currency',
					'payu_debug_mode',
					'payu_back_ref',
					'payu_language',
					'payu_VAT'
				  );


$arPSCorrespondence = array(
	 "MERCHANT" => array(
				"NAME" => GetMessage("PEYU_MERCHANT"),
				"DESCR" => GetMessage("PEYU_MERCHANT"),
				"VALUE" => "",
				"TYPE" => ""
			),
	  "SECURE_KEY" => array(
				"NAME" => GetMessage("PEYU_SECURE_KEY"),
				"DESCR" => GetMessage("PEYU_SECURE_KEY"),
				"VALUE" => "",
				"TYPE" => ""
			),
	  "LU_URL" => array(
				"NAME" => GetMessage("PEYU_LU_URL"),
				"DESCR" =>  GetMessage("PEYU_DESC_LU_URL"),
				"VALUE" => "",
				"TYPE" => ""
			),
	  "PRICE_CURRENCY" => array(
				"NAME" => GetMessage("PEYU_PRICE_CURRENCY"),
				"DESCR" =>  GetMessage("PEYU_DESC_PRICE_CURRENCY"),
				"VALUE" => "CURRENCY",
            	"TYPE" => "ORDER"
			),
	  "DEBUG_MODE" => array(
				"NAME" => GetMessage("PEYU_DEBUG_MODE"),
				"DESCR" => GetMessage("PEYU_DESC_DEBUG_MODE"),
				"VALUE" => "1",
				"TYPE" => ""
			),
	  "BACK_REF" => array(
				"NAME" => GetMessage("PEYU_BACK_REF"),
				"DESCR" => GetMessage("PEYU_DESC_BACK_REF"),
				"VALUE" => "",
				"TYPE" => ""
			),
	  "LANGUAGE" => array(
				"NAME" => GetMessage("PEYU_LANGUAGE"),
				"DESCR" =>  GetMessage("PEYU_DESC_LANGUAGE"),
				"VALUE" => "RU",
				"TYPE" => ""
			),
);
?>
