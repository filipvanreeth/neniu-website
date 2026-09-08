<?php
use function Neniu\renderHeroImage;
use function Neniu\renderIconDivider;
use function Neniu\renderServiceCard;
use function Neniu\renderCallout;
use function Neniu\translate;
?>

<section class="hero">
    <div class="container container--constrained">
        <div class="hero__inner">
            <div class="hero__content">
                <h1 class="hero__title"><?= translate('hero-section.title') ?></h1>
                <p class="hero__text-lead"><?= translate('hero-section.text-lead') ?></p>
                <p><?= translate('hero-section.text') ?></p>
            </div>
            <div class="hero__media">
                <?= renderHeroImage(
                    imagePath: get_stylesheet_directory_uri() . '/assets/images/hero-home.webp',
                    section: 'need-help',
                    altText: '',
                ) ?>
            </div>
            <div class="hero__service-cards">
                <?php
                renderServiceCard(
                    title: translate('service-card-help.title'),
                    text: translate('service-card-help.text'),
                    linkText: translate('service-card-help.linkText'),
                    linkUrl: '#help-section',
                    linkClasses: 'service-card__link--help',
                );
                renderServiceCard(
                    title: translate('service-card-concerns.title'),
                    text: translate('service-card-concerns.text'),
                    linkText: translate('service-card-concerns.linkText'),
                    linkUrl: '#concerns-section',
                    linkClasses: 'service-card__link--concerns',
                    reverse: true,
                );
                renderServiceCard(
                    title: translate('service-card-prevention.title'),
                    text: translate('service-card-prevention.text'),
                    linkText: translate('service-card-prevention.linkText'),
                    linkUrl: '#prevention-section',
                    linkClasses: 'service-card__link--prevention',
                );
                ?>
            </div>
        </div>
    </div>
</section>

<?= renderIconDivider() ?>