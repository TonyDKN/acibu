<?php

class Articles extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $Articles = null;
        $elements = [];
            $Articles = CIBlockElement::GetList(
                [],
                [
                    '=IBLOCK_TYPE' => 'Articles',
                    '=IBLOCK_CODE' => 'Articles',
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_TEXT' , 'PREVIEW_TEXT', 'PROPERTY_DESCRIPTION_EN', 'PROPERTY_DESCRIPTION_RU', 'PROPERTY_LINK', 'PROPERTY_DELAY']
            );
            while ($element = $Articles->Fetch()) {
                $elements[] = $element;
            };
        $this->arResult['ITEMS'] = $elements;
        $this->includeComponentTemplate();
    }
}


