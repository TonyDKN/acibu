<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<!--========== PAGE LAYOUT ==========-->
<!-- Google Map -->
<div id="map" class="map height-300"></div>

<?php $APPLICATION->IncludeComponent(
    "custom:contacts", // iblock с контактами
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:feedback", // iblock с формой обратной связи
    "",
    Array()
); ?>


<!--========== END PAGE LAYOUT ==========-->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>