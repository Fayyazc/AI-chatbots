<?php
/**
 * Plugin Name:       WhatsApp Click-to-Chat Button & Overlay
 * Plugin URI:        https://wordpress.org/plugins/whatsapp-click-to-chat-button/
 * Description:       Adds a highly customizable floating WhatsApp contact button overlay to your WordPress & WooCommerce store with automatic page-context detection for product and cart pages.
 * Version:           1.0.0
 * Author:            Antigravity Team
 * Author URI:        https://antigravity.ai
 * License:           GPLv2 or later
 * Text Domain:       whatsapp-click-to-chat
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('WAC_PLUGIN_VERSION', '1.0.0');
define('WAC_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WAC_PLUGIN_URL', plugin_dir_url(__FILE__));

// Require Core Sub-modules
require_once WAC_PLUGIN_DIR . 'includes/admin-settings.php';
require_once WAC_PLUGIN_DIR . 'includes/class-frontend.php';

/**
 * Initialize Plugin Hooks
 */
function wac_plugin_init() {
    // Admin Settings Page
    if (is_admin()) {
        WAC_Admin_Settings::init();
    }
    
    // Frontend Script & Button Renderer
    WAC_Frontend::init();
}
add_action('plugins_loaded', 'wac_plugin_init');

/**
 * Activation Hook - Set Defaults
 */
register_activation_hook(__FILE__, 'wac_plugin_activate');
function wac_plugin_activate() {
    $default_options = array(
        'phone_number'         => '+923365037770',
        'agent_name'           => 'Customer Support Specialist',
        'agent_role'           => 'Online | Replies in ~2 mins',
        'position'             => 'bottom-right',
        'welcome_msg'          => 'Hello! 👋 How can we help you today with products or orders?',
        'default_msg'          => 'Hi! I am reaching out from your website.',
        'enable_on_home'       => '1',
        'enable_on_product'    => '1',
        'enable_on_cart'       => '1',
        'enable_on_all'        => '1',
        'auto_popup_delay'     => '0'
    );

    if (!get_option('wac_plugin_settings')) {
        update_option('wac_plugin_settings', $default_options);
    }
}
