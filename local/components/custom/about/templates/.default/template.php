<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php foreach ($arResult['About'] as $arItem)?>
<!-- About -->
<div class="content-md container">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2>About</h2>
        </div>
    </div>
    <!--// end row -->
    <div class="row">
        <div class="col-sm-7 sm-margin-b-50">
            <p><?=$arItem['DETAIL_TEXT']?></p>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
            <img  class="img-responsive" src="<?= CFile::GetPath($arItem['DETAIL_PICTURE'])?>" alt="Our Office">
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End About -->