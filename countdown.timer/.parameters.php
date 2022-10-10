<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"TIMER_TITLE" => array(
			"NAME" => GetMessage('COMPONENT_PARAMETER_COUNTDOWN_TITLE'),
			"TYPE" => "STRING",
			"DEFAULT" => ""
		),
		'COUNTDOWN_DATE' => array(
			'NAME' => GetMessage('COMPONENT_PARAMETER_COUNTDOWN_DATE'),
			'TYPE' => 'CUSTOM',
			'JS_FILE' => $componentPath . '/script.settings.js',
			'JS_EVENT' => 'onSetCountDownDate',
			'JS_DATA' => json_encode(array('set' => '')),
			'DEFAULT' => "",
		),
	)
);