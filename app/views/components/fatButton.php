<?php
    $href  = $href ?? '#';
    $label = $label ?? 'Button';
?>
<div class="cta__btn-5 text-center d-flex justify-content-center position-relative z-index-1">
    <a href="<?= htmlspecialchars($href) ?>" class="tp-btn-black rounded-2 to-contact-2 w-100">
        <?= htmlspecialchars($label) ?>
    </a>
</div>