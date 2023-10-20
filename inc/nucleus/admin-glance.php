<?php
/**
 * At Glance Admin.
 *
 * @package petbook-wp
 */

function mv_add_at_glance_content() {
    $args = array(
        '_builtin' => false
    );
    $output = 'object';
    $operator = 'and';

    $post_types = get_post_types( $args, $output, $operator );

    foreach ( $post_types as $post_type ) {
        $num_posts = wp_count_posts( $post_type->name );
        $num       = number_format_i18n( $num_posts->publish );
        $text      = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );
        $exclude = array(
            'acf-field-group',
            'acf-field',
        );

        if ( current_user_can( 'edit_posts' ) ) {
            if ( ! in_array( $post_type->name, $exclude ) ) {
                $output = '<a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a>';
                echo '<li class="post-count ' . $post_type->name . '-count">' . $output . '</li>';
            }
        }
    }
}

add_action( 'dashboard_glance_items', 'add_at_glance_content' );
