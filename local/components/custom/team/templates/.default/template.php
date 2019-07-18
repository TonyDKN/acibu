<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!-- Team -->
<div class="bg-color-sky-light">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Meet the Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <?php foreach ($arResult['Workers'] as $arItem):?>
            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="<?= CFile::GetPath($arItem['DETAIL_PICTURE'])?>" alt="Team Image">
                    </div>
                </div>
                <h4><a href="#"><?= $arItem['PREVIEW_TEXT']; ?></a> <span class="text-uppercase margin-l-20"><?= $arItem['PROPERTY_POSITION_VALUE']; ?></span></h4>
                <p><?= $arItem['DETAIL_TEXT']; ?></p>
                <a class="link" href="<?= $arItem['PROPERTY_LINK_VALUE']; ?>"><?= $arItem['PROPERTY_READ_MORE_VALUE']; ?></a>
            </div>
            <!-- End Team -->
            <?php endforeach; ?>
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Team -->