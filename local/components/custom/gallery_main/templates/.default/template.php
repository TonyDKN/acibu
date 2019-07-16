<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php foreach ($arResult as $arItem)?>
<div class="bg-color-sky-light">
    <div class="content-md container">
        <!-- Masonry Grid -->
        <div class="masonry-grid">
            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-6"></div>
            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-6">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?= CFile::GetPath($arItem[1]['DETAIL_PICTURE'])?>" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5"><?= $arItem[1]['DETAIL_TEXT']; ?></h3>
                        <p class="color-white margin-b-0"><?= $arItem[1]['PREVIEW_TEXT']; ?></p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?= CFile::GetPath($arItem[2]['DETAIL_PICTURE'])?>" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5"><?= $arItem[2]['DETAIL_TEXT']; ?></h3>
                        <p class="color-white margin-b-0"><?= $arItem[2]['PREVIEW_TEXT']; ?></p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-6">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="<?= CFile::GetPath($arItem[0]['DETAIL_PICTURE'])?>" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5"><?= $arItem[0]['DETAIL_TEXT']; ?></h3>
                        <p class="color-white margin-b-0"><?= $arItem[0]['PREVIEW_TEXT']; ?></p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
        </div>
        <!-- End Masonry Grid -->
    </div>
</div>
<!-- End Work -->
