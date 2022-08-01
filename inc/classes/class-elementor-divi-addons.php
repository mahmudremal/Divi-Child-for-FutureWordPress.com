<?php
/**
 * Blocks
 *
 * @package Divi-child
 */

namespace DIVI_CHILD_THEME\Inc;

use DIVI_CHILD_THEME\Inc\Traits\Singleton;


use Elementor\Plugin;
use Elementor\Base\Module_Base;

class Elementor_Divi_Addons {
	use Singleton;

	private $modules = [];

	protected function __construct() {

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		$modules = [
			// Modules with Widgets.
			'Divi Service Tilt Box',
		];
		/**
		 * Actions.
		 */
		add_action( 'plugins_loaded', [ $this, 'widgets' ], 10, 0 );
		// add_action( 'elementor/init', [ $this, 'widgets' ], 10, 0 );
	}
	public function widgets() {
		foreach ( $this->modules as $module_name ) {
			$class_name = str_replace( '-', ' ', $module_name );
			$class_name = str_replace( 'Divi', 'widget', $module_name );
			$class_name = str_replace( ' ', '', ucwords( $class_name ) );
			$class_name = '\DIVI_CHILD_THEME\Inc\widgets\elementor\\' . $class_name;

			/** @var Module_Base $class_name */
			$experimental_data = $class_name::get_experimental_data();

			if ( $experimental_data ) {
				Plugin::elementor()->experiments->add_feature( $experimental_data );

				if ( ! Plugin::elementor()->experiments->is_feature_active( $experimental_data['name'] ) ) {
					continue;
				}
			}

			if ( $class_name::is_active() ) {
				$this->modules[ $module_name ] = $class_name::instance();
			}
		}
	}

}
