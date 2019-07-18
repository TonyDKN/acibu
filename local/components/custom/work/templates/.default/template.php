<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php foreach ($arResult as $arItem) ?>
<!-- Work -->
<div class="bg-color-sky-light overflow-h">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2><?= $arItem[5]["PROPERTY_DESCRHEAD_VALUE"]; ?></h2>
                <p><?= $arItem[5]["PROPERTY_DESCRIPTION_EN_VALUE"]; ?></p>
            </div>
        </div>
        <!--// end row -->

        <!-- Masonry Grid -->
        <div class="masonry-grid">
            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
            <?php $number = $arItem[5]["PROPERTY_QUANTITY_PHOTOS_VALUE"];?>
            <?php if($_SERVER['REQUEST_URI'] = "/" || "/?clear_cache=Y" ){  //проверяем находимся ли мы на "/" если да, то режем количество выводимых фото до 5
                    $outputs = array_slice($arResult['MidGallery'], 0, $number);
                }
                else {
                    $outputs = array_slice($arResult['MidGallery'], 0, 0);
                }
            ?>
            <?php foreach ($outputs as $key => $arItem):?>
                    <?php if ($key ==0){
                            echo "<div class=\"masonry-grid-item col-xs-12 col-sm-6 co    l-md-8\">";
                            }
                            else {
                                echo "<div class=\"masonry-grid-item col-xs-6 col-sm-6 col-md-4\">";
                                 }
                    ?>
                        <!-- Work -->
                        <div class="work">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="<?= CFile::GetPath($arItem['DETAIL_PICTURE'])?>" alt="Portfolio Image">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?= $arItem["PREVIEW_TEXT"]; ?></h3>
                                <p class="color-white margin-b-0"><?= $arItem["DETAIL_TEXT"]; ?></p>
                            </div>
                            <a class="content-wrapper-link" href="<?= $arItem["PROPERTY_LINK"]; ?>"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                <?php endforeach; ?>
        </div>
        <!-- End Masonry Grid -->
    </div>
</div>
<!-- End Work -->