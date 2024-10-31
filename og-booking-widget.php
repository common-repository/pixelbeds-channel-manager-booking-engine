<?php

/**
 * Plugin Name: PixelBeds Channel Manager and Hotel Booking Engine
 * Plugin URI: https://www.oganro.com/
 * Description: PixelBeds Channel manager is a user-friendly Booking Engine and a hotel PMS developed dedicatedly for Sri Lankan Hotel Industry
 * Version: 1.0
 * Author: Oganro (Pvt) Ltd
 * Author URI: https://www.oganro.com
 * Text Domain: pixelbeds-channel-manager-booking-engine
 * Domain Path: /i18n/languages/
 * Requires at least: 4.0
 * Tested up to: 4.8
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('OgBookingWidget')):

    define('OGB_PATH', dirname(__FILE__) . '/');
    define('OGB_FILEPATH', __FILE__);

    final class OgBookingWidget
    {

        /**
         * OgBookingWidget constructor.
         */
        public function __construct()
        {
            $this->includer();

            $this->load_plugin_textdomain();

            // Initialize Search Box Widget (short_code, method)
            add_shortcode('og_booking_widget', array($this, 'get_og_booking_widget'));
        }

        public function load_plugin_textdomain() {
            $locale = is_admin() && function_exists( 'get_user_locale' ) ? get_user_locale() : get_locale();
            $locale = apply_filters( 'plugin_locale', $locale, 'oganro-booking-online-booking-system' );

            unload_textdomain( 'oganro-booking-online-booking-system' );
            load_textdomain( 'oganro-booking-online-booking-system', WP_LANG_DIR . '/oganro-booking-online-booking-system/oganro-booking-online-booking-system-' . $locale . '.mo' );
            load_plugin_textdomain( 'oganro-booking-online-booking-system', false, plugin_basename( dirname( __FILE__ ) ) . '/i18n/languages' );
        }


        /**
         * Include classes
         */
        public function includer()
        {
            /**
             * Core classes.
             */
            include_once(OGB_PATH . '/classes/admin/og-booking-admin-menus.php');
            include_once(OGB_PATH . '/classes/admin/og-booking-admin-page.php');
        }

        /*----------------------------------------------
         Initiating Methods to generate Search box
         ------------------------------------------------*/
         public function get_og_booking_widget()
         {
             /* STYLE SHEETS */
             wp_enqueue_style('og-booking-bootstrap', plugins_url('/css/bootstrap.css', __FILE__));
             wp_enqueue_style('og-booking', plugins_url('/css/og-booking-widget.min.css', __FILE__));
             wp_enqueue_style('og-booking-bootstrap-dpicker', plugins_url('/css/bootstrap-datepicker/bootstrap-datepicker.min.css', __FILE__));
             wp_enqueue_style('og-booking-font-awesome', plugins_url('/css/font-awesome/css/font-awesome.min.css', __FILE__));
             /* SCRIPTS */
             wp_enqueue_script('jquery');
             wp_enqueue_script('jquery-ui');

             wp_enqueue_script('og-booking-bootstrap', plugins_url('/js/bootstrap.js', __FILE__));
             wp_enqueue_script('og-booking-bootstrap-date-picker', plugins_url('js/bootstrap-datepicker.min.js', __FILE__));
             wp_enqueue_script('og-booking-widget', plugins_url('/js/og-booking-widget.min.js', __FILE__));

            if (is_serialized(get_option('og_booking_options', ''))) {
                $data = unserialize(get_option('og_booking_options', ''));
            } else {
                $admin_form_data = include_once OGB_PATH . 'includes/og-booking-data.php';
                $data = $admin_form_data;
            }


            include_once(OGB_PATH . '/includes/og-booking-data.php');
            include_once(OGB_PATH . 'templates/og_booking_widget.php');
        }


    }

endif;

/**
 * Main instance of OgBookingWidget.
 *
 * Returns the main instance of OgBookingWidget to prevent the need to use globals.
 *
 * @since  1.0
 * @return OgBookingWidget
 */
function OgBookingWidget()
{
    return new OgBookingWidget;
}

// Global for backwards compatibility.
$GLOBALS['ogbooking'] = OgBookingWidget();