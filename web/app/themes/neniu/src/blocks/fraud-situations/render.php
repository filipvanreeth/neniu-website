<?php
/**
 * Render the CTA Actions block.
 *
 * @var array    $attributes Block attributes.
 * @var string   $content    Saved block content.
 * @var WP_Block $block      Block instance.
 */

$actions = [
    [
        'modifier' => 'primary',
        'title'    => __( 'Ik ben slachtoffer', 'neniu' ),
        'text'     => __( 'Je verloor geld of gegevens door oplichting. We helpen je rustig de juiste stappen te zetten: melden, je bank contacteren en verwerken wat er gebeurde.', 'neniu' ),
        'label'    => __( 'Krijg hulp', 'neniu' ),
        'url'      => home_url( '/hulp/' ),
    ],
    [
        'modifier' => 'secondary',
        'title'    => __( 'Ik wil fraude melden', 'neniu' ),
        'text'     => __( 'Bezorg ons de informatie over je situatie.', 'neniu' ),
        'label'    => __( 'Meld fraude', 'neniu' ),
        'url'      => home_url( '/melden/' ),
    ],
    [
        'modifier' => 'tertiary',
        'title'    => __( 'Ik wil meer weten', 'neniu' ),
        'text'     => __( 'Leer hoe je online fraude kunt herkennen.', 'neniu' ),
        'label'    => __( 'Bekijk het advies', 'neniu' ),
        'url'      => home_url( '/advies/' ),
    ],
];

include 'parts/header.php';
include 'parts/hero.php';
include 'parts/section-need-help.php';
include 'parts/section-concerned.php';
include 'parts/section-prevention.php';
include 'parts/section-contact.php';
include 'parts/footer.php';