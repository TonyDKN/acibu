<?php
use local\lib\helpers\TTL;
class About extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $About = null;
        $elements = [];
        /** @var CPHPCache $obCache - Экземпляр класса, который будет кешировать вычисления */
        $obCache = new CPHPCache;
        /**Получает данные из кеша*/
        if ($obCache->InitCache(TTL::DAY,'','/About/')){
            /** GetVars Возвращает PHP переменные сохраненные в кеше */
            $elements = $obCache->GetVars()['elements'];
            /** Если кеш умер, сброшен или еще не было в нем данных, то выполняются запросы и реализуется логика  */
        } elseif ($obCache->StartDataCache()) {
            /** запрашиваем из бд все элементы iblock */
            $About = CIBlockElement::GetList(
                [],
                [
                    '=IBLOCK_TYPE' => 'About',
                    '=IBLOCK_CODE' => 'About',
                ],
                false,
                false,
                ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PICTURE', 'DETAIL_TEXT' , 'PREVIEW_TEXT']
            );
            while ($element = $About->Fetch()) {
                $elements[] = $element;
            };
            $obCache->EndDataCache(['elements' => $elements]);
        }
        $this->arResult['About'] = $elements;
        $this->includeComponentTemplate();
    }
}
