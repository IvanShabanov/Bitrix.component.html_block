<?php

$arMyParams = array(
	'TITLE' => 'Заголовок',
	'TEXT' => 'Текст',
	'PARAM1' => 'Параметр 1',
	'PARAM2' => 'Параметр 2',
);

$arTemplateParameters = [];
foreach ($arMyParams as $val) {
	$arTemplateParameters[] = [
		'NAME' => $val,
		'COLS' => 35,
		'ROWS' => 3
    ];
}
