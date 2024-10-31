<?php

/**
 * Admin Pages
 *
 * Functions used for displaying pages in admin.
 *
 * @author      Oganro
 * @version     1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


if (!class_exists('OG_Booking_Admin_Pages', false)) :

    class OG_Booking_Admin_Pages
    {
        private $message = '';

        /**
         * OG_Booking_Admin_Pages constructor.
         */
        public function __construct()
        {
            if (isset($_POST['form-data'])) {
                unset($_POST['form-data']);

                $data = $_POST;

                // Sanitize all text fields
                $sanitized = array('general' => [], 'widget' => []);


                foreach ($_POST['widget'] as $key => $value) {
                    $sanitized['widget'][$key] = sanitize_text_field($value);
                }

                $sanitized["general"]["bkn_engine"] = sanitize_trackback_urls($data["general"]["bkn_engine"]);
                $sanitized["general"]["status"] = sanitize_text_field($data["general"]["status"]);
                $sanitized["general"]["wid_bg_color"] = sanitize_text_field($data["general"]["status"]);
                $sanitized["general"]["wid_font_color"] = sanitize_hex_color($data["general"]["wid_font_color"]);
                $sanitized["general"]["widget_width"] = sanitize_text_field($data["general"]["widget_width"]);
                $sanitized["general"]["widget_align"] = sanitize_text_field($data["general"]["widget_align"]);
                $sanitized["general"]["widget_border"] = sanitize_text_field($data["general"]["widget_border"]);
                $sanitized["general"]["widget_border_color"] = sanitize_hex_color($data["general"]["widget_border_color"]);
                $sanitized["general"]["widget_border_radius"] = sanitize_text_field($data["general"]["widget_border_radius"]);
                $sanitized["general"]["btn_bg_color"] = sanitize_text_field($data["general"]["btn_bg_color"]);
                $sanitized["general"]["btn_font_color"] = sanitize_hex_color($data["general"]["btn_font_color"]);
                $sanitized["general"]["widget_btn_border_radius"] = sanitize_text_field($data["general"]["widget_btn_border_radius"]);
                $sanitized["general"]["widget_inpt_bg_color"] = sanitize_text_field($data["general"]["widget_inpt_bg_color"]);
                $sanitized["general"]["widget_inpt_fnt_color"] = sanitize_hex_color($data["general"]["widget_inpt_fnt_color"]);
                $sanitized["general"]["widget_inpt_border_radius"] = sanitize_text_field($data["general"]["widget_inpt_border_radius"]);
                $sanitized["general"]["widget_clndr_bg_color"] = sanitize_text_field($data["general"]["widget_clndr_bg_color"]);
                $sanitized["general"]["widget_clndr_fnt_color"] = sanitize_hex_color($data["general"]["widget_clndr_fnt_color"]);
                $sanitized["general"]["custom_styles"] = sanitize_textarea_field($data["general"]["custom_styles"]);


                $this->setOptions($sanitized);
                $this->message = "Records have been updated successfully";
            }

            $this->loadView();
        }

        private function loadView()
        {
            $this->loadStyles();
            $this->loadScripts();

            $widget_data = $this->getOptions();

            if (is_array($widget_data)) {
                $data = $widget_data;

            } else {
                $admin_form_data = include_once OGB_PATH . 'includes/og-booking-data.php';
                $data = $admin_form_data;
            }

            $message = $this->message;

            include_once OGB_PATH . 'templates/og-booking-admin-html-form.php';
        }

        private function loadStyles()
        {
            wp_enqueue_style('og-booking-bootstrap.css', plugins_url('css/bootstrap.css', OGB_FILEPATH));
            wp_enqueue_style('og-booking.css', plugins_url('css/og-booking.min.css', OGB_FILEPATH));
        }

        private function loadScripts()
        {
            wp_enqueue_script('og-booking-bootstrap', plugins_url('js/bootstrap.js', OGB_FILEPATH));
            wp_enqueue_script('og-booking-colorpicker', plugins_url('js/jqColorPicker/jqColorPicker.min.js', OGB_FILEPATH));
            wp_enqueue_script('og-booking', plugins_url('js/og-booking.min.js', OGB_FILEPATH));

        }

        /**
         * Save OG Booking Widget Data
         */
        private function setOptions($data)
        {
            if (is_array($data)) {
                $data = serialize($data);
            } else {
                $data = false;
            }

            update_option('og_booking_options', $data);
        }


        /**
         * Get OG Booking Widget Data
         */
        private function getOptions()
        {
            if (is_serialized(get_option('og_booking_options', ''))) {
                return unserialize(get_option('og_booking_options', ''));
            } else {
                return false;
            }

        }

    }


endif;