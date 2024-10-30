<?php
/*
Plugin Name: 	WhatsHelp Chat Support
Plugin URI: 	https://wpchatplugins.com/plugins/click-to-whatsapp/
Description: 	Can easily create Bubble & buttons for reciving whatsapp message from useres in any WordPress site. Gutenberg, Elementor and shortcodes supported. 
Author: 		ThemeAtelier
Version: 		2.0.12
Author:         ThemeAtelier
Author URI:     https://themeatelier.net/
License:        GPL-2.0+
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
Requirements:   PHP 7.0 or above, WordPress 4.0 or above.
Text Domain:    chat-help
Domain Path:    /languages
*/

// Block Direct access
if (!defined('ABSPATH')) {
    die('You should not access this file directly!.');
}
require_once __DIR__ . '/vendor/autoload.php';

use ThemeAtelier\ChatWhatsapp\ChatWhatsapp;

define('CHAT_WHATSAPP_VERSION', '2.0.12');
define('CHAT_WHATSAPP_FILE', __FILE__);
define('CHAT_WHATSAPP_ALERT_MSG', esc_html__('You should not access this file directly!', 'chat-help'));
define('CHAT_WHATSAPP_DIRNAME', dirname(__FILE__));
define('CHAT_WHATSAPP_DIR_PATH', plugin_dir_path(__FILE__));
define('CHAT_WHATSAPP_DIR_URL', plugin_dir_url(__FILE__));
define('CHAT_WHATSAPP_BASENAME', plugin_basename(__FILE__));

function chat_whatsapp_run()
{
    // Launch the plugin.
    $CHAT_WHATSAPP = new ChatWhatsapp();
    $CHAT_WHATSAPP->run();
}

include_once ABSPATH . 'wp-admin/includes/plugin.php';
$pro_plugin_slug = 'chat-whatsapp-pro/chat-whatsapp-pro.php';
// kick-off the plugin
if (!is_plugin_active($pro_plugin_slug)) {
    chat_whatsapp_run();

    // Register block
    function create_chat_whatsapp_block_init()
    {
        register_block_type_from_metadata(CHAT_WHATSAPP_DIR_PATH . 'src/Frontend/blocks/');
    }
    add_action('init', 'create_chat_whatsapp_block_init');

    // Register block category 
    function chat_whatsapp_plugin_block_categories($categories)
    {
        return array_merge(
            $categories,
            [
                [
                    'slug'  => 'whatsapp-block',
                    'title' => __('Whatsapp block', 'chat-help'),
                ],
            ]
        );
    }
    add_action('block_categories', 'chat_whatsapp_plugin_block_categories', 10, 2);
}

/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function whatsHelp_chat_appsero_init()
{

    if (!class_exists('WhatsHelpAppSero\Insights')) {
        require_once CHAT_WHATSAPP_DIR_PATH . 'src/Admin/appsero/Client.php';
    }

    $client = new WhatsHelpAppSero\Client('faa96fc0-6c04-4d9e-95fa-3612fea71662', 'WhatsHelp Chat Support', __FILE__);
    // Active insights
    $client->insights()->init();
}

whatsHelp_chat_appsero_init();
