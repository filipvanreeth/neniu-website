<?php

declare(strict_types=1);

namespace Neniu;

use function printf;

require_once __DIR__ . '/cleanup.php';

add_action('after_setup_theme', function (): void {
    add_theme_support('editor-styles');
    add_editor_style('assets/css/theme.css');
});

add_action('init', function (): void {
    $block_metadata_files = glob(
        get_theme_file_path('build/blocks/*/block.json')
    );

    if ($block_metadata_files === false) {
        return;
    }

    foreach ($block_metadata_files as $block_metadata_file) {
        register_block_type(dirname($block_metadata_file));
    }
});

add_action('wp_enqueue_scripts', function (): void {
    $stylesheet_file = get_theme_file_path('assets/css/theme.css');
    $stylesheet_uri = get_theme_file_uri('assets/css/theme.css');

    wp_enqueue_style(
        'neniu-theme',
        $stylesheet_uri,
        [],
        file_exists($stylesheet_file)
        ? (string) filemtime($stylesheet_file)
        : wp_get_theme()->get('Version')
    );
});

function translate(string $key): string
{
    $language = currentLanguage();
    $file = get_theme_file_path("languages/{$language}.php");

    if (!is_file($file)) {
        $file = get_theme_file_path('languages/nl.php');
    }

    $translations = require $file;
    $value = $translations;

    foreach (explode('.', $key) as $segment) {
        if (
            !is_array($value)
            || !array_key_exists($segment, $value)
        ) {
            return "[Ontbrekende tekst: {$key}]";
        }

        $value = $value[$segment];
    }

    if (!is_string($value)) {
        return "[Ongeldige vertaling: {$key}]";
    }

    return $value;
}

function currentLanguage(): string
{
    $queryString = (string) wp_parse_url(
        $_SERVER['REQUEST_URI'] ?? '/',
        PHP_URL_QUERY
    );

    parse_str($queryString, $queryParameters);

    return $queryParameters['language'] ?? 'nl';
}

function renderIconDivider(?string $service = null): void
{
    ?>
    <div class="icon-divider icon-divider--<?= $service ?>">
        <div class="icon-divider__line"></div>
        <svg class="icon-divider__icon" width="142" height="171" viewBox="0 0 142 171" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M82.416 47.5087L79.3292 41.1835L79.1638 40.8445L77.2643 36.9528L74.4648 31.215C73.7502 29.7531 72.3587 28.8806 70.7492 28.8806C70.7141 28.8806 70.6766 28.8811 70.6407 28.8818C68.9835 28.9223 67.5882 29.8669 66.9306 31.3953C66.6 32.1647 66.2676 32.9362 65.9363 33.7047L64.813 36.3152C62.7821 41.0347 60.7505 45.7545 58.7193 50.4724C58.1304 51.8424 56.9677 52.7345 55.4972 52.9456C48.6742 53.9234 41.8499 54.9023 35.0264 55.8808C34.6151 55.9392 34.2278 56.0525 33.8699 56.2147C32.7981 56.6997 31.9919 57.6195 31.6377 58.8155C31.5156 59.2268 31.4557 59.6402 31.4552 60.0459C31.454 61.2141 31.9465 62.32 32.8695 63.1369C38.0406 67.7178 43.2117 72.2965 48.3828 76.8776C48.7787 77.2284 49.095 77.6296 49.3269 78.0671C49.7198 78.8082 49.8704 79.6539 49.7556 80.5344C49.7474 80.5964 49.738 80.658 49.7273 80.7202L48.5189 87.6942C47.8416 91.6022 47.1646 95.5105 46.4877 99.4189L46.1794 101.198L46.1762 101.217C46.1342 101.467 46.1138 101.715 46.1141 101.959C46.1167 103.31 46.7597 104.546 47.9095 105.344C48.6325 105.845 49.4452 106.098 50.2616 106.098C50.9848 106.098 51.7111 105.9 52.3809 105.502C58.3145 101.974 64.2481 98.4461 70.1813 94.9184C70.2753 94.8625 70.3702 94.8107 70.466 94.7627C71.0514 94.4694 71.6699 94.3222 72.2884 94.3222C72.9467 94.3222 73.6073 94.4882 74.2328 94.8209C95.8538 106.314 99.3515 141.368 81.5606 161.894H81.5653C81.4906 161.983 81.4133 162.072 81.336 162.159C77.9411 165.042 74.3811 167.938 70.6508 170.854C11.692 124.763 -4.72182 83.7352 1.10195 15.8434C6.30279 16.0291 10.9498 16.1539 15.2108 16.1539C29.28 16.1539 39.1813 14.7948 51.2718 9.78541L51.6092 9.64509C57.228 7.29356 63.3291 4.15426 70.5442 0C79.3507 5.07481 86.4883 8.63719 93.1035 11.0994C93.2161 11.1413 93.3286 11.1829 93.4408 11.2241C103.86 15.0537 113.025 16.157 125.449 16.157C129.882 16.157 134.729 16.0167 140.197 15.8095C140.199 15.8462 140.204 15.8841 140.206 15.9209C140.206 15.9291 140.209 15.9373 140.209 15.9456L140.216 16.0339C140.218 16.0421 140.218 16.0532 140.218 16.0614C140.22 16.0932 140.225 16.1238 140.227 16.1558V16.1671C144.882 71.077 134.942 108.405 99.6022 145.107C112.883 124.907 110.538 101.596 93.9867 79.6619C93.6634 78.2053 94.0804 76.7974 95.1463 75.7572C97.8756 73.0987 100.603 70.4387 103.332 67.7793C104.641 66.5032 105.949 65.2274 107.258 63.9518C108.17 63.0635 109.081 62.1747 109.992 61.2857C111.017 60.2884 111.446 58.9304 111.194 57.5698C111.173 57.4568 111.148 57.3436 111.117 57.2308C111.089 57.1239 111.056 57.0173 111.018 56.9108C110.47 55.34 109.144 54.2985 107.495 54.1424C105.789 53.9802 104.086 53.8186 102.383 53.6574L93.4408 52.8096L93.1035 52.7775L88.4297 52.3347L86.9046 52.1904C85.4264 52.0505 84.2245 51.2147 83.5709 49.8749C83.1844 49.0862 82.8002 48.2974 82.416 47.5087Z"
                fill="currentColor" />
        </svg>
        <div class="icon-divider__line"></div>
    </div>
    <?php
}

function renderBadge(string $service, string $text): void
{
    ?>
    <div class="badge badge--<?= $service ?>"><?= $text ?></div>
    <?php
}

function renderHeroImage(string $imagePath, string $section, ?string $altText = null, bool $reverse = false): void
{
    $reverseClass = $reverse
        ? 'hero-image__image--reverse'
        : '';
    ?>
    <div class="hero-image">
        <img class="hero-image__image <?= $reverseClass ?>" src="<?= $imagePath ?>" <?= $altText ?: null ?>>
        <div class="hero-image__skew-border hero-image__skew-border--<?= $section ?>"></div>
    </div>
    <?php
}

function renderContactCard(
    string $style,
    string $svg,
    string $buttonLabel,
    ?string $buttonLink,
    string $description,
    array $buttonAttributes = [],
): void {
    $safeStyle = htmlspecialchars($style, ENT_QUOTES, 'UTF-8');
    $safeDescription = htmlspecialchars(
        $description,
        ENT_QUOTES,
        'UTF-8'
    );
    ?>
    <div class="contact-card contact-card--<?= $safeStyle ?>">
        <div class="contact-card__icon-container">
            <div class="contact-card__icon">
                <div class="contact-card__icon-block">
                    <?= $svg ?>
                </div>

                <div class="contact-card__icon-skew-border"></div>
            </div>
        </div>

        <div class="contact-card__action">
            <?php
            renderButton(
                label: $buttonLabel,
                href: $buttonLink,
                extraClass: 'contact-card__button',
                attributes: $buttonAttributes,
            );
            ?>
        </div>

        <div class="contact-card__description">
            <?= $safeDescription ?>
        </div>
    </div>
    <?php
}

function renderButton(
    string $label,
    ?string $href = null,
    string $extraClass = '',
    array $attributes = []
): void {
    $classes = trim('button ' . $extraClass);
    $label = htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
    $classes = htmlspecialchars($classes, ENT_QUOTES, 'UTF-8');

    $attributeHtml = '';

    foreach ($attributes as $name => $value) {
        if (!preg_match('/^(data|aria)-[a-z0-9_-]+$/', $name)) {
            continue;
        }

        $value = htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
        $attributeHtml .= sprintf(' %s="%s"', $name, $value);
    }

    if ($href !== null) {
        $href = htmlspecialchars($href, ENT_QUOTES, 'UTF-8');

        echo "<a href=\"{$href}\" class=\"{$classes}\"{$attributeHtml}>{$label}</a>";
        return;
    }

    echo "<button type=\"button\" class=\"{$classes}\"{$attributeHtml}>{$label}</button>";
}

function renderFooterNavMenu(string $title, array $menu): void
{
    ?>
    <div class="footer-nav-main__nav-menu">
        <div class="footer-nav-main__nav-menu-title"><?= $title ?></div>
        <ul class="footer-nav-main__nav-menu-list-items">
            <?php foreach ($menu as $menuItem) { ?>
                <li class="footer-nav-main__nav-menu-list-item">
                    <a href="<?= $menuItem['link'] ?>"><?= $menuItem['label'] ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php
}

function renderServiceCard(
    string $title,
    string $text,
    string $linkText,
    string $linkUrl,
    string $linkClasses,
    bool $reverse = false,
): void {
    $linkClasses = trim("service-card__link $linkClasses");
    $reverseClass = $reverse
        ? 'service-card--reverse'
        : '';
    ?>
    <div class="<?= trim('service-card ' . $reverseClass) ?>">
        <h2 class="service-card__title"><?= $title ?></h2>
        <p class="service-card__text"><?= $text ?></p>
        <a href="<?= $linkUrl ?>" class="<?= $linkClasses ?>"><?= $linkText ?></a>
    </div>
    <?php
}

function renderFavicon(): void
{
    $faviconUrl = get_theme_file_uri(
        'assets/images/favicon.png'
    );

    printf(
        '<link rel="icon" href="%s" type="image/png" sizes="512x512">' . PHP_EOL,
        esc_url($faviconUrl)
    );
}

add_action(
    'wp_head',
    __NAMESPACE__ . '\\renderFavicon',
    5
);

function renderCallout(string $icon, string $text, string $extraClass=''): void
{
    ?>
    <div class="callout <?= trim($extraClass) ?>">
        <div class="callout__media-container">
            <?= $icon ?>
        </div>
        <div class="callout__content-container">
            <?= $text ?>
        </div>
    </div>
    <?php
}
