<section class="product__modal-wrapper pt-5 pb-25">
    <div class="container">
        <div class="row p-3">
            <div class="d-none d-lg-block col-lg-3"></div>
            <div class="col-lg-6">
                <ul>
                    <?php foreach ($listAndImageList as $item): ?>
                        <li>
                            <strong><?= htmlspecialchars($item[0]) ?>:</strong>
                            <?= htmlspecialchars($item[1]) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="d-none d-lg-block col-lg-3"></div>
        </div>
        <div class="row p-3">
            <div class="col-12">
                <div class="product__modal-images mt-4 row">
                    <?php foreach ($listAndImageImages as $img): ?>
                        <div class="mb-3 col-12 col-lg-6" style="aspect-ratio: 16 / 9; overflow: hidden; border-radius: 12px;">
                            <img loading="lazy"
                                 src="../assets/img/<?= htmlspecialchars($img) ?>.webp"
                                 alt="Bild <?= htmlspecialchars($img) ?>"
                                 style="width: 100%; height: 100%; object-fit: cover; object-position: center center;">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>                
    </div>
</section>