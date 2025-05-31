<?php if (!empty($demoList)): ?>
    <section class="demo-section pt-25 pb-25 pt-xl-120 pb-xl-95 p-relative">
        <div class="container">
            <div class="demo-section__grid">
                <div class="row">
                    <?php foreach ($demoList as $demo): ?>
                        <div class="col-lg-6">
                            <a href="<?= htmlspecialchars($demo['href']) ?>" target="_blank"
                            class="w-100 d-flex justify-content-center demo-card position-relative rounded-5">
                                <img class="w-100 position-absolute"
                                    src="../assets/img/<?= htmlspecialchars($demo['image']) ?>"
                                    alt="<?= htmlspecialchars($demo['alt']) ?>">
                            </a>
                            <p class="pb-3 pb-sm-4 px-3"><?= htmlspecialchars($demo['title']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
