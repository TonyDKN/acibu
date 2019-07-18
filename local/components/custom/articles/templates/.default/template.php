<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php $output = array_slice($arResult['ITEMS'], 0, 3)?>
<!-- Features -->
<div class="section-seperator" id="reviews">
    <div class="content-md container">
        <div class="row">
                <?php foreach ($output as $arItem):?>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay="<?=$arItem["PROPERTY_DELAY_VALUE"]?>">
                            <h3><?= $arItem["DETAIL_TEXT"]; ?></h3>
                            <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                            <a class="link" href="<?= $arItem["PROPERTY_LINK_VALUE"]; ?>"><?= $arItem["PROPERTY_DESCRIPTION_EN_VALUE"]; ?></a>
                        </div>
                    </div>
                <?php endforeach;?>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Features -->
