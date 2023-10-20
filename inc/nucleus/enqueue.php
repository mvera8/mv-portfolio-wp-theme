<?php
/**
 * Enqueue files.
 *
 * @param int $max maximun number of test.
 *
 * @package infinity
 */

/**
 * Enqueue global files.
 */
function mv_enqueue_global_files() {
	$js_path       = '/source/js/script.js';
	$css_path      = '/source/css/styles.css';
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );
	$css_version   = $theme_version . '.' . filemtime( get_template_directory() . $css_path );
	$js_version    = $theme_version . '.' . filemtime( get_template_directory() . $js_path );

	// CSS
	wp_enqueue_style( 'Portfolio-style', get_template_directory_uri() . $css_path, array(), $css_version );

	$criticals = get_query_var( 'portfolio_critical' );
	if ( $criticals ) {
		foreach ( $criticals as $critical ) {

			$path_css     = '/source/css/components/';
			if ( false !== strpos( $critical, '--' ) ) {
				$critical_variant = explode( '--', $critical );
			}

			$critical_css = file_get_contents( get_template_directory() . $path_css . '/' . $critical . '--critical.css' );
			wp_add_inline_style( 'Portfolio-style', $critical_css );
		}
	}

	// JS
	// wp_register_script( 'Portfolio-script', get_template_directory_uri() . $js_path, array(), $js_version, true);
	// wp_enqueue_script( 'Portfolio-script' );
}

add_filter( 'wp_enqueue_scripts', 'mv_enqueue_global_files' );

/**
 * Module.
 */
function add_module_to_my_script($tag, $handle, $src)
{
    if ("Portfolio-script" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}

add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
