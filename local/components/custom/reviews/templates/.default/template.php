<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!-- Testimonials -->
<div class="content-md container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Customer Reviews</h2>

            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <!-- Swiper Wrapper -->

                <div class="swiper-wrapper">
                    <?php foreach ($arResult['Reviews'] as $arItem):?>
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                <?= $arItem["DETAIL_TEXT"];?>
                            </div>
                            <p><span class="fweight-700 color-link"><?= $arItem["PROPERTY_REVIEWER_VALUE"];?></span>,<?= $arItem["PROPERTY_POSITION_VALUE"];?></p>
                        </blockquote>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- End Swiper Wrapper -->

                <!-- Pagination -->
                <div class="swiper-testimonials-pagination"></div>
            </div>
            <!-- End Swiper Testimonials -->
        </div>
    </div>
    <!--// end row -->
</div>
<!-- End Testimonials -->