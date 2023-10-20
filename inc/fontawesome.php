<?php
/**
 * Font Awesome.
 *
 * @package petbook-wp
 */

/**
 * Add the script to the footer.
 */
function add_fontawesome_script_to_footer() {
    ?>
    <script src="https://kit.fontawesome.com/2404ccbb0f.js" crossorigin="anonymous"></script>
    <?php
}
add_action('wp_footer', 'add_fontawesome_script_to_footer');