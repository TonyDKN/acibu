<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
   <?php $APPLICATION->SetTitle("Acibus"); ?>

<!--========== PAGE LAYOUT ==========-->
<?php $APPLICATION->IncludeComponent(
    "custom:gallery_main",
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:articles",
    "",
    Array()
); ?>
<?php $APPLICATION->IncludeComponent(
    "custom:clients",
    "",
    Array()
); ?>

<!-- Work -->
<div class="bg-color-sky-light overflow-h">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div class="col-sm-6">
                <h2>Work</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->

        <!-- Masonry Grid -->
        <div class="masonry-grid">
            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="local/templates/main/assets/HTML/img/800x400/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Art Of Coding</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="local/templates/main/assets/HTML/img/397x400/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="local/templates/main/assets/HTML/img/397x300/01.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="local/templates/main/assets/HTML/img/397x300/02.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
                    </div>
                    <a class="content-wrapper-link" href="#"></a>
                </div>
                <!-- End Work -->
            </div>
            <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                <!-- Work -->
                <div class="work">
                    <div class="work-overlay">
                        <img class="full-width img-responsive" src="local/templates/main/assets/HTML/img/397x300/03.jpg" alt="Portfolio Image">
                    </div>
                    <div class="work-content">
                        <h3 class="color-white margin-b-5">Clean Design</h3>
                        <p class="color-white margin-b-0">Lorem ipsum dolor sit amet consectetur adipiscing</p>
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

<!-- Testimonials -->
<div class="content-md container">
    <div class="row">
        <div class="col-sm-9">
            <h2>Customer Reviews</h2>

            <!-- Swiper Testimonials -->
            <div class="swiper-slider swiper-testimonials">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                            </div>
                            <div class="margin-b-20">
                                Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.
                            </div>
                            <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                        </blockquote>
                    </div>
                    <div class="swiper-slide">
                        <blockquote class="blockquote">
                            <div class="margin-b-20">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="margin-b-20">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                            <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                        </blockquote>
                    </div>
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
            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="local/templates/main/assets/HTML/img/770x860/01.jpg" alt="Team Image">
                    </div>
                </div>
                <h4><a href="#">Alicia Keys</a> <span class="text-uppercase margin-l-20">Project Manager</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Read More</a>
            </div>
            <!-- End Team -->

            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="local/templates/main/assets/HTML/img/770x860/02.jpg" alt="Team Image">
                    </div>
                </div>
                <h4><a href="#">James Millner</a> <span class="text-uppercase margin-l-20">Lead Developer</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Read More</a>
            </div>
            <!-- End Team -->

            <!-- Team -->
            <div class="col-sm-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="local/templates/main/assets/HTML/img/770x860/03.jpg" alt="Team Image">
                    </div>
                </div>
                <h4><a href="#">Scarlet Johanson</a> <span class="text-uppercase margin-l-20">Designer</span></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                <a class="link" href="#">Read More</a>
            </div>
            <!-- End Team -->
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Team -->
<!--========== END PAGE LAYOUT ==========-->
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>