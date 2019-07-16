<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php foreach ($arResult['Clients'] as $item)?>
<!-- Clients -->
<div class="content-md container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2><?= $item['DETAIL_TEXT'] ?></h2>
            <p><?= $item['PREVIEW_TEXT'] ?></p>
        </div>
    </div>
    <!--// end row -->

    <!-- Swiper Clients -->
    <div class="swiper-slider swiper-clients">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <?php foreach ($arResult['Clients'] as $arItem):?>
                <div class="swiper-slide">
                    <img class="swiper-clients-img" src="<?= CFile::GetPath($arItem['DETAIL_PICTURE'])?>" alt="Clients Logo">
                </div>
            <?php endforeach; ?>
        </div>
        <!-- End Swiper Wrapper -->
    </div>
    <!-- End Swiper Clients -->
</div>
<!-- End Clients -->