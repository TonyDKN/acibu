<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- Clients -->
<div class="content-md container">
    <div class="row margin-b-40">
        <div class="col-sm-6">
            <h2>Our Clients</h2><!--СДЕЛАТЬ РЕДАКТИРУЕМЫМ-->
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
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