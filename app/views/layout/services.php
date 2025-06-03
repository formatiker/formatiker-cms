<section class="services position-relative z-index-1 mt-4 mt-lg-5">
    <div class="container-xl">
        <div class="row justify-content-center">
            <?php foreach ($services as $service): ?>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                    <a href="<?= htmlspecialchars($service['href']) ?>" class="d-block mb-4 rounded-3 mb-md-5 position-relative z-1" data-sal="slide-up" data-sal-delay="130" data-sal-duration="1000">
                        <div class="w-100 px-4 px-xl-5 pt-5 pb-4 text-center rounded-3 bg-body text-body">
                            <h4 class="mb-3"><?= htmlspecialchars($service['title']) ?></h4>
                            <p><?= htmlspecialchars($service['desc']) ?></p>
                            <img class="px-4 py-3 px-xl-4 py-xl-4 w-100" loading="lazy" src="<?= htmlspecialchars($service['img']) ?>" alt="">
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="pb-50 d-none d-xl-block"></div>
</section>