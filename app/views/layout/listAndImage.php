<section class="listAndImage mt-4 mt-xl-5">
    <div class="container-xl">
        <div class="w-100 d-flex justify-content-center">
            <ul>
                <?php foreach ($listAndImageList as $item): ?>
                    <li class="p-1">
                        <p class="mb-0"><strong><?= htmlspecialchars($item[0]) ?>:</strong>
                        <?= htmlspecialchars($item[1]) ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="mt-md-2 mt-lg-4 row d-flex justify-content-center">
            <?php foreach ($listAndImageImages as $img): ?>
                <div class="mb-3 col-12 col-lg-6" style="aspect-ratio: 16 / 9; overflow: hidden; border-radius: 12px;">
                    <img loading="lazy"
                            src="../assets/img/<?= htmlspecialchars($img) ?>.webp"
                            alt="Bild <?= htmlspecialchars($img) ?>"
                            class="w-100 h-100 rounded-4">
                </div>
            <?php endforeach; ?>
        </div>              
    </div>
</section>