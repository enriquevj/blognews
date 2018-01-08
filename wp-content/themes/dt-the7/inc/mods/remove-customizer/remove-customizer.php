<?php
/**
 * "Remove Customizer" Module
 * Inspired by https://wordpress.org/plugins/customizer-remove-all-parts
 *
 * @package The7
 */

// File Security Check.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Presscore_Modules_Remove_Customizer_Module', false ) ) :

	class Presscore_Modules_Remove_Customizer_Module {

		/**
		 * Execute module.
		 */
		public static function execute() {
			add_action( 'init', array( __CLASS__, 'init' ), 10 );
			add_action( 'admin_init', array( __CLASS__, 'admin_init' ), 10 );
		}

		/**
		 * Run all module stuff on init.
		 */
		public static function init() {
			// Remove customize capability
			add_filter( 'map_meta_cap', array( __CLASS__, 'filter_to_remove_customize_capability' ), 10, 4 );
		}

		/**
		 * Run all of our module stuff on admin init.
		 */
		public static function admin_init() {
			// Drop some customizer actions.
			remove_action( 'plugins_loaded', '_wp_customize_include', 10 );
			remove_action( 'admin_enqueue_scripts', '_wp_customize_loader_settings', 11 );

			// Manually override Customizer behaviors.
			add_action( 'load-customize.php', array( __CLASS__, 'override_load_customizer_action' ) );
		}

		/**
		 * Remove customize capability
		 * This needs to be in public so the admin bar link for 'customize' is hidden.
		 *
		 * @param array  $caps
		 * @param string $cap
		 * @param int    $user_id
		 * @param array  $args
		 *
		 * @return array
		 */
		public static function filter_to_remove_customize_capability( $caps = array(), $cap = '', $user_id = 0, $args = array() ) {
			if ( $cap == 'customize' ) {
				return array( 'nope' );
			}

			return $caps;
		}

		/**
		 * Manually overriding specific Customizer behaviors
		 */
		public static function override_load_customizer_action() {
			// If accessed directly
			wp_die( __( 'The Customizer is currently disabled.', 'the7mk2' ) );
		}
	}

	Presscore_Modules_Remove_Customizer_Module::execute();

endif;