<?php
use function Neniu\translate;
use function Neniu\renderFooterNavMenu;
?>

<footer class="footer">
    <nav class="footer-nav-main">
        <div class="container container--constrained">
            <div class="footer-nav-main__inner">
                <div class="footer-nav-main__content-container">
                    <h4>Neniu vzw</h4>
                    <p>Haverenblok 123 • B-1980 Eppegem<br />
                        <a href="mailto:info@neniu.help">info@neniu.help</a>
                    </p>
                    <p class="copyrights">©2014 - <?= date('Y') ?></p>
                </div>
                <div class="footer-nav-main__menu-container">
                    <?= renderFooterNavMenu(
                        title: translate('footer-nav-help.title'),
                        menu: [
                            [
                                'label' => translate('footer-nav-help.help'),
                                'link' => '#help-section'
                            ],
                            [
                                'label' => translate('footer-nav-help.concerns'),
                                'link' => '#concerns-section'
                            ],
                            [
                                'label' => translate('footer-nav-help.prevention'),
                                'link' => '#prevention-section'
                            ]
                        ]
                    ) ?>
                    <?= renderFooterNavMenu(
                        title: translate('footer-nav-about.title'),
                        menu: [
                            [
                                'label' => translate('footer-nav-about.who'),
                                'link' => '#'
                            ],
                            [
                                'label' => translate('footer-nav-about.contact'),
                                'link' => '#contact'
                            ],
                        ]
                    ) ?>
                </div>
            </div>
        </div>
    </nav>
</footer>