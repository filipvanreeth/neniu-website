<?php
use function Neniu\translate;

$navMain = [
    [
        'link_label' => translate('header-nav-main.help'),
        'link_url' => '#help-section'
    ],
    [
        'link_label' => translate('header-nav-main.concerns'),
        'link_url' => '#concerns-section'
    ],
    [
        'link_label' => translate('header-nav-main.prevention'),
        'link_url' => '#prevention-section'
    ],
    [
        'link_label' => translate('header-nav-main.contact'),
        'link_url' => '#contact-section'
    ],
];
?>
<header>
    <div class="header-nav-desktop">
        <div class="container container--constrained">
            <div class="header-nav-desktop__container">
                <div class="header-nav-desktop__logo-container">
                    <a href="" class="header-nav-desktop__logo-link">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo-neniu.svg' ?>"
                            alt="Logo Neniu" class="header-nav-desktop__logo">
                    </a>
                </div>
                <div class="header-nav-desktop__nav-container">
                    <ul class="header-nav-desktop__nav-main">
                        <?php
                        foreach ($navMain as $item) {
                            ?>
                            <li class="header-nav-desktop__nav-main-item">
                                <a href="<?= $item['link_url'] ?>"
                                    class="header-nav-desktop__nav-main-item-link"><?= $item['link_label'] ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>