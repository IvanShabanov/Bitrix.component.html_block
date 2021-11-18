<?php

class html_block extends CBitrixComponent
{
	public function executeComponent ()
	{
        $this->arResult = $this->arParams;
		$this->includeComponentTemplate();
	}
}