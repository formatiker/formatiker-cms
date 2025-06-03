<?php if (!empty($demoElementList)): ?>
    <section class="demoElement mt-4 mt-xl-5 position-relative">
        <div class="container-xl">
            <div class="demoElement__grid">
                <div class="row">
                    <?php foreach ($demoElementList as $demo): ?>
                        <div class="col-lg-6">
                            <a href="<?= htmlspecialchars($demo['href']) ?>" target="_blank" class="w-100 d-flex justify-content-center demoElement__card position-relative rounded-5">
                                <img class="w-100 position-absolute"
                                    src="../assets/img/<?= htmlspecialchars($demo['image']) ?>"
                                    alt="<?= htmlspecialchars($demo['alt']) ?>">
                            </a>
                            <p class="text-body mb-4 mt-2 mb-sm-4 px-3"><?= htmlspecialchars($demo['title']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
