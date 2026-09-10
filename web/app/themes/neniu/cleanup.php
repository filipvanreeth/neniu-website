<?php

declare(strict_types=1);

namespace Neniu;

/**
 * Remove WordPress discovery metadata and legacy frontend assets that this
 * website does not use.
 */
function cleanupFrontend(): void
{
    // Public discovery metadata.
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    remove_action('template_redirect', 'wp_shortlink_header', 11);
    remove_action('wp_head', 'rest_output_link_wp_head', 10);
    remove_action('template_redirect', 'rest_output_link_header', 11);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 4);
    remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

    // Emoji fallback for legacy browsers.
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_enqueue_scripts', 'wp_enqueue_emoji_styles');
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Apply the same cleanup to WordPress embed documents.
    remove_action('embed_head', 'print_emoji_detection_script');
    remove_action('enqueue_embed_scripts', 'wp_enqueue_emoji_styles');
}

add_action('after_setup_theme', __NAMESPACE__ . '\\cleanupFrontend');
