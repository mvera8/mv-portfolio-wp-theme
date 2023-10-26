<?php
/**
 * Get section to show child
 *
 * @package petbook
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function get_section($bg, $children) {
    $section_content = '';
    
    foreach ($children as $child) {
        $section_content .= $child;
    }

    $section = '<section class="py-5 my-5 bg-' . $bg . '"><div class="container">' . $section_content . '</div></section>';
    echo $section;
}

function the_section( $bg, $children ) {
	echo get_section( $bg, $children );
}
