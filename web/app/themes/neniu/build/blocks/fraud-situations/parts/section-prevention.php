<?php
use function Neniu\renderBadge;
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
use function Neniu\translate;
?>

<section id="prevention-section" class="service-section service-section--prevention">
    <div class="container container--constrained">
        <div class="service-section__inner">
            <div class="service-section__content">
                <div class="service-section__badge">
                    <?= renderBadge('prevention', translate('prevention-section.badge-label')) ?>
                </div>
                <h2 class="service-section__title"><?= translate('prevention-section.title') ?></h2>
                <p class="service-section__text-lead"><?= translate('prevention-section.text-lead') ?></p>
                <?= translate('prevention-section.text') ?>
            </div>
            <div class="service-section__media">
                <?php
                $imagePath = get_stylesheet_directory_uri() . '/assets/images/hero-prevention.webp';
                renderHeroImage($imagePath, 'prevention', null, false);
                ?>
            </div>
        </div>
    </div>
</section>

<?= renderIconDivider('prevention') ?>