<?php
use local\lib\helpers\TTL;
class Works extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $Works = null;
        $elements = [];
        /** @var CPHPCache $obCache - Экземпляр класса, который будет кешировать вычисления */
        $obCache = new CPHPCache;
        /**Получает данные из кеша*/
        if ($obCache->InitCache(TTL::DAY,'','/Work/')){
            /** GetVars Возвращает PHP переменные сохраненные в кеше */
            $elements = $obCache->GetVars()['elements'];
            /** Если кеш умер, сброшен или еще не было в нем данных, то выполняются запросы и реализуется логика  */
        } elseif ($obCache->StartDataCache()) {
            /** запрашиваем из бд все элементы iblock */
            $Works = CIBlockElement::GetList(
                [],
                [
                    '=IBLOCK_TYPE' => 'Work',
                    '=IBLOCK_CODE' => 'Work',
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PICTURE', 'DETAIL_TEXT' , 'PREVIEW_TEXT', 'PROPERTY_DESCRHEAD','PROPERTY_DESCRIPTION_EN', 'PROPERTY_LINK', 'PROPERTY_QUANTITY_PHOTOS']
            );
            while ($element = $Works->Fetch()) {
                $elements[] = $element;
            };
            $obCache->EndDataCache(['elements' => $elements]);
        }
        $this->arResult['MidGallery'] = $elements;
        $this->includeComponentTemplate();
    }
}

