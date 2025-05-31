<section class="cta__area p-relative z-index-1 pt-25">
    <div class="cta__overlay-5 bright-bg"></div>
    <div class="container">
        <div class="cta__inner-5">
            <div class="d-flex justify-content-center w-100 h-100 position-relative align-items-center rounded-5">
                <div class="position-absolute" id="cta_shape_1"></div>
                <div class="position-absolute" id="cta_shape_2"></div>
                <div class="position-absolute" id="cta_shape_3"></div>
                <div class="position-absolute" id="cta_shape_4"></div>
                <div class="position-absolute" id="cta_shape_5"></div>
                <div class="position-absolute" id="cta_shape_6"></div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10">
                    <div class="cta__content-5 position-relative z-index-1">
                        <span><?= htmlspecialchars($ctaSubtitle) ?></span>
                        <h3 class="cta__title-5"><?= htmlspecialchars($ctaTitle) ?> </h3>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-8">
                    <?php component('fatButton', [
                        'href' => $ctaLink,
                        'label' => $ctaLinkText,
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-3 pb-lg-5"></div>
</section>