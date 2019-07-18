<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<!--========== PAGE LAYOUT ==========-->
<?php $APPLICATION->IncludeComponent(
    "custom:work",      // iblock  с выборкой работ
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:clients",   // iblock с перечислением клиентов
    "",
    Array()
); ?>
<!--========== END PAGE LAYOUT ==========-->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>