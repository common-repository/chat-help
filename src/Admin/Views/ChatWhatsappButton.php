<?php

/**
 * Views class for Shortcode generator options.
 *
 * @link       https://themeatelier.net
 * @since      1.0.0
 *
 * @package chat-help
 * @subpackage chat-whatsapp/src/Admin/Views/ChatWhatsappButton
 * @author     ThemeAtelier<themeatelierbd@gmail.com>
 */

namespace ThemeAtelier\ChatWhatsapp\Admin\Views;

use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

class ChatWhatsappButton {


	/**
	 * Create Option fields for the setting options.
	 *
	 * @param string $prefix Option setting key prefix.
	 * @return void
	 */
	public static function options( $prefix ) {
		CHAT_WHATSAPP::createSection(
			$prefix,
			array(
				'title'  => esc_html__( 'FLOATING BUTTON', 'chat-help' ),
				'icon'   => 'icofont-brand-whatsapp',
				'fields' => array(
					array(
						'type' => 'section_tab',
						'tabs' => array(
							array(
								'title'  => esc_html__( 'General', 'greet-bubble' ),
								'icon'   => 'icofont-gear',
								'fields' => array(
									array(
										'id'      => 'opt-button-style',
										'type'    => 'image_select',
										'title'   => esc_html__( 'Bubble button style', 'chat-help' ),
										'options' => array(
											'1' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-1.png',
											'2' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-2.png',
											'3' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-3.png',
											'4' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-4.png',
											'5' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-5.png',
											'6' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-6.png',
											'7' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-7.png',
											'8' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-8.png',
											'9' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/bubble-9.png',
										),
										'default' => '1',
									),

									// Show hide icon
									array(
										'id'         => 'disable-button-icon',
										'type'       => 'switcher',
										'title'      => esc_html__( 'Show/Hide icon', 'chat-help' ),
										'text_on'    => esc_html__( 'Show', 'chat-help' ),
										'text_off'   => esc_html__( 'Hide', 'chat-help' ),
										'default'    => true,
										'text_width' => 80,
										'dependency' => array( 'opt-button-style', '!=', '1' ),
									),

									// Circle button icon
									array(
										'id'         => 'circle-button-icon-1',
										'type'       => 'icon',
										'title'      => esc_html__( 'Icon for circle button', 'chat-help' ),
										'default'    => 'icofont-brand-whatsapp',
										'subtitle'   => esc_html__( 'Change icon for circle button.', 'chat-help' ),
										'dependency' => array( 'opt-button-style', '==', '1' ),
									),

									// Circle button icon close
									array(
										'id'         => 'circle-button-close-1',
										'type'       => 'icon',
										'title'      => esc_html__( 'Icon for circle button close ', 'chat-help' ),
										'default'    => 'icofont-close',
										'subtitle'   => esc_html__( 'Change icon for circle button close.', 'chat-help' ),
										'dependency' => array( 'opt-button-style', '==', '1' ),
									),
									// Circle button icon
									array(
										'id'         => 'circle-button-icon',
										'type'       => 'icon',
										'title'      => esc_html__( 'Icon for circle button', 'chat-help' ),
										'default'    => 'icofont-brand-whatsapp',
										'subtitle'   => esc_html__( 'Change icon for circle button.', 'chat-help' ),
										'dependency' => array( 'disable-button-icon|opt-button-style', '==|!=', 'true|1' ),
									),

									// Circle button icon close
									array(
										'id'         => 'circle-button-close',
										'type'       => 'icon',
										'title'      => esc_html__( 'Icon for circle button close ', 'chat-help' ),
										'default'    => 'icofont-close',
										'subtitle'   => esc_html__( 'Change icon for circle button close.', 'chat-help' ),
										'dependency' => array( 'disable-button-icon|opt-button-style', '==|!=', 'true|1' ),
									),

									// changeing circle animations
									array(
										'id'         => 'circle-animation',
										'type'       => 'select',
										'title'      => esc_html__( 'Select animation for circle icon', 'chat-help' ),
										'options'    => array(
											'1' => esc_html__( 'Slide down', 'chat-help' ),
											'2' => esc_html__( 'Rotate', 'chat-help' ),
											'3' => esc_html__( 'Fade', 'chat-help' ),
											'4' => esc_html__( 'Slide Up', 'chat-help' ),
										),
										'default'    => '1',
										'dependency' => array( 'circle-button-icon', '==', 'true' ),
									),

									// Bubble text

									array(
										'id'         => 'bubble-text',
										'type'       => 'text',
										'title'      => esc_html__( 'Bubble text', 'chat-help' ),
										'subtitle'   => esc_html__( 'Change text to show in bubble', 'chat-help' ),
										'default'    => esc_html__( 'How may I help you?', 'chat-help' ),
										'dependency' => array( 'opt-button-style', 'any', '2,3,4,5,6,7,8,9' ),
									),

									// Bubble button padding
									array(
										'id'          => 'bubble-button-padding',
										'type'        => 'spacing',
										'output_mode' => 'padding',
										'title'       => esc_html__( 'Bubble button padding', 'chat-help' ),
										'subtitle'    => esc_html__( 'Change bubble button padding', 'chat-help' ),
										'default'     => array(
											'top'    => '5',
											'right'  => '10',
											'bottom' => '5',
											'left'   => '10',
											'unit'   => 'px',
										),
										'dependency'  => array( 'opt-button-style', 'any', '2,3,4,5,6,7,8,9' ),
									),
									array(
										'id'         => 'bubble_button_tooltip',
										'type'       => 'switcher',
										'title'      => esc_html__( 'Button tooltip', 'chat-help' ),
										'subtitle'   => esc_html__( 'Show button tooltip.', 'chat-help' ),
										'text_on'    => esc_html__( 'Show', 'chat-help' ),
										'text_off'   => esc_html__( 'Hide', 'chat-help' ),
										'default'    => true,
										'text_width' => 80,
									),
									array(
										'id'         => 'bubble_button_tooltip_text',
										'type'       => 'text',
										'title'      => esc_html__( 'Button Tooltip Text', 'chat-help' ),
										'subtitle'   => esc_html__( 'Set button tooltip text.', 'chat-help' ),
										'default'    => __( 'Need Help? <strong>Contact us</strong>', 'chat-help' ),
										'dependency' => array( 'bubble_button_tooltip', '==', 'true' ),
									),
									array(
										'id'         => 'bubble_button_tooltip_width',
										'type'       => 'slider',
										'title'      => esc_html__( 'Button Tooltip Width', 'chat-help' ),
										'subtitle'   => esc_html__( 'Set bubble button tooltip width.', 'chat-help' ),
										'min'        => 20,
										'max'        => 500,
										'step'       => 5,
										'unit'       => 'px',
										'default'    => 185,
										'dependency' => array( 'bubble_button_tooltip', '==', 'true' ),
									),
									// bubble visibility
									array(
										'id'      => 'bubble-visibility',
										'type'    => 'button_set',
										'title'   => esc_html__( 'Bubble visibility', 'chat-help' ),
										'default' => 'everywhere',
										'options' => array(
											'everywhere' => array(
												'text' => esc_html__( 'Everywhere', 'chat-help' ),
											),
											'desktop'    => array(
												'text' => esc_html__( 'Desktop Only', 'chat-help' ),
											),
											'tablet'     => array(
												'text' => esc_html__( 'Tablet Only', 'chat-help' ),
											),
											'mobile'     => array(
												'text' => esc_html__( 'Mobile Only', 'chat-help' ),
											),
										),
									),
								),
							),
							array(
								'title'  => esc_html__( 'Position', 'greet-bubble' ),
								'icon'   => 'icofont-hand-drag',
								'fields' => array(
									// Bubble position
									array(
										'id'      => 'bubble-position',
										'type'    => 'button_set',
										'title'   => esc_html__( 'Bubble position', 'chat-help' ),
										'default' => 'right_bottom',
										'options' => array(
											'right_bottom' => array(
												'text' => esc_html__( 'Right Bottom', 'chat-help' ),
											),
											'left_bottom'  => array(
												'text' => esc_html__( 'Left Bottom', 'chat-help' ),
											),
											'right_middle' => array(
												'text'     => esc_html__( 'Right Middle', 'chat-help' ),
												'pro_only' => true,
											),
											'left_middle'  => array(
												'text'     => esc_html__( 'Left Middle', 'chat-help' ),
												'pro_only' => true,
											),
										),
									),

									array(
										'id'         => 'right_bottom',
										'type'       => 'spacing',
										'title'      => esc_html__( 'Margin From Right Bottom', 'chat-help' ),
										'top'        => false,
										'left'       => false,
										'default'    => array(
											'right'  => '30',
											'bottom' => '30',
											'unit'   => 'px',
										),
										'dependency' => array( 'bubble-position', '==', 'right_bottom' ),
									),

									array(
										'id'         => 'left_bottom',
										'type'       => 'spacing',
										'title'      => esc_html__( 'Margin From Left Bottom', 'chat-help' ),
										'top'        => false,
										'right'      => false,
										'default'    => array(
											'left'   => '30',
											'bottom' => '30',
											'unit'   => 'px',
										),
										'dependency' => array( 'bubble-position', '==', 'left_bottom' ),
									),

									array(
										'id'         => 'right_middle',
										'type'       => 'spacing',
										'title'      => esc_html__( 'Margin From Right Middle', 'chat-help' ),
										'top'        => false,
										'left'       => false,
										'bottom'     => false,
										'default'    => array(
											'right' => '20',
											'unit'  => 'px',
										),
										'dependency' => array( 'bubble-position', '==', 'right_middle' ),
									),

									array(
										'id'         => 'left_middle',
										'type'       => 'spacing',
										'title'      => esc_html__( 'Margin From Left Middle', 'chat-help' ),
										'top'        => false,
										'right'      => false,
										'bottom'     => false,
										'default'    => array(
											'left' => '20',
											'unit' => 'px',
										),
										'dependency' => array( 'bubble-position', '==', 'left_middle' ),
									),

									array(
										'type'  => 'subheading',
										'title' => esc_html__( 'Different Positioning on Tablet', 'chat-help' ),
									),

									array(
										'id'       => 'enable-positioning-tablet',
										'type'     => 'switcher',
										'class'    => 'switcher_pro_only',
										'title'    => esc_html__( 'Use Different Positioning for Tablet Devices', 'chat-help' ),
										'text_on'  => esc_html__( 'Yes', 'chat-help' ),
										'text_off' => esc_html__( 'No', 'chat-help' ),
									),

									array(
										'type'  => 'subheading',
										'title' => esc_html__( 'Different Positioning on Mobile', 'chat-help' ),
									),
									array(
										'id'       => 'enable-positioning-mobile',
										'type'     => 'switcher',
										'class'    => 'switcher_pro_only',
										'title'    => esc_html__( 'Use Different Positioning for Mobile Devices', 'chat-help' ),
										'text_on'  => esc_html__( 'Yes', 'chat-help' ),
										'text_off' => esc_html__( 'No', 'chat-help' ),
									),
								),
							),
							array(
								'title'  => esc_html__( 'Page Restriction', 'greet-bubble' ),
								'icon'   => 'icofont-page',
								'fields' => array(
									// Include specific
									array(
										'id'       => 'bubble_include_page',
										'type'     => 'select',
										'title'    => esc_html__( 'Include page', 'chat-whatsapp-pro' ),
										'options'  => 'pages',
										'chosen'   => true,
										'multiple' => true,
										'sortable' => true,
									),
									// Exclude specific
									array(
										'id'         => 'bubble_exclude_page',
										'type'       => 'select',
										'title'      => esc_html__( 'Exclude page', 'chat-whatsapp-pro' ),
										'options'    => 'pages',
										'chosen'     => true,
										'multiple'   => true,
										'sortable'   => true,
										'dependency' => array( 'bubble_include_page', '==', '', true ),
									),
								),
							),
						),
					),
				),
			)
		);
	}
}
