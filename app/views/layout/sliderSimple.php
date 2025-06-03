<div id="carouselExampleFade" class="sliderSimple carousel slide carousel-fade w-100 position-relative" data-bs-ride="carousel">
  <div class="carousel-inner h-100 position-absolute top-0 start-0">
    <?php foreach ($sliderSimpleImages as $index => $image): ?>
        <div data-bs-interval="3000" class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
            <img src="../assets/img/<?= htmlspecialchars($image) ?>.webp" class="d-block w-100" alt="...">
        </div>
    <?php endforeach; ?>
  </div>
</div>