<?php
/**
 * Plugin Name: Plugin for SamTheme
 * Description: Custom Elementor Widgets for the Sampath theme.
 * Plugin URI:  https://bootstraptowordpress.com
 * Version:     1.0.0
 * Author:      sampath shetty
 * Author URI:  https://www.bradhussey.ca
 * Text Domain: sampath-plugin
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$plugin_images = plugin_dir_url( __FILE__ ). 'assets/images';

 /**
  * Main Sampath Plugin Elementor Extension Class
  *
  * The main class that initiates and runs the plugin.
  *
  * @since 1.0.0
  */

final class B2W_Elementor_Extension {

/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */

  const VERSION = '1.0.0';

/**
 * Minimum Elementor Version
 *
 * @since 1.0.0
 *
 * @var string Minimum Elementor version required to run the plugin.
 */

  const MINIMUM_ELEMENTOR_VERSION = '3.2.4';

/**
 * Minimum PHP Version
 *
 * @since 1.0.0
 *
 * @var string Minimum PHP version required to run the plugin.
 */

  const MINIMUM_PHP_VERSION = '7.0';

/**
 * Instance
 *
 * @since 1.0.0
 *
 * @access private
 * @static
 *
 * @var B2W_Elementor_Extension The single instance of the class.
 *
 * When this fires up, initially set the instance as null.
 *
 */

  private static $_instance = null;

/**
 * Instance
 *
 * Ensures only one instance of the class is loaded or can be loaded.
 *
 * @since 1.0.0
 *
 * @access public
 * @static
 *
 * @return B2W_Elementor_Extension An instance of the class.
 */

  public static function instance() {

    if ( is_null( self::$_instance ) ) {
      self::$_instance = new self();
    }
    return self::$_instance;

  }

/**
 * Constructor
 *
 * @since 1.0.0
 *
 * @access public
 */

	public function __construct() {

    add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );

  }

/**
 * Load Textdomain
 *
 * Load plugin localization files.
 *
 * Fired by `init` action hook.
 *
 * @since 1.0.0
 *
 * @access public
 */

 public function i18n() {

   load_plugin_textdomain( 'sampath-plugin' );

 }

/**
  * On Plugins Loaded
  *
  * Checks if Elementor has loaded, and performs some compatibility checks.
  * If All checks pass, inits the plugin.
  *
  * Fired by `plugins_loaded` action hook.
  *
  * @since 1.0.0
  *
  * @access public
  */

	public function on_plugins_loaded() {

    if ( $this->is_compatible() ) {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}

  }

/**
 * Compatibility Checks
 *
 * Checks if the installed version of Elementor meets the plugin's minimum requirement.
 * Checks if the installed PHP version meets the plugin's minimum requirement.
 *
 * @since 1.0.0
 *
 * @access public
 */

	public function is_compatible() {

    // Check if Elementor is installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return false;
		}

    // Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return false;
		}

    // Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return false;
		}

    return true;

  }

/**
 * Initialize the plugin
 *
 * Load the plugin only after Elementor (and other plugins) are loaded.
 * Load the files required to run the plugin.
 *
 * Fired by `plugins_loaded` action hook.
 *
 * @since 1.0.0
 *
 * @access public
 */

	public function init() {

    $this->i18n();

    // Add Plugin actions
    add_action( 'elementor/elements/categories_registered', array( $this, 'add_elementor_widget_categories' ) );
    add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );

  }


/**
 * Adding a custom category
 */

 public function add_elementor_widget_categories($elements_manager) {

   $elements_manager->add_category (
     'b2w_category',
     [
       'title' => __('sampath plugin','sampath-plugin'),
       'icon' => 'eicon-nerd',
     ]
   );
 }


/**
 * Admin notice
 *
 * Warning when the site doesn't have Elementor installed or activated.
 *
 * @since 1.0.0
 *
 * @access public
 */

	public function admin_notice_missing_main_plugin() {

    if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

    $message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'b2w-elementor-extension' ),
			'<strong>' . esc_html__( 'B2W Elementor Extension', 'b2w-elementor-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'b2w-elementor-extension' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

  }

/**
 * Admin notice
 *
 * Warning when the site doesn't have a minimum required Elementor version.
 *
 * @since 1.0.0
 *
 * @access public
 */

 public function admin_notice_minimum_elementor_version() {

   if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

  $message = sprintf(
     /* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
     esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'b2w-elementor-extension' ),
     '<strong>' . esc_html__( 'B2W Elementor Extension', 'b2w-elementor-extension' ) . '</strong>',
     '<strong>' . esc_html__( 'Elementor', 'b2w-elementor-extension' ) . '</strong>',
      self::MINIMUM_ELEMENTOR_VERSION
   );

   printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

 }

/**
  * Admin notice
  *
  * Warning when the site doesn't have a minimum required PHP version.
  *
  * @since 1.0.0
  *
  * @access public
  */

	public function admin_notice_minimum_php_version() {

    if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

    $message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'b2w-elementor-extension' ),
			'<strong>' . esc_html__( 'B2W Elementor Extension', 'b2w-elementor-extension' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'b2w-elementor-extension' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

  }

/**
 * Init Widgets
 *
 * Include widgets files and register them
 *
 * @since 1.0.0
 *
 * @access public
 */

  public function init_widgets() {

    // Include Widget Files;

    require_once( __DIR__ . '/widgets/about-section.php' );
    require_once( __DIR__ . '/widgets/banner-section.php' );
		require_once( __DIR__ . '/widgets/services-section.php' );
    require_once( __DIR__ . '/widgets/Cta-section.php' );
		require_once( __DIR__ . '/widgets/bannerTwo-section.php' );
		require_once( __DIR__ . '/widgets/aboutTwo-section.php' );
    require_once( __DIR__ . '/widgets/how-section.php' );    
    require_once( __DIR__ . '/widgets/discover-section.php' );
    require_once( __DIR__ . '/widgets/three-card-section.php');

  }



}

B2W_Elementor_Extension::instance();