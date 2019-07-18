<?php
use local\lib\helpers\TTL;
class Reviews extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $Reviews = null;
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
            $Reviews = CIBlockElement::GetList(
                [],
                [
                    '=IBLOCK_TYPE' => 'Reviews',
                    '=IBLOCK_CODE' => 'Reviews',
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'NAME','PROPERTY_POSITION', 'PROPERTY_REVIEWER', 'DETAIL_TEXT' ]
            );
            while ($element = $Reviews->Fetch()) {
                $elements[] = $element;
            };
            $obCache->EndDataCache(['elements' => $elements]);
        }
        $this->arResult['Reviews'] = $elements;
        $this->includeComponentTemplate();
    }
}

