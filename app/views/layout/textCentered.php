<section class="textCentered mt-4 mt-xl-5">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-1"></div>
            <div class="col-lg-8 col-10 py-3">
                <div class="" data-sal="slide-up" data-sal-delay="150" data-sal-duration="1000">
                    <div class="mb-4">
                        <?php if (!empty($textCenteredSubtitle)): ?>
                            <h6 class="w-100 text-center text-uppercase">
                                <b><?= htmlspecialchars($textCenteredSubtitle) ?></b>
                            </h6>
                        <?php endif; ?>
                        <?php if (!empty($textCenteredTitle)): ?>
                            <h1 class="w-100 text-center pb-20">
                                <?= htmlspecialchars($textCenteredTitle) ?>
                            </h1>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($textCenteredTextArray)): ?>
                        <?php foreach ($textCenteredTextArray as $textCenteredText): ?>
                        <p class="w-100 text-center">
                            <?= htmlspecialchars($textCenteredText) ?>
                        </p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-2 col-1"></div>
        </div>
    </div>
</section>
