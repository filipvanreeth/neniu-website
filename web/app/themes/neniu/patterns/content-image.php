<?php
/**
 * Title: Content With Image
 * Slug: neniu/content-image
 * Categories: featured
 * Description: Content With Image.
 */

$block_class_name = 'wp-block-content-image';
$inner_class_name = "{$block_class_name}__inner";
$text_group_class_name = "{$block_class_name}__text-group";
$image_group_class_name = "{$block_class_name}__image-group";
?>

<!-- wp:group <?php echo wp_json_encode( [ 'className' => $block_class_name, 'layout' => [ 'type' => 'default' ] ] ); ?> -->
<div class="wp-block-group <?php echo esc_attr( $block_class_name ); ?>">
    <!-- wp:group <?php echo wp_json_encode( [ 'className' => $inner_class_name, 'layout' => [ 'type' => 'default' ] ] ); ?> -->
    <div class="wp-block-group <?php echo esc_attr( $inner_class_name ); ?>">
        <!-- wp:group <?php echo wp_json_encode( [ 'className' => $text_group_class_name, 'layout' => [ 'type' => 'default' ] ] ); ?> -->
        <div class="wp-block-group <?php echo esc_attr( $text_group_class_name ); ?>"><!-- wp:heading {"level":1} -->
            <h1 class="wp-block-heading">Slachtoffer van online oplichting?</h1>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"fontSize":"medium","textColor":"secondary"} -->
            <p class="has-secondary-color has-text-color has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu urna quis quam mollis faucibus. Sed id diam neque. In quis lectus ligula. Vivamus tortor massa, ultrices sed tincidunt et, tristique a magna. Nunc aliquam elementum feugiat. Praesent at gravida purus.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Duis finibus porttitor nibh, non lacinia elit tincidunt in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus ac urna scelerisque, condimentum purus ac, suscipit nunc. Vestibulum vel lectus ut nisi cursus mollis. Etiam vehicula tellus tortor, ac tincidunt turpis consectetur vitae.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
            <p>Second paragraph - Duis finibus porttitor nibh, non lacinia elit tincidunt in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus ac urna scelerisque, condimentum purus ac, suscipit nunc. Vestibulum vel lectus ut nisi cursus mollis. Etiam vehicula tellus tortor, ac tincidunt turpis consectetur vitae.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"textColor":"tertiary"} -->
            <p>Third paragraph - Duis finibus porttitor nibh, non lacinia elit tincidunt in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus ac urna scelerisque, condimentum purus ac, suscipit nunc. Vestibulum vel lectus ut nisi cursus mollis. Etiam vehicula tellus tortor, ac tincidunt turpis consectetur vitae.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group <?php echo wp_json_encode( [ 'className' => $image_group_class_name, 'layout' => [ 'type' => 'default' ] ] ); ?> -->
        <div class="wp-block-group <?php echo esc_attr( $image_group_class_name ); ?>">
            <!-- wp:paragraph -->
            <p>Lorem ipsum 2</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
