<?php
/**
 * Handles loading all the necessary files
 *
 * @package Tutorowl
 */

defined( 'ABSPATH' ) || exit;

/**
 * Require all constants variable
 *
 * @package Tutorowl
 */
require_once __DIR__ . '/constants.php';

/**
 * Tutorowl spl_autoloader
 *
 * @param String $class_name description.
 *
 * @return void
 */
function tutorowl_spl_autoloader( $class_name ) {
	if ( ! class_exists( $class_name ) ) {
		$class_name = preg_replace(
			array( '/([a-z])([A-Z])/', '/\\\/' ),
			array( '$1$2', DIRECTORY_SEPARATOR ),
			$class_name
		);
		$class_name = str_replace( 'Tutorowl' . DIRECTORY_SEPARATOR, '/inc' . DIRECTORY_SEPARATOR, $class_name );
		$file_name  = TUTOROWL_PATH . $class_name . '.php';

		if ( file_exists( $file_name ) ) {
			require_once $file_name;
		}
	}
}

spl_autoload_register( 'tutorowl_spl_autoloader' );

new Tutorowl\Init();
