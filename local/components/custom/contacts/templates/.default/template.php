<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!-- Contact List -->
<div class="section-seperator">
    <div class="content-md container">
        <div class="row">
            <!-- Contact List -->
            <?php foreach ($arResult['Contacts'] as $arItem):?>
                <div class="col-sm-4 sm-margin-b-50">
                    <h4><a href="#"><?=$arItem['PREVIEW_TEXT']?></a> <span class="text-uppercase margin-l-20"><?=$arItem['PROPERTY_FUNCTION_VALUE']?></span></h4>
                    <p><?=$arItem['DETAIL_TEXT']?></p>
                    <ul class="list-unstyled contact-list">
                        <li><i class="margin-r-10 color-base icon-call-out"></i><?=$arItem['PROPERTY_NUMBER_VALUE']?></li>
                        <li><i class="margin-r-10 color-base icon-envelope"></i><?=$arItem['PROPERTY_EMAIL_VALUE']?></li>
                    </ul>
                </div>
            <?php endforeach;?>
            <!-- End Contact List -->
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Contact List -->