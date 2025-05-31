<section class="services__area p-relative z-index-1 pt-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-10"></div>
        </div>
        <div class="row">
            <?php foreach ($services as $service): ?>
                <a href="<?= htmlspecialchars($service['href']) ?>" class="col-xxl-4 col-xl-4 col-lg-4 col-md-6" data-bs-toggle="modal" data-bs-target="">
                    <div class="services__item-5 mb-30 bright-bg wow fadeInUp" data-sal="slide-up" data-sal-delay="130" data-sal-duration="1000">
                        <div class="services__item-5-inner text-center transition-3 bright-bg">
                            <div class="services__content-5">
                                <h3 class="services__title-5"><?= htmlspecialchars($service['title']) ?></h3>
                                <p><?= htmlspecialchars($service['desc']) ?></p>
                            </div>
                            <div class="services__thumb-5">
                                <img loading="lazy" src="<?= htmlspecialchars($service['img']) ?>" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="pb-50 d-none d-xl-block"></div>
</section>