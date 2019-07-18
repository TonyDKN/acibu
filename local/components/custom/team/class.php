<?php
use local\lib\helpers\TTL;
class Team extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $Workers = null;
        $elements = [];
        /** @var CPHPCache $obCache - Экземпляр класса, который будет кешировать вычисления */
        $obCache = new CPHPCache;
        /**Получает данные из кеша*/
        if ($obCache->InitCache(TTL::DAY,'','/Clients/')){
            /** GetVars Возвращает PHP переменные сохраненные в кеше */
            $elements = $obCache->GetVars()['elements'];
            /** Если кеш умер, сброшен или еще не было в нем данных, то выполняются запросы и реализуется логика  */
        } elseif ($obCache->StartDataCache()) {
            /** запрашиваем из бд все элементы iblock */
            $Workers = CIBlockElement::GetList(
                [],
                [
                    '=IBLOCK_TYPE' => 'Team',
                    '=IBLOCK_CODE' => 'Team',
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PICTURE', 'DETAIL_TEXT', 'PREVIEW_TEXT', 'PROPERTY_LINK', 'PROPERTY_READ_MORE']
            );
            while ($element = $Workers->Fetch()) {
                $elements[] = $element;
            };
            $obCache->EndDataCache(['elements' => $elements]);
        }
        $this->arResult['Workers'] = $elements;
        $this->includeComponentTemplate();
    }
}

