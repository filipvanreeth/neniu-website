<?php
use function Neniu\renderBadge;
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
use function Neniu\renderCallout;
use function Neniu\translate;
?>

<section id="volunteers-section" class="service-section service-section--volunteers">
    <div class="container container--constrained">
        <div class="service-section__inner">
            <div class="service-section__content">
                <div class="service-section__badge">
                    <?php renderBadge(
                        service: 'volunteers',
                        text: translate('volunteers-section.badge-label')
                    ) ?>
                </div>
                <h2 class="service-section__title"><?= translate('volunteers-section.title') ?></h2>
                <p class="service-section__text-lead"><?= translate('volunteers-section.text-lead') ?></p>
                <?= translate('volunteers-section.text') ?>
                <?= renderCallout(
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="callout__icon">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>',
                    text: translate('volunteers-section.callout-contact'),
                    extraClass: 'callout--volunteers'
                ) ?>
            </div>
            <div class="service-section__media">
                <?php
                $imagePath = get_stylesheet_directory_uri() . '/assets/images/hero-volunteers.webp';
                renderHeroImage(
                    imagePath: $imagePath,
                    section: 'volunteers',
                    altText: null,
                    reverse: true
                );
                ?>
            </div>
        </div>
    </div>
</section>

<?= renderIconDivider('volunteers') ?>