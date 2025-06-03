<div id="carouselExampleFade" class="slider carousel carousel-fade w-100 d-flex align-items-center justify-content-center position-relative" data-bs-ride="carousel">
  <div class="carousel-inner position-absolute top-0 start-0">
    <?php foreach ($sliderImages as $index => $image): ?>
        <div data-bs-interval="3000" class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <img src="../assets/img/<?= htmlspecialchars($image) ?>.webp" class="d-block w-100" alt="...">
        </div>
    <?php endforeach; ?>
  </div>
    <div class="carousel-outer w-100 position-relative d-flex align-items-end">
        <div class="container-xxl">
            <div class="carousel-outer__textbox w-100 rounded-4">
                <div class="p-4">
                    <h4 class="d-block mb-0 text-primary"><?=$sliderHeadline?></h4>
                    <?php foreach ($sliderTextPoints as $index => $sliderTextPoint): ?>
                        <h1 class="d-none d-lg-block text-light"><?=$sliderTextPoint?></h1>
                    <?php endforeach; ?>
                    <?php foreach ($sliderTextPoints as $index => $sliderTextPoint): ?>
                        <h3 class="d-block d-lg-none text-light"><?=$sliderTextPoint?></h3>
                    <?php endforeach; ?>
                    <a href="tel:<?=$sliderPhoneLink?>">
                        <h3 class="d-none d-lg-block text-primary"><?=$sliderPhoneDisplay?></h3>
                        <h4 class="d-block d-lg-none text-primary"><?=$sliderPhoneDisplay?></h4>
                    </a>
                    <a href="mailto:<?=$sliderEmailLink?>">
                        <h3 class="d-none d-lg-block text-primary"><?=$sliderEmailDisplay?></h3>
                        <h4 class="d-block d-lg-none text-primary"><?=$sliderEmailDisplay?></h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>