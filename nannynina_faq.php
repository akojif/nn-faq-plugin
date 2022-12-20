<?php

/**
 * Plugin Name: Nanny Nina FAQ API
 * Plugin URI:  https://nannynina.com
 * Description: Nanny Nina faq api provider plugin.
 * Author:      Francis Akoji
 * Author URI:  https://francisakoji.com/
 * Version:     1.0
 * Text Domain: nanny-nina-faq-plugin
 */

//define plugin dir path, url path, plugin data
define( 'NANNYNINA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
/**
 *
 * @param $class
 * @return void
 */
function nannynina_autoload( $class ) {

    if ( class_exists( $class ) || stripos( $class, 'NANNYNINA_' ) === false ) {
        return;
    }

    $name = str_replace( array( 'nannynina_', '_' ), '-', strtolower( $class ) );
    $path = NANNYNINA_PLUGIN_DIR . "core/class{$name}.php";

    if ( file_exists( $path ) ) {
        include( $path );
    }
}

spl_autoload_register( 'nannynina_autoload' );

new Nannynina_Bootstrap();