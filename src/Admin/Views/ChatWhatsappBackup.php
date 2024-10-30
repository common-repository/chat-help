<?php

/**
 * Views class for Shortcode generator options.
 *
 * @link       https://themeatelier.net
 * @since      1.0.0
 *
 * @package chat-help
 * @subpackage chat-whatsapp/src/Admin/Views/ChatWhatsappBackup
 * @author     ThemeAtelier<themeatelierbd@gmail.com>
 */

namespace ThemeAtelier\ChatWhatsapp\Admin\Views;

use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

class ChatWhatsappBackup {


	/**
	 * Create Option fields for the setting options.
	 *
	 * @param string $prefix Option setting key prefix.
	 * @return void
	 */
	public static function options( $prefix ) {
		//
		// Field: backup
		//
		CHAT_WHATSAPP::createSection(
			$prefix,
			array(
				'title'       => esc_html__( 'BACKUP', 'chat-help' ),
				'icon'        => 'icofont-shield',
				'description' => esc_html__( 'Export or import to use same settings in different websites.', 'chat-help' ),
				'fields'      => array(
					array(
						'type' => 'backup',
					),
				),
			)
		);
	}
}
