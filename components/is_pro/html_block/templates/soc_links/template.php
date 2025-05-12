<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>

<div class="social_links">
	<?foreach ($arResult as $key=>$item) :?>
		<?if ((mb_substr($key, 0, 4) == 'SOC_') && (trim($item) != '')) :?>
		<a class="social_link <?=$key?>" href="<?=$item?>"></a>
		<?endif;?>
	<?endforeach;?>
</div>