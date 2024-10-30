<?php

/**
 * The admin-facing functionality of the plugin.
 *
 * @link       https://themeatelier.net
 * @since      1.0.0
 *
 * @package chat-whatsapp
 * @subpackage chat-whatsapp/src/Admin
 * @author     ThemeAtelier<themeatelierbd@gmail.com>
 */

namespace ThemeAtelier\ChatWhatsapp\Admin;

use ThemeAtelier\ChatWhatsapp\Admin\Views\ChatWhatsappOptions;
use ThemeAtelier\ChatWhatsapp\Admin\Views\ChatWhatsappMetabox;

/**
 * The admin class
 */
class Admin {

	/**
	 * The slug of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_slug   The slug of this plugin.
	 */
	private $plugin_slug;

	/**
	 * The min of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $min   The slug of this plugin.
	 */
	private $min;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The class constructor.
	 *
	 * @param string $plugin_slug The slug of the plugin.
	 * @param string $version Current version of the plugin.
	 */
	function __construct( $plugin_slug, $version ) {
		$this->plugin_slug = $plugin_slug;
		$this->version     = $version;
		$this->min         = defined( 'WP_DEBUG' ) && WP_DEBUG ? '' : '.min';
		ChatWhatsappOptions::options( 'cwp_option' );
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public static function enqueue_scripts( $hook ) {
		wp_enqueue_style( 'admin' );
	}

	public function add_plugin_page() {
		// This page will be under "Settings"
		add_menu_page(
			esc_html__( 'Whatsapp Chat', 'chat-help' ),
			esc_html__( 'Whatsapp Chat', 'chat-help' ),
			'manage_options',
			'chat-help',
			array( $this, 'chat_help_settings' ),
			'dashicons-whatsapp',
			6
		);

		add_submenu_page( 'chat-help', __( '👑 Upgrade to Pro!', 'chat-help' ), sprintf( '<span class="chat-help-get-pro-text">%s</span>', __( '👑 Upgrade to Pro!', 'chat-help' ) ), 'manage_options', 'https://1.envato.market/x9Ba1y' );
	}

	/**
	 * Options page callback
	 */
	public function chat_help_settings() {}
}
