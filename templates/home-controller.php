<?php
/**
 * Controller for Home Page
 *
 * @package supercampeones
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$site_name = get_bloginfo( 'name' );
$servicios = array(
	array(
		'title' => 'Dynamic sites',
		'text'  => 'WordPress-based websites with versatile features and content management.',
		'icon'  => 'code',
	),
	array(
		'title' => 'Performance sites',
		'text'  => 'Speedy Next.js websites, less dynamic compared to WordPress.',
		'icon'  => 'gauge-simple-high',
	),
	array(
		'title' => 'Graphic Design',
		'text'  => 'Creating logos and branding to enhance your business identity.',
		'icon'  => 'paintbrush',
	),
	array(
		'title' => 'QA Automation',
		'text'  => 'Streamlining testing with Cypress, an end-to-end testing solution.',
		'icon'  => 'list-check',
	),
);

$preguntas = array(
	array(
		'title' => 'Qué hacemos?',
		'text'  => 'We provide digital experience services to startups and small businesses. We help our clients succeed by creating brand identities, digital experiences. Praesent vel nibh a tellus dictum gravida sed tempor nunc.',
	),
	array(
		'title' => '¿Como es el Proceso?',
		'text'  => 'Una vez entregado el proyecto se da por cerrado...',
	),
);