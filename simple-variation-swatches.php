<?php
/**
 * Plugin Name:          Simple Variation Swatches for WooCommerce
 * Plugin URI:           https://webfixlab.com/plugins/role-based-pricing-woocommerce/
 * Description:          A truly lightweight EASY to use and super FAST WooCommerce variation swatches solution to replace default variation dropdown with button, color, image & radio button fields.
 * Author:               WebFix Lab
 * Author URI:           https://webfixlab.com/
 * Version:              2.0.0
 * Requires at least:    4.9
 * Tested up to:         6.6.1
 * Requires PHP:         7.0
 * WC requires at least: 3.6
 * WC tested up to:      9.1.4
 * License:              GPL2
 * License URI:          https://www.gnu.org/licenses/gpl-2.0.html
 * Requires Plugins:     woocommerce
 * Text Domain:          simple-variation-swatches
 *
 * @package              Simple variation swatches
 */

defined( 'ABSPATH' ) || exit;

// plugin path.
define( 'SVSW', __FILE__ );
define( 'SVSW_VER', '2.0.0' );
define( 'SVSW_PATH', plugin_dir_path( SVSW ) );

require SVSW_PATH . 'includes/class/admin/class-svswloader.php';
