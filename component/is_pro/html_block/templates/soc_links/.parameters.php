<?php

$set = array(
	'SOC_VK' => 'В контакте',
    'SOC_OK' => 'Однокласники',
	'SOC_FB' => 'Facebook',
	'SOC_INS' => 'Instagram',
);


$arTemplateParameters = array();
foreach ($set as $k => $val) {
	$arTemplateParameters[$k] = array(
		'NAME' => $val,
		'COLS' => 35,
		'ROWS' => 3
	);
}
