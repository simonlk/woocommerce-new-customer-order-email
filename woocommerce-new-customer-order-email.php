<?php
/**
 * Plugin Name: WooCommerce New Customer Order Email
 * Plugin URI: 
 * Description: Plugin to send a single email to the customer when the order is placed, just like the "New Order" email that is sent to the store admin.
 * Author: 
 * Author URI: 
 * Version: 0.1
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *  Add a custom email to the list of WooCommerce emails
 *
 * @since 0.1
 * @param array $email_classes available email classes
 * @return array filtered available email classes
 */
function add_woocommerce_new_customer_order_email( $email_classes ) {

	// include our custom email class
	require_once( 'includes/class-woocommerce-new-customer-order-email.php' );

	// add the email class to the list of email classes that WooCommerce loads
	$email_classes['WC_New_Customer_Order_Email'] = new WC_New_Customer_Order_Email();

	return $email_classes;

}
add_filter( 'woocommerce_email_classes', 'add_woocommerce_new_customer_order_email' );
