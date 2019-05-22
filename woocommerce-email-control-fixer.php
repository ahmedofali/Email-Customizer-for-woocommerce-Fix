<?php
/**
 * Plugin Name: WooCommerce Email Customizer Fixer
 * Plugin URI: https://codecanyon.net/item/email-customizer-for-woocommerce-fixer
 * Description: WooCommerce Email Customizer plugin Fixes Problems on checkout email-customizer-for-woocommerce
 * Author: EgThemes
 * Author URI: https://codecanyon.net/user/egthemes
 * Version: 1.0
 *
 * WC requires at least: 2.5
 * WC tested up to: 3.3.3
 *
 * Text Domain: email-control
 * Domain Path: /languages/
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @author    EgThemes
 * @category  WooCommerce, WordPress
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// After Plugins loaded
add_action( 'plugins_loaded', function(){

    $emogrifier_class = 'Emogrifier';

    if ( ! class_exists( $emogrifier_class ) && defined('WC_EMAIL_CONTROL_DIR') && file_exists( WC_EMAIL_CONTROL_DIR . '/includes/emogrifier/Emogrifier.php' ) )
    {
        require_once( WC_EMAIL_CONTROL_DIR . '/includes/emogrifier/Emogrifier.php' );

        class_alias( 'EmogrifierCXEC', 'Emogrifier' );
    }


    if ( ! class_exists( $emogrifier_class ) && defined('WC_ABSPATH') && file_exists( WC_ABSPATH . '/includes/libraries/class-emogrifier.php' ) )
    {
        require_once( WC_ABSPATH . '/includes/libraries/class-emogrifier.php' );

        class_alias( '\\Pelago\\Emogrifier', 'Emogrifier' );
    }

} );
