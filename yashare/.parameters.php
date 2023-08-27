<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arStyles = array(
	"icons" => GetMessage("CITRUS_YASHARE_STYLES_VALUE_ICON_NAME"),
	"counters" => GetMessage("CITRUS_YASHARE_STYLES_VALUE_COUNTERS_NAME"),
	"iconsmenu" => GetMessage("CITRUS_YASHARE_STYLES_VALUE_ICONMENU_NAME"),
	"small" => GetMessage("CITRUS_YASHARE_STYLES_VALUE_SMALL_NAME"),
);

$arSocservises = array(
	"collections" => GetMessage("CITRUS_YASHARE_SOC_VALUE_COLLECTIONS_NAME"),
	"vkontakte" => GetMessage("CITRUS_YASHARE_SOC_VALUE_VKONTAKTE_NAME"),
	"facebook" => GetMessage("CITRUS_YASHARE_SOC_VALUE_FACEBOOK_NAME"),
	"odnoklassniki" => GetMessage("CITRUS_YASHARE_SOC_VALUE_ODNOKL_NAME"),
	"moimir" => GetMessage("CITRUS_YASHARE_SOC_VALUE_MOIMIR_NAME"),
	"gplus" => GetMessage("CITRUS_YASHARE_SOC_VALUE_GPLUS_NAME"),
	"twitter" => GetMessage("CITRUS_YASHARE_SOC_VALUE_TWITTER_NAME"),
	"blogger" => GetMessage("CITRUS_YASHARE_SOC_VALUE_BLOGGER_NAME"),
	"delicious" => GetMessage("CITRUS_YASHARE_SOC_VALUE_DELICIOUS_NAME"),
	"digg" => GetMessage("CITRUS_YASHARE_SOC_VALUE_DIGG_NAME"),
	"reddit" => GetMessage("CITRUS_YASHARE_SOC_VALUE_REDDIT_NAME"),
	"evernote" => GetMessage("CITRUS_YASHARE_SOC_VALUE_EVERNOTE_NAME"),
	"linkedin" => GetMessage("CITRUS_YASHARE_SOC_VALUE_LINKEDIN_NAME"),
	"lj" => GetMessage("CITRUS_YASHARE_SOC_VALUE_LJ_NAME"),
	"pocket" => GetMessage("CITRUS_YASHARE_SOC_VALUE_POCKET_NAME"),
	"qzone" => GetMessage("CITRUS_YASHARE_SOC_VALUE_QZONE_NAME"),
	"renren" => GetMessage("CITRUS_YASHARE_SOC_VALUE_RENREN_NAME"),
	"sinaWeibo" => GetMessage("CITRUS_YASHARE_SOC_VALUE_SINA_NAME"),
	"surfingbird" => GetMessage("CITRUS_YASHARE_SOC_VALUE_SURFINGBIRD_NAME"),
	"tencentWeibo" => GetMessage("CITRUS_YASHARE_SOC_VALUE_TENCENT_NAME"),
	"tumblr" => GetMessage("CITRUS_YASHARE_SOC_VALUE_TUMBLUR_NAME"),
	"viber" => GetMessage("CITRUS_YASHARE_SOC_VALUE_VIBER_NAME"),
	"whatsapp" => GetMessage("CITRUS_YASHARE_SOC_VALUE_WATSAPP_NAME"),
	"skype" => GetMessage("CITRUS_YASHARE_SOC_VALUE_SKYPE_NAME"),
	"telegram" => GetMessage("CITRUS_YASHARE_SOC_VALUE_TELEGRAM_NAME"),
);

$arAlign = array(
	"ar_al_left" => GetMessage("CITRUS_YASHARE_ALIGN_LEFT_NAME"),
	"ar_al_center" => GetMessage("CITRUS_YASHARE_ALIGN_CENTER_NAME"),
	"ar_al_right" => GetMessage("CITRUS_YASHARE_ALIGN_RIGHT_NAME"),
);

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_VALUES" => array(
			"NAME" => GetMessage("CITRUS_YASHARE_MAIN_VALUES_NAME"),
		),
		"DOP_VALUES" => array(
			"NAME" => GetMessage("CITRUS_YASHARE_DOP_VALUES_NAME"),
		),
	),
	"PARAMETERS" => array(
		"VISUAL_STYLE"=>array(
			"PARENT" => "MAIN_VALUES",
			"NAME" => GetMessage("CITRUS_YASHARE_VISUAL_STYLE_NAME"),
			"TYPE" => "LIST",
			"VALUES" => $arStyles,
			"MULTIPLE" => "Т",
			"REFRESH" => "Y",
			"DEFAULT" => array(),	
		),
		"SERVISE_LIST"=>array(
			"PARENT" => "MAIN_VALUES",
			"NAME" => GetMessage("CITRUS_YASHARE_SERVISE_LIST_NAME"),
			"TYPE" => "LIST",
			"VALUES" => $arSocservises,
			"MULTIPLE" => "Y",
			"DEFAULT" => array_keys($arSocservises),	
		),
		"TEXT_ALIGN"=>array(
			"PARENT" => "MAIN_VALUES",
			"NAME" => GetMessage("CITRUS_YASHARE_TEXT_ALIGN_NAME"),
			"TYPE" => "LIST",
			"VALUES" => $arAlign,
			"MULTIPLE" => "N",
			"DEFAULT" => "",	
		),
		"TEXT_BEFORE"=>array(
			"PARENT" => "MAIN_VALUES",
			"NAME" => GetMessage("CITRUS_YASHARE_TEXT_BEFORE_NAME"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",	
		),
	),
);
if($arCurrentValues["VISUAL_STYLE"] == 'iconsmenu')
{
	$arComponentParameters["PARAMETERS"]["COUNT_FOR_SMALL"] = Array(
		"NAME" => GetMessage("CITRUS_YASHARE_SERVISE_COUNT_FOR_SMALL_NAME"),
		"TYPE" => "STRING",
		"MULTIPLE" => "N",
		"DEFAULT" => "3",
		"COLS" => 25,
		"PARENT" => "MAIN_VALUES",
	);
}
?>