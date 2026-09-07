<?php
use function Neniu\renderBadge;
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
use function Neniu\translate;
?>

<section id="concerns-section" class="service-section service-section--concerned">
    <div class="container container--constrained">
        <div class="service-section__inner">
            <div class="service-section__content">
                <div class="service-section__badge">
                    <?php renderBadge(
                        service: 'concerned',
                        text: translate('concerns-section.badge-label')
                    ) ?>
                </div>
                <h2 class="service-section__title"><?= translate('concerns-section.title') ?></h2>
                <p class="service-section__text-lead"><?= translate('concerns-section.text-lead') ?></p>
                <?= translate('concerns-section.text') ?>
            </div>
            <div class="service-section__media">
                <?php
                $imagePath = get_stylesheet_directory_uri() . '/assets/images/hero-concerned.webp';
                renderHeroImage(
                    imagePath: $imagePath,
                    section: 'concerned',
                    altText: null,
                    reverse: true
                );
                ?>
            </div>
        </div>
    </div>
</section>

<?= renderIconDivider('concerned') ?>