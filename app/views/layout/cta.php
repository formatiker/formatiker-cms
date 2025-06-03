<section class="cta mt-4 mt-xl-5">
    <div class="container-xl">
        <div class="cta__fancy rounded-5">
            <div class="d-flex justify-content-center w-100 h-100 position-relative align-items-center">
                <div class="position-absolute" id="cta_shape_1"></div>
                <div class="position-absolute" id="cta_shape_2"></div>
                <div class="position-absolute" id="cta_shape_3"></div>
                <div class="position-absolute" id="cta_shape_4"></div>
                <div class="position-absolute" id="cta_shape_5"></div>
                <div class="position-absolute" id="cta_shape_6"></div>
            </div>
            <div class="row position-relative z-1">
                <div class="col-lg-10 d-flex flex-column justify-content-center mb-4 mb-lg-0">
                    <h5><?= htmlspecialchars($ctaSubtitle) ?></h5>
                    <h3><?= htmlspecialchars($ctaTitle) ?> </h3>
                </div>
                <div class="col-lg-2 d-flex align-items-center">
                    <a href="<?= htmlspecialchars($ctaLink) ?>" class="btn btn-secondary py-2 px-5"><?= htmlspecialchars($ctaLinkText) ?></a>
                </div>
            </div>
        </div>
    </div>
</section>