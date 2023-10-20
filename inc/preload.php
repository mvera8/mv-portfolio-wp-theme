<?php
/**
 * Preload assets.
 *
 * @package petbook-wp
 */

function mv_preload_assets() {
    if ( is_404() ) {
        return;
    }

    $assets = array(
        array(
            'src'  => get_template_directory_uri() . '/source/css/styles.css',
            'as'   => 'style',
            'type' => 'text/css',
        ),
        array(
            'src'  => get_template_directory_uri() . '/source/fonts/OpenSans/OpenSans-Light.woff2',
            'as'   => 'font',
            'type' => 'font/woff2',
        ),
         array(
            'src'  => get_template_directory_uri() . '/source/fonts/OpenSans/OpenSans-Regular.woff2',
            'as'   => 'font',
            'type' => 'font/woff2',
        ),
         array(
            'src'  => get_template_directory_uri() . '/source/fonts/OpenSans/OpenSans-Bold.woff2',
            'as'   => 'font',
            'type' => 'font/woff2',
        ),
        array(
            'src'  => 'https://kit.fontawesome.com/2404ccbb0f.js',
            'as'   => 'script',
            'type' => 'text/javascript',
        ),
    );

    foreach( $assets as $asset ) {
        echo sprintf(
            "<link rel='preload' href='%s' as='%s' type='%s' crossorigin/>\n",
            $asset['src'],
            $asset['as'],
            $asset['type']
        );
    }
}

add_action( 'wp_head', 'mv_preload_assets', 0 );
