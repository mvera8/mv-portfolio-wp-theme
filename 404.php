<?php
/**
 * 404 Page
 *
 * @package infinity
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
get_template_part( 'components/navbar' );
get_emoji( 'anxious', 30 );
echo 'chau';
get_footer();