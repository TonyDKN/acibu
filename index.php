<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
   <?php $APPLICATION->SetTitle("Acibus"); ?>

<!--========== PAGE LAYOUT ==========-->

<?php $APPLICATION->IncludeComponent(
    "custom:gallery_main", // iblock с подборкой фото расположенных под top-menu
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:articles",  // iblock с подборкой статей
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:clients",   // iblock с перечислением клиентов
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:work",      // iblock  с выборкой работ
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:reviews",   // iblock с отзывами
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:team",      // iblock  с описанием команды
    "",
    Array()
); ?>
<!--========== END PAGE LAYOUT ==========-->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>