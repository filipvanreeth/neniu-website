<?php
use function Neniu\translate;
use function Neniu\renderBadge;
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
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
            </div>
            <div class="service-section__media">
                <?php
                $imagePath = get_stylesheet_directory_uri() . '/assets/images/hero-need-help.png';
                renderHeroImage($imagePath, 'need-help', null, false);
                ?>
            </div>
        </div>
    </div>
</section>

<?php renderIconDivider('need-help'); ?>