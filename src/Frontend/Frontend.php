<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @link       https://themeatelier.net
 * @since      1.0.0
 *
 * @package     chat-whatsapp
 * @subpackage  chat-whatsapp/src/Frontend
 * @author      ThemeAtelier<themeatelierbd@gmail.com>
 */

namespace ThemeAtelier\ChatWhatsapp\Frontend;

use ThemeAtelier\ChatWhatsapp\Frontend\Templates\Template;

/**
 * The Frontend class to manage all public facing stuffs.
 *
 * @since 1.0.0
 */
class Frontend {

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
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct() {
		$this->min = defined( 'WP_DEBUG' ) && WP_DEBUG ? '' : '.min';

		add_action( 'wp_footer', array( $this, 'chat_whatsapp_content' ) );
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public static function enqueue_scripts() {
		$options                 = get_option( 'cwp_option' );
		$wa_custom_css             = isset( $options['whatsapp-custom-css'] ) ? $options['whatsapp-custom-css'] : '';
		$wa_custom_js              = isset( $options['whatsapp-custom-js'] ) ? $options['whatsapp-custom-js'] : '';
		$auto_show_popup         = isset( $options['autoshow-popup'] ) ? $options['autoshow-popup'] : '';
		$auto_open_popup_timeout = isset( $options['auto_open_popup_timeout'] ) ? $options['auto_open_popup_timeout'] : 0;
		wp_enqueue_style( 'ico-font' );
		wp_enqueue_style( 'chat-whatsapp-style' );
		$custom_css = '';
		include 'dynamic-css/dynamic-css.php';

		if ( $wa_custom_css ) {
			$custom_css .= $wa_custom_css;
		}

		wp_add_inline_style( 'chat-whatsapp-style', $custom_css );
		wp_enqueue_script( 'moment', array( 'jquery' ), '1.0', true );
		wp_enqueue_script( 'moment-timezone-with-data' );
		wp_enqueue_script( 'chat-whatsapp-script' );
		$frontend_scripts = array(
			'autoShowPopup'        => $auto_show_popup,
			'autoOpenPopupTimeout' => $auto_open_popup_timeout,
		);
		wp_localize_script( 'chat-whatsapp-script', 'whatshelp_frontend_script', $frontend_scripts );
		if ( ! empty( $wa_custom_js ) ) {
			wp_add_inline_script( 'chat-whatsapp-script', $wa_custom_js );
		}
        wp_localize_script(
            'chat-whatsapp-script',
            'frontend_scripts',
            array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'nonce'   => wp_create_nonce('chat_whatsapp_nonce'),
            )
        );
	}

	public function chat_whatsapp_content() {
		$options             = get_option( 'cwp_option' );
		$bubble_include_page = isset( $options['bubble_include_page'] ) ? $options['bubble_include_page'] : '';
		$bubble_exclude_page = isset( $options['bubble_exclude_page'] ) ? $options['bubble_exclude_page'] : '';

		if ( $bubble_include_page ) {
			if ( is_page( $bubble_include_page ) ) {
				Template::content( $options );
			}
		} elseif ( $bubble_exclude_page ) {
			if ( ! is_page( $bubble_exclude_page ) ) {
				Template::content( $options );
			}
		} else {
			Template::content( $options );
		}
	}
}
