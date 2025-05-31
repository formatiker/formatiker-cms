<section class="about__area pt-25 pb-25 p-relative z-index-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-3 col-lg-2 col-1"></div>
            <div class="col-xxl-6 col-lg-8 col-10">
                <div class="about__wrapper-5" data-sal="slide-up" data-sal-delay="150" data-sal-duration="1000">
                    <div class="mb-15">
                        <?php if (!empty($aboutSubtitle)): ?>
                            <span class="section__title-pre-5 w-100 text-center">
                                <?= htmlspecialchars($aboutSubtitle) ?>
                            </span>
                        <?php endif; ?>
                        <?php if (!empty($aboutTitle)): ?>
                            <h3 class="section__title-5 w-100 text-center pb-20">
                                <?= htmlspecialchars($aboutTitle) ?>
                            </h3>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($aboutTextArray)): ?>
                        <?php foreach ($aboutTextArray as $aboutText): ?>
                        <p class="w-100 text-center">
                            <?= htmlspecialchars($aboutText) ?>
                        </p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-2 col-1"></div>
        </div>
    </div>
</section>
