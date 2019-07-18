<?php
use local\lib\helpers\TTL;
class Contacts extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $Contacts = null;
        $elements = [];
        /** @var CPHPCache $obCache - Экземпляр класса, который будет кешировать вычисления */
        $obCache = new CPHPCache;
        /**Получает данные из кеша*/
        if ($obCache->InitCache(TTL::DAY,'','/Contacts/')){
            /** GetVars Возвращает PHP переменные сохраненные в кеше */
            $elements = $obCache->GetVars()['elements'];
            /** Если кеш умер, сброшен или еще не было в нем данных, то выполняются запросы и реализуется логика  */
        } elseif ($obCache->StartDataCache()) {
            /** запрашиваем из бд все элементы iblock */
            $Contacts = CIBlockElement::GetList(
                [],
                [
                    '=IBLOCK_TYPE' => 'Contacts',
                    '=IBLOCK_CODE' => 'Contacts',
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_TEXT' , 'PREVIEW_TEXT', 'PROPERTY_EMAIL', 'PROPERTY_FUNCTION', 'PROPERTY_NUMBER']
            );
            while ($element = $Contacts->Fetch()) {
                $elements[] = $element;
            };
            $obCache->EndDataCache(['elements' => $elements]);
        }
        $this->arResult['Contacts'] = $elements;
        $this->includeComponentTemplate();
    }
}
