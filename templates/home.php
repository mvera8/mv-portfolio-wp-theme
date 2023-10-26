<?php
/**
 * Template Name: Home Page
 *
 * @package supercampeones
 */

// https://appline-tailwind.preview.uideck.com/#features

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$criticals = array(
	'navbar',
	'hero',
);
set_query_var( 'portfolio_critical', $criticals );

require 'home-controller.php';

get_header();
the_component( 'navbar', ['brand' => $site_name] );
the_component( 'hero', ['services' => $servicios] );

// Intro
the_section(
    'white',
		[
			get_component(
				'content-middle',
				[
					'title' => 'Dedicated space for conversations',
					'text'  => 'Decrease the burden of managing active work in issues and pull requests by providing a separate space to host ongoing discussions, questions, and ideas.',
				]
			)
		]
);

// Image Right
the_section(
    'white',
		[
			get_component(
				'content-right',
				[
					'image' => 'https://placehold.co/600x400',
					'title' => 'Track Your Audience Activities',
					'text'  => 'Schedule your posts for times when your audience is most active. Choose from our best-time predictions, or create your own publishing schedule.',
					'button' => 'Get Started',
					'link' => '#',
				]
			)
		]
);

// Image left
the_section(
    'white',
		[
			get_component(
				'content-left',
				[
					'image' => 'https://placehold.co/600x400',
					'title' => 'Track Your Audience Activities',
					'text'  => 'Schedule your posts for times when your audience is most active. Choose from our best-time predictions, or create your own publishing schedule.',
					'button' => 'Get Started',
					'link' => '#',
				]
			)
		]
);

// ???
the_section(
    'white',
		[
			get_component(
				'content-middle',
				[
					'title' => 'How it Works?',
					'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.',
				]
			),
			get_component(
				'card',
				[
					'title' => 'How it Works?',
					'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.',
				]
			)
		]
);

// Portfolio
the_section(
    'white',
		[
			get_component(
				'content-middle',
				[
					'title' => 'Recent Work',
					'text'  => 'Buying a home doesnt have to be a mystery',
				]
			)
		]
);

// FAQs
the_section(
    'gray-100',
		[
			get_component(
				'content-middle',
				[
						'title' => 'Frequently Asked Questions',
						'text'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.',
				]
			),
			get_component('accordion')
		]
);

// Blog
the_section(
    'white',
		[
			get_component(
				'content-middle',
				[
					'title' => 'My Blog',
					'text'  => 'Buying a home doesnt have to be a mystery.',
				]
			),
			get_component(
				'blog',
				[
					'post_type'      => 'post',
					'posts_per_page' => '3',
				]
			)
		]
);

get_footer();
