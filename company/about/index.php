<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<!--========== PAGE LAYOUT ==========-->
<?php $APPLICATION->IncludeComponent(
    "custom:about",   // iblock с перечислением клиентов
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:clients",   // iblock с перечислением клиентов
    "",
    Array()
); ?>

<?php $APPLICATION->IncludeComponent(
    "custom:articles",  // iblock с подборкой статей
    "",
    Array()
); ?>
<!--========== END PAGE LAYOUT ==========-->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>