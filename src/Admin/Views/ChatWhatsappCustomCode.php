<?php

/**
 * Views class for Shortcode generator options.
 *
 * @link       https://themeatelier.net
 * @since      1.0.0
 *
 * @package chat-help
 * @subpackage chat-whatsapp/src/Admin/Views/ChatWhatsappCustomCode
 * @author     ThemeAtelier<themeatelierbd@gmail.com>
 */

namespace ThemeAtelier\ChatWhatsapp\Admin\Views;

use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

class ChatWhatsappCustomCode {


	/**
	 * Create Option fields for the setting options.
	 *
	 * @param string $prefix Option setting key prefix.
	 * @return void
	 */
	public static function options( $prefix ) {
		//
		// CUSTOM CODES
		//
		CHAT_WHATSAPP::createSection(
			$prefix,
			array(
				'title'  => esc_html__( 'CUSTOM CODES', 'chat-help' ),
				'icon'   => 'icofont-vscode',
				'fields' => array(
					array(
						'id'       => 'whatsapp-custom-css',
						'type'     => 'code_editor',
						'title'    => esc_html__( 'Custom CSS', 'chat-help' ),
						'settings' => array(
							'theme' => 'mbo',
							'mode'  => 'css',
						),
					),

					array(
						'id'       => 'whatsapp-custom-js',
						'type'     => 'code_editor',
						'title'    => esc_html__( 'Custom JavaScript', 'chat-help' ),
						'settings' => array(
							'theme' => 'mbo',
							'mode'  => 'js',
						),
					),

				),
			)
		);
	}
}
