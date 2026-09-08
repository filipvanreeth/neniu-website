<?php
use function Neniu\translate;
use function Neniu\renderBadge;
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
use function Neniu\renderCallout;
?>

<section id="help-section" class="service-section service-section--need-help">
    <div class="container container--constrained">
        <div class="service-section__inner">
            <div class="service-section__content">
                <div class="service-section__badge">
                    <?= renderBadge('need-help', translate('help-section.badge-label')) ?>
                </div>
                <h2 class="service-section__title"><?= translate('help-section.title') ?></h2>
                <p class="service-section__text-lead"><?= translate('help-section.text-lead') ?></p>
                <?= translate('help-section.text') ?>
                <?= renderCallout(
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="callout__icon"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M15 15l3.35 3.35" /><path d="M9 15l-3.35 3.35" /><path d="M5.65 5.65l3.35 3.35" /><path d="M18.35 5.65l-3.35 3.35" /></svg>',
                    text: translate('help-section.callout-contact'),
                    extraClass: 'callout--accent'
                ) ?>
            </div>
            <div class="service-section__media">
                <?php
                $imagePath = get_stylesheet_directory_uri() . '/assets/images/hero-need-help.webp';
                renderHeroImage($imagePath, 'need-help', null, false);
                ?>
            </div>
        </div>
    </div>
</section>

<?php renderIconDivider('need-help'); ?>