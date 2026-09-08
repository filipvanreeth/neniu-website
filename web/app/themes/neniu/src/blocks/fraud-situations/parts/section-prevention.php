<?php
use function Neniu\renderBadge;
use function Neniu\renderCallout;
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
                <?= renderCallout(
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="callout__icon"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M9.5 5.5a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" /><path d="M12 21.368l5.095 -5.096a3.088 3.088 0 1 0 -4.367 -4.367l-.728 .727l-.728 -.727a3.088 3.088 0 1 0 -4.367 4.367l5.095 5.096" /></svg>',
                    text: translate('prevention-section.callout-contact'),
                    extraClass: 'callout--prevention'
                ) ?>
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