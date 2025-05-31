<div class="swiper mySwiper w-100 slider__height-5 position-absolute">
    <div class="swiper-wrapper">
        <?php foreach ($sliderImages as $index => $imageClass): ?>
            <div class="swiper-slide w-100 h-100 d-flex justify-content-center slider__height-5">
                <div class="slider__shape <?= htmlspecialchars($imageClass) ?> w-100 h-100 position-absolute"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<section class="slider__area box-plr-5-245 slider__height-6 d-flex align-items-center p-relative z-index-1 fix flex-column justify-content-end">
    <div class="container-fluid position-relative z-index-1">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-sm-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text__container__right p-3 slider__content-5 rounded-4">
                            <h4 class="d-block mb-0"><?=$sliderHeadline?></h4>
                            <?php foreach ($sliderTextPoints as $index => $sliderTextPoint): ?>
                                <h1 class="d-none d-lg-block font__white mb-2"><?=$sliderTextPoint?></h1>
                            <?php endforeach; ?>
                            <?php foreach ($sliderTextPoints as $index => $sliderTextPoint): ?>
                                <h3 class="d-block d-lg-none font__white mb-0"><?=$sliderTextPoint?></h3>
                            <?php endforeach; ?>
                            <a href="tel:<?=$sliderPhoneLink?>">
                                <h3 class="d-none d-lg-block"><?=$sliderPhoneDisplay?></h3>
                                <h4 class="d-block d-lg-none"><?=$sliderPhoneDisplay?></h4>
                            </a>
                            <a href="email:<?=$sliderEmailLink?>">
                                <h3 class="d-none d-lg-block"><?=$sliderEmailDisplay?></h3>
                                <h4 class="d-block d-lg-none"><?=$sliderEmailDisplay?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
        </div>
    </div>
</section>