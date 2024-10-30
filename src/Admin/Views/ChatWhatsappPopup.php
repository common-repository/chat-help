<?php

/**
 * Views class for Shortcode generator options.
 *
 * @link       https://themeatelier.net
 * @since      1.0.0
 *
 * @package chat-help
 * @subpackage chat-whatsapp/src/Admin/Views/ChatWhatsappPopup
 * @author     ThemeAtelier<themeatelierbd@gmail.com>
 */

namespace ThemeAtelier\ChatWhatsapp\Admin\Views;

use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

class ChatWhatsappPopup
{


	/**
	 * Create Option fields for the setting options.
	 *
	 * @param string $prefix Option setting key prefix.
	 * @return void
	 */
	public static function options($prefix, $timezones)
	{
		//
		// Create a section
		//
		CHAT_WHATSAPP::createSection(
			$prefix,
			array(
				'title'  => esc_html__('FLOATING POPUP', 'chat-help'),
				'icon'   => 'icofont-ui-text-chat',
				'fields' => array(
					array(
						'type' => 'section_tab',
						'tabs' => array(
							array(
								'title'  => esc_html__('General', 'greet-bubble'),
								'icon'   => 'icofont-gear',
								'fields' => array(
									// changeing chat type
									array(
										'id'      => 'opt-chat-type',
										'type'    => 'button_set',
										'title'   => esc_html__('Bubble type', 'chat-help'),
										'default' => 'single',
										'options' => array(
											'single' => array(
												'text' => esc_html__('Single user', 'chat-help'),
											),
											'multi'  => array(
												'text'     => esc_html__('Multiple users', 'chat-help'),
												'pro_only' => true,
											),
										),
									),

									// adding contact number
									array(
										'id'         => 'opt-number',
										'type'       => 'text',
										'title'      => esc_html__('WhatsApp Number', 'chat-help'),
										'default'    => '+880123456189',
										'subtitle'   => esc_html__('Add your WhatsApp number including country code. eg: +880123456189', 'chat-help'),
										'validate'   => 'csf_validate_numeric',
										'dependency' => array('opt-chat-type', 'any', 'single'),
									),

									// changeing timezone
									array(
										'id'          => 'select-timezone',
										'type'        => 'select',
										'title'       => esc_html__('Timezone', 'chat-help'),
										'subtitle'    => esc_html__('When using the date and time from the user browser you can transform it to your current timezone (in case your user is in a different timezone)', 'chat-help'),
										'chosen'      => true,
										'placeholder' => esc_html__('Select timezone', 'chat-help'),
										'dependency'  => array('opt-chat-type', 'any', 'single'),
										'options'     => $timezones,
									),

									// Add availablity
									array(
										'id'         => 'opt-availablity',
										'type'       => 'tabbed',
										'title'      => esc_html__('Availablity', 'chat-help'),
										'subtitle'   => esc_html__('24-hour Time without PM:AM" eg: From 00:00 to 23:59. If you are offline for any specefic full day use 00:00 and 00:00 in From and To value.', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'single'),
										// sunday
										'tabs'       => array(
											array(
												'title'  => esc_html__('Sunday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-sunday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),
											// monday
											array(
												'title'  => esc_html__('Monday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-monday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),
											// tuesday
											array(
												'title'  => esc_html__('Tuesday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-tuesday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),
											// wednesday
											array(
												'title'  => esc_html__('Wednesday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-wednesday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),

											// thursday
											array(
												'title'  => esc_html__('Thursday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-thursday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),

											// friday
											array(
												'title'  => esc_html__('Friday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-friday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),

											// thursday
											array(
												'title'  => esc_html__('Saturday', 'chat-help'),
												'fields' => array(
													array(
														'id'   => 'availablity-saturday',
														'type' => 'datetime',
														'from_to' => true,
														'settings' => array(
															'noCalendar' => true,
															'enableTime' => true,
															'dateFormat' => 'H:i',
															'time_24hr'  => true,
														),
													),
												),
											),

										),
									),

									// changeing layout type
									array(
										'id'         => 'opt-layout-type',
										'type'       => 'button_set',
										'title'      => esc_html__('Layout type', 'chat-help'),
										'default'    => 'form',
										'options'    => array(
											'form'  => array(
												'text' => esc_html__('With form', 'chat-help'),
											),
											'agent' => array(
												'text' => esc_html__('With agent message', 'chat-help'),
											),
										),
										'dependency' => array('opt-chat-type', 'any', 'single'),
									),
									// adding agent photo
									array(
										'id'          => 'agent-photo',
										'type'        => 'media',
										'title'       => esc_html__('Agent photo', 'chat-help'),
										'subtitle'    => esc_html__('Add agent photo to show in the bubble.', 'chat-help'),
										'library'     => 'image',
										'placeholder' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/user.webp',
										'preview'     => true,
										'dependency'  => array('opt-chat-type', 'any', 'single'),
										'default'     => array(
											'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/user.webp',
										),
									),

									// agent name
									array(
										'id'         => 'agent-name',
										'type'       => 'text',
										'title'      => esc_html__('Agent name', 'chat-help'),
										'subtitle'   => esc_html__('Add your/agent name for shoing in bubble.', 'chat-help'),
										'default'    => esc_html__('John Doe', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'single'),
									),

									// agent subtitle
									array(
										'id'         => 'agent-subtitle',
										'type'       => 'text',
										'title'      => esc_html__('Subtitle', 'chat-help'),
										'subtitle'   => esc_html__('Add subtitle to show under agent name', 'chat-help'),
										'default'    => esc_html__('Typically replies within a day', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'single'),
									),
									array(
										'id'         => 'agent-name-placeholder-text',
										'type'       => 'text',
										'title'      => esc_html__('Agent name placeholder text', 'chat-help'),
										'subtitle'   => esc_html__('Add agent name placeholder text', 'chat-help'),
										'default'    => esc_html__('Your name?', 'chat-help'),
										'dependency' => array('opt-chat-type|opt-layout-type', '==|==', 'single|form'),
									),
									array(
										'id'         => 'agent-message-placeholder-text',
										'type'       => 'text',
										'title'      => esc_html__('Agent message placeholder text', 'chat-help'),
										'subtitle'   => esc_html__('Add agent message placeholder text', 'chat-help'),
										'default'    => esc_html__('Message', 'chat-help'),
										'dependency' => array('opt-chat-type|opt-layout-type', '==|==', 'single|form'),
									),
									// agent subtitle
									array(
										'id'         => 'agent-message',
										'type'       => 'textarea',
										'title'      => esc_html__('Message from agent', 'chat-help'),
										'subtitle'   => esc_html__('Add add custom message for shoing in message box.', 'chat-help'),
										'default'    => esc_html__('Hello, Welcome to the site. Please click below button for chating me throught WhatsApp.', 'chat-help'),
										'dependency' => array('opt-layout-type', '==', 'agent'),
									),

									// before chat icon
									array(
										'id'         => 'before-chat-icon',
										'type'       => 'icon',
										'title'      => esc_html__('Icon for send message button', 'chat-help'),
										'default'    => 'icofont-brand-whatsapp',
										'subtitle'   => esc_html__('Change icon for adding before send message button text.', 'chat-help'),
										'dependency' => array('opt-chat-type', '==', 'single'),
									),

									// agent subtitle
									array(
										'id'         => 'chat-button-text',
										'type'       => 'text',
										'title'      => esc_html__('Send message button text', 'chat-help'),
										'subtitle'   => esc_html__('Add send message button text', 'chat-help'),
										'default'    => esc_html__('Send a message', 'chat-help'),
										'dependency' => array('opt-chat-type', '==', 'single'),
									),

									array(
										'id'    => 'whatsapp_message_template',
										'type'  => 'textarea',
										'title' => esc_html__('Message Template', 'chat-help'),
										'default' => esc_html__("Name: {name}.\n\n Message: {message}\n\nDate: {date}", 'chat-help'),
										'desc'  => esc_html__("Available tags &ndash; {name}, {message}, {date}, {siteURL}", 'chat-help'),
										'dependency' => array('opt-layout-type', '==', 'form'),
									),

									/************************************
									 * MULTI AGENTS SETTINGS
									 */

									// Bubble title
									array(
										'id'         => 'bubble-title',
										'type'       => 'text',
										'title'      => esc_html__('Bubble title', 'chat-help'),
										'subtitle'   => esc_html__('Add title to show as top main text of bubble.', 'chat-help'),
										'default'    => esc_html__('Need Help? Send a WhatsApp message now', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'multi'),
									),

									// Bubble subtitle
									array(
										'id'         => 'bubble-subtitle',
										'type'       => 'text',
										'title'      => esc_html__('Bubble subtitle', 'chat-help'),
										'subtitle'   => esc_html__('Add subtitle to show below main title.', 'chat-help'),
										'default'    => esc_html__('Click one of our representatives below', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'multi'),
									),

									// Chat agents
									array(
										'id'         => 'opt-chat-agents',
										'type'       => 'group',
										'title'      => esc_html__('Chat agents', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'multi'),
										'fields'     => array(
											array(
												'id'    => 'agent-name',
												'type'  => 'text',
												'title' => esc_html__('Agent name', 'chat-help'),
											),

											// adding agent photo
											array(
												'id'      => 'agent-photo',
												'type'    => 'media',
												'title'   => esc_html__('Agent photo', 'chat-help'),
												'placeholder' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/user.webp',
												'library' => 'image',
												'preview' => true,
											),

											array(
												'id'    => 'agent-number',
												'type'  => 'text',
												'title' => esc_html__('Whatsapp number for agent', 'chat-help'),
											),

											// changeing timezone
											array(
												'id'       => 'agent-timezone',
												'type'     => 'select',
												'title'    => esc_html__('Timezone', 'chat-help'),
												'subtitle' => esc_html__('When using the date and time from the user browser you can transform it to your current timezone (in case your user is in a different timezone)', 'chat-help'),
												'chosen'   => true,
												'placeholder' => esc_html__('Select timezone', 'chat-help'),
												'options'  => $timezones,
											),

											// Add availablity
											array(
												'id'       => 'opt-availablity',
												'type'     => 'tabbed',
												'title'    => esc_html__('Availablity', 'chat-help'),
												'subtitle' => esc_html__('24-hour Time without PM:AM" eg: From 00:00 to 23:59. If you are offline for any specefic full day use 00:00 and 00:00 in From and To value.', 'chat-help'),
												// sunday
												'tabs'     => array(
													array(
														'title'  => esc_html__('Sunday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-sunday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),
													// monday
													array(
														'title'  => esc_html__('Monday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-monday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),
													// tuesday
													array(
														'title'  => esc_html__('Tuesday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-tuesday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),
													// wednesday
													array(
														'title'  => esc_html__('Wednesday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-wednesday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),

													// thursday
													array(
														'title'  => esc_html__('Thursday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-thursday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),

													// friday
													array(
														'title'  => esc_html__('Friday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-friday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),

													// thursday
													array(
														'title'  => esc_html__('Saturday', 'chat-help'),
														'fields' => array(
															array(
																'id'       => 'availablity-saturday',
																'type'     => 'datetime',
																'from_to'  => true,
																'settings' => array(
																	'noCalendar' => true,
																	'enableTime' => true,
																	'dateFormat' => 'H:i',
																	'time_24hr'  => true,
																),
															),
														),
													),

												),
											),
											// agent designation

											array(
												'id'    => 'agent-designation',
												'type'  => 'text',
												'title' => esc_html__('Agent designation', 'chat-help'),
											),

											array(
												'id'    => 'agent-online-text',
												'type'  => 'text',
												'title' => esc_html__('Agent online text', 'chat-help'),
											),

											array(
												'id'    => 'agent-offline-text',
												'type'  => 'text',
												'title' => esc_html__('Agent offline text', 'chat-help'),
											),
										),
										'default'    => array(
											array(
												'agent-name'   => esc_html__('Sarah C. Patrick', 'chat-help'),
												'agent-number' => esc_html__('+8801123456588', 'chat-help'),
												'agent-designation' => esc_html__('Technical support', 'chat-help'),
												'agent-online-text' => esc_html__('I am online', 'chat-help'),
												'agent-offline-text' => esc_html__('I am offline', 'chat-help'),
												'agent-photo'  => array(
													'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/user.webp',
												),
											),
											array(
												'agent-name'   => esc_html__('Patricia J. Hunt', 'chat-help'),
												'agent-number' => esc_html__('008801123456588', 'chat-help'),
												'agent-designation' => esc_html__('Marketing support', 'chat-help'),
												'agent-online-text' => esc_html__('I am online', 'chat-help'),
												'agent-offline-text' => esc_html__('I am offline', 'chat-help'),
												'agent-photo'  => array(
													'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/agent1.webp',
												),
											),
											array(
												'agent-name'   => esc_html__('Frederic M. Tune', 'chat-help'),
												'agent-number' => esc_html__('+8801123456588', 'chat-help'),
												'agent-designation' => esc_html__('Sales support', 'chat-help'),
												'agent-online-text' => esc_html__('I am online', 'chat-help'),
												'agent-offline-text' => esc_html__('I am offline', 'chat-help'),
												'agent-photo'  => array(
													'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/agent2.webp',
												),
											),
											array(
												'agent-name'   => esc_html__('Douglas A. Smith', 'chat-help'),
												'agent-number' => esc_html__('+8801123456588', 'chat-help'),
												'agent-designation' => esc_html__('Product manager', 'chat-help'),
												'agent-online-text' => esc_html__('I am online', 'chat-help'),
												'agent-offline-text' => esc_html__('I am offline', 'chat-help'),
												'agent-photo'  => array(
													'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/agent3.webp',
												),
											),
											array(
												'agent-name'   => esc_html__('Douglas A. Smith', 'chat-help'),
												'agent-number' => esc_html__('+8801123456588', 'chat-help'),
												'agent-designation' => esc_html__('Support Manager', 'chat-help'),
												'agent-online-text' => esc_html__('I am online', 'chat-help'),
												'agent-offline-text' => esc_html__('I am offline', 'chat-help'),
												'agent-photo'  => array(
													'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/agent4.webp',
												),
											),
											array(
												'agent-name'   => esc_html__('Garland D. Homer', 'chat-help'),
												'agent-number' => esc_html__('+8801123456588', 'chat-help'),
												'agent-designation' => esc_html__('Technical support', 'chat-help'),
												'agent-online-text' => esc_html__('I am online', 'chat-help'),
												'agent-offline-text' => esc_html__('I am offline', 'chat-help'),
												'agent-photo'  => array(
													'url' => CHAT_WHATSAPP_DIR_URL . 'src/assets/image/agent1.webp',
												),
											),
										),
									),
								),
							),
							array(
								'title'  => esc_html__('Advanced Settings', 'greet-bubble'),
								'icon'   => 'icofont-settings',
								'fields' => array(
									// Autometically show popup
									array(
										'id'       => 'autoshow-popup',
										'type'     => 'switcher',
										'title'    => esc_html__('Auto open popup', 'chat-help'),
										'subtitle' => esc_html__('Turn ON for open popup automatically.', 'chat-help'),
										'default'  => false,
									),
									// Auto open popup timeout
									array(
										'id'         => 'auto_open_popup_timeout',
										'type'       => 'slider',
										'title'      => esc_html__('Auto open popup timeout', 'chat-help'),
										'subtitle'   => esc_html__('Timeout value for opening popup after second.', 'chat-help'),
										'min'        => 0,
										'max'        => 100,
										'step'       => 1,
										'default'    => 0,
										'dependency' => array('autoshow-popup', '==', 'true'),
									),
									// GDPR compliance checkbox
									array(
										'id'       => 'gdpr-enable',
										'type'     => 'switcher',
										'title'    => esc_html__('GDPR compliance', 'chat-help'),
										'subtitle' => esc_html__('Turn ON enabling GDPR compliance checkbox', 'chat-help'),
										'default'  => false,
									),
									// GDPR compliance text
									array(
										'id'         => 'gdpr-compliance-content',
										'type'       => 'wp_editor',
										'title'      => esc_html__('GDPR compliance message', 'chat-help'),
										'subtitle'   => esc_html__('Change default GFPR compliance text', 'chat-help'),
										'default'    => __('Please accept our <a href="#">privacy policy</a> first to start a conversation.', 'chat-help'),
										'dependency' => array('gdpr-enable', 'any', true),
									),

									// Header content position
									array(
										'id'      => 'bubble-style',
										'type'    => 'button_set',
										'title'   => esc_html__('Select bubble layout mode', 'chat-help'),
										'default' => 'default',
										'options' => array(
											'default' => array(
												'text' => esc_html__('Light mode', 'chat-help'),
											),
											'dark'    => array(
												'text' => esc_html__('Dark mode', 'chat-help'),
											),
											'night'   => array(
												'text' => esc_html__('Night mode', 'chat-help'),
											),
										),
									),

									// Header content position
									array(
										'id'         => 'header-content-position',
										'type'       => 'button_set',
										'title'      => esc_html__('Bubble header contnet position', 'chat-help'),
										'default'    => 'center',
										'options'    => array(
											'left'   => array(
												'text' => esc_html__('Left', 'chat-help'),
											),
											'center' => array(
												'text' => esc_html__('Center', 'chat-help'),
											),
										),
										'dependency' => array('opt-chat-type', 'any', 'single'),
									),

									// Show search field
									array(
										'id'         => 'bubble-search',
										'type'       => 'switcher',
										'title'      => esc_html__('Show searh field?', 'chat-help'),
										'default'    => true,
										'text_on'    => esc_html__('Yes', 'chat-help'),
										'text_off'   => esc_html__('No', 'chat-help'),
										'dependency' => array('opt-chat-type', 'any', 'multi'),
									),

									// Agent list or grid
									array(
										'id'         => 'agent-listGrid',
										'type'       => 'button_set',
										'title'      => esc_html__('Agent listing style', 'chat-help'),
										'default'    => 'list',
										'options'    => array(
											'list' => array(
												'text' => esc_html__('List', 'chat-help'),
											),
											'grid' => array(
												'text' => esc_html__('Grid', 'chat-help'),
											),
										),
										'dependency' => array('opt-chat-type', 'any', 'multi'),
									),

									// changeing bubble animations
									array(
										'id'      => 'select-animation',
										'type'    => 'select',
										'title'   => esc_html__('Select animation for bubble', 'chat-help'),
										'options' => array(
											'1'      => esc_html__('Fade Right', 'chat-help'),
											'2'      => esc_html__('Fade Down', 'chat-help'),
											'4'      => esc_html__('Fade In Scale', 'chat-help'),
											'5'      => esc_html__('Rotation', 'chat-help'),
											'6'      => esc_html__('Slide Fall', 'chat-help'),
											'7'      => esc_html__('Slide Down', 'chat-help'),
											'3'      => esc_html__('Ease Down', 'chat-help'),
											'8'      => esc_html__('Rotate Left', 'chat-help'),
											'9'      => esc_html__('Flip Horizontal', 'chat-help'),
											'10'     => esc_html__('Flip Vertical', 'chat-help'),
											'11'     => esc_html__('Flip Up', 'chat-help'),
											'12'     => esc_html__('Super Scaled', 'chat-help'),
											'13'     => esc_html__('Slide Up', 'chat-help'),
											'random' => esc_html__('Random', 'chat-help'),
										),
										'default' => 'random',
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
