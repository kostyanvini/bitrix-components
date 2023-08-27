<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>

<style>
	.ya-share2 ul{margin: 0 !important;}
	.ya-share2 li{list-style-type: none !important; text-indent: 0 !important; padding: 0 !important;}
	.ya-share2 li:before{content: '' !important; background-image: inherit !important;}
	.ya-share2__item{margin-right: 5px !important;}
	.ar_al_left {text-align:left;}
	.ar_al_center {text-align:center;}
	.ar_al_right {text-align:right;}
	.ya-share-text-wrap {display: inline-block; vertical-align: middle;}
	.ya-share-wrap {display: inline-block; vertical-align: middle;}
</style>

<?
if(empty($arParams["SERVISE_LIST"])){
	$arParams["SERVISE_LIST"] = array("collections", "vkontakte", "facebook", "odnoklassniki", "moimir", "gplus", "twitter", "blogger", "delicious", "digg", "reddit", "evernote", "linkedin", "lj", "pocket", "qzone", "renren", "sinaWeibo", "surfingbird", "tencentWeibo", "tumblr", "viber", "whatsapp", "skype", "telegram");
}

$arParamsShow = array(
	"icons" => '',
	"counters" => 'data-counter=""',
	"iconsmenu" => ' data-limit="'.(($arParams["COUNT_FOR_SMALL"]) ? $arParams["COUNT_FOR_SMALL"] : 3).'"',
	"small" => 'data-size="s"',
);
?>

<div class="yandex-share-panel <?=$arParams["TEXT_ALIGN"]?>">
	<?if(trim($arParams["TEXT_BEFORE"])):?><div class="ya-share-text-wrap"><?=$arParams["TEXT_BEFORE"]?></div><?endif;?>
	<div class="ya-share-wrap"><div class="ya-share2" data-services="<?=implode(',', $arParams["SERVISE_LIST"])?>" <?=$arParamsShow[$arParams["VISUAL_STYLE"]]?> ></div></div>
</div>
