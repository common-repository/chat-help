<?php

/**
 * Template class file for the Chat WhatsApp plugin.
 *
 * This file defines the Template class that is responsible for handling
 * frontend templates for the plugin.
 *
 * @package ThemeAtelier\ChatWhatsapp
 */

namespace ThemeAtelier\ChatWhatsapp\Frontend\Templates;

class Template
{


    public static function content($options)
    {
        $opt_availablity = isset($options['opt-availablity']) ? $options['opt-availablity'] : '';
        $sunday_from     = $opt_availablity ? $opt_availablity['availablity-sunday']['from'] : '00:00';
        $sunday_to       = $opt_availablity ? $opt_availablity['availablity-sunday']['to'] : '23:59';

        $monday_from = $opt_availablity ? $opt_availablity['availablity-monday']['from'] : '00:00';
        $monday_to   = $opt_availablity ? $opt_availablity['availablity-monday']['to'] : '23:59';

        $tuesday_from = $opt_availablity ? $opt_availablity['availablity-tuesday']['from'] : '00:00';
        $tuesday_to   = $opt_availablity ? $opt_availablity['availablity-tuesday']['to'] : '23:59';

        $wednesday_from = $opt_availablity ? $opt_availablity['availablity-wednesday']['from'] : '00:00';
        $wednesday_to   = $opt_availablity ? $opt_availablity['availablity-wednesday']['to'] : '23:59';

        $thursday_from = $opt_availablity ? $opt_availablity['availablity-thursday']['from'] : '00:00';
        $thursday_to   = $opt_availablity ? $opt_availablity['availablity-thursday']['to'] : '23:59';

        $friday_from = $opt_availablity ? $opt_availablity['availablity-friday']['from'] : '00:00';
        $friday_to   = $opt_availablity ? $opt_availablity['availablity-friday']['to'] : '23:59';

        $saturday_from = $opt_availablity ? $opt_availablity['availablity-saturday']['from'] : '00:00';
        $saturday_to   = $opt_availablity ? $opt_availablity['availablity-saturday']['to'] : '23:59';

        $sunday                     = ($sunday_from ? $sunday_from : '0:00') . '-' . ($sunday_to ? $sunday_to : '23:59');
        $monday                     = ($monday_from ? $monday_from : '0:00') . '-' . ($monday_to ? $monday_to : '23:59');
        $tuesday                    = ($tuesday_from ? $tuesday_from : '0:00') . '-' . ($tuesday_to ? $tuesday_to : '23:59');
        $wednesday                  = ($wednesday_from ? $wednesday_from : '0:00') . '-' . ($wednesday_to ? $wednesday_to : '23:59');
        $thursday                   = ($thursday_from ? $thursday_from : '0:00') . '-' . ($thursday_to ? $thursday_to : '23:59');
        $friday                     = ($friday_from ? $friday_from : '0:00') . '-' . ($friday_to ? $friday_to : '23:59');
        $saturday                   = ($saturday_from ? $saturday_from : '0:00') . '-' . ($saturday_to ? $saturday_to : '23:59');
        $random                     = wp_rand(1, 13);
        $bubble_type                = null;
        $button_label               = isset($options['bubble-text']) ? $options['bubble-text'] : '';
        $disable_button             = isset($options['disable-button-icon']) ? $options['disable-button-icon'] : '';
        $bubble_button_tooltip      = isset($options['bubble_button_tooltip']) ? $options['bubble_button_tooltip'] : '';
        $bubble_button_tooltip_text = isset($options['bubble_button_tooltip_text']) ? $options['bubble_button_tooltip_text'] : '';
        $bubble_circle_animation    = isset($options['circle-animation']) ? $options['circle-animation'] : '1';

        $bubble_circle_button_icon       = isset($options['circle-button-icon']) ? $options['circle-button-icon'] : 'icofont-brand-whatsapp';
        $bubble_circle_button_close_icon = isset($options['circle-button-close']) ? $options['circle-button-close'] : 'icofont-close';

        $bubble_circle_button_icon_1       = isset($options['circle-button-icon-1']) ? $options['circle-button-icon-1'] : 'icofont-brand-whatsapp';

        $bubble_circle_button_close_icon_1 = isset($options['circle-button-close-1']) ? $options['circle-button-close-1'] : 'icofont-close';
        $whatsapp_message_template = isset($options['whatsapp_message_template']) ? $options['whatsapp_message_template'] : '';
        $whatsapp_number = isset($options['opt-number']) ? $options['opt-number'] : '';
        $opt_button_style = isset($options['opt-button-style']) ? $options['opt-button-style'] : '1';
        $opt_chat_type = isset($options['opt-chat-type']) ? $options['opt-chat-type'] : 'single';
        $bubble_position = isset($options['bubble-position']) ? $options['bubble-position'] : 'right_bottom';
        $bubble_visibility = isset($options['bubble-visibility']) ? $options['bubble-visibility'] : 'everywhere';

        $icon_section = '';
        if ($disable_button && $opt_button_style !== '1') {
            $icon_section = '<div class="bubble__icon bubble-animation' . esc_attr($bubble_circle_animation) . '">
                <span class="bubble__icon--open"><i class="' . esc_html($bubble_circle_button_icon) . '"></i></span>
                <span class="bubble__icon--close"><i class="' . esc_html($bubble_circle_button_close_icon) . '"></i></span>
                
            </div>';
            if ($bubble_button_tooltip && $bubble_button_tooltip_text) {
                $icon_section .= '<span class="tooltip_text">' . wp_kses_post($bubble_button_tooltip_text) . '</span>';
            }
        } else {

            $icon_section = '<div class="bubble__icon bubble-animation' . esc_attr($bubble_circle_animation) . '">
            <span class="bubble__icon--open icon_1"><i class="' . esc_html($bubble_circle_button_icon_1) . '"></i></span>
            <span class="bubble__icon--close icon_1"><i class="' . esc_html($bubble_circle_button_close_icon_1) . '"></i></span>
        </div>';
            if ($bubble_button_tooltip && $bubble_button_tooltip_text) {
                $icon_section .= '<span class="tooltip_text">' . wp_kses_post($bubble_button_tooltip_text) . '</span>';
            }
        }

        if ($opt_button_style === '1') {
            $bubble_type = '<button class="wHelp-bubble circle-bubble circle-animation-' . esc_attr($bubble_circle_animation) . ' ">
              ' . $icon_section . '
            </button>';
        } elseif ($opt_button_style === '2') {
            $bubble_type = '<button class="wHelp-bubble bubble wHelp-btn-bg">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '3') {
            $bubble_type = '<button class="wHelp-bubble bubble">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '4') {
            $bubble_type = '<button class="wHelp-bubble bubble wHelp-btn-rounded wHelp-btn-bg">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '5') {
            $bubble_type = '<button class="wHelp-bubble bubble wHelp-btn-rounded">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '6') {
            $bubble_type = '<button class="wHelp-bubble bubble wHelp-btn-bg bubble-transparent btn-with-padding">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '7') {
            $bubble_type = '<button class="wHelp-bubble bubble bubble-transparent btn-with-padding">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '8') {
            $bubble_type = '<button class="wHelp-bubble bubble wHelp-btn-bg wHelp-btn-rounded bubble-transparent btn-with-padding">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        } elseif ($opt_button_style === '9') {
            $bubble_type = '<button class="wHelp-bubble bubble wHelp-btn-rounded bubble-transparent btn-with-padding">
              ' . $icon_section . '
              ' . esc_attr($button_label) . '</button>';
        }
        $bubble_style = isset($options['bubble-style']) ? $options['bubble-style'] : '';
        $select_animation = isset($options['select-animation']) ? $options['select-animation'] : '';
        $opt_layout_type = isset($options['opt-layout-type']) ? $options['opt-layout-type'] : '';
        $gdpr_enable = isset($options['gdpr-enable']) ? $options['gdpr-enable'] : '';
        $chat_button_text = isset($options['chat-button-text']) ? $options['chat-button-text'] : '';
        $before_chat_icon = isset($options['before-chat-icon']) ? $options['before-chat-icon'] : '';

        $timezone = isset($options['select-timezone']) ? $options['select-timezone'] : '';
        $header_content_position = isset($options['header-content-position']) ? $options['header-content-position'] : '';
        $agent_photo = !empty($options['agent-photo']['url']) ? $options['agent-photo']['url'] : '';
        $agent_name = isset($options['agent-name']) ? $options['agent-name'] : '';
        $agent_subtitle = isset($options['agent-subtitle']) ? $options['agent-subtitle'] : '';

        $agent_name_placeholder = isset($options['agent-name-placeholder-text']) ? $options['agent-name-placeholder-text'] : '';
        $agent_message_placeholder = isset($options['agent-message-placeholder-text']) ? $options['agent-message-placeholder-text'] : '';

        $gdpr_complience_content = isset($options['gdpr-compliance-content']) ? $options['gdpr-compliance-content'] : '';

        $agent_message = isset($options['agent-message']) ? $options['agent-message'] : '';

?>
        <?php if ('single' === $opt_chat_type) : ?>
            <div class="wHelp <?php echo esc_attr($bubble_position); ?> wHelp-<?php if (isset($bubble_visibility)) {echo esc_attr($bubble_visibility); } ?>-only 
			<?php
            if ('dark' === $bubble_style) :
            ?> dark-mode <?php elseif ('night' === $bubble_style) : ?> night-mode<?php endif; ?>">
                <?php echo wp_kses_post($bubble_type); ?>
                <div class="wHelp__popup animation
				<?php
                if ($select_animation === 'random') :
                    echo esc_attr($random);
                else :
                    echo esc_attr($select_animation); ?><?php endif; ?> chat-availability" data-timezone="<?php echo esc_attr($timezone); ?>" data-availability='{ "sunday":"<?php echo esc_attr($sunday); ?>", "monday":"<?php echo esc_attr($monday); ?>", "tuesday":"<?php echo esc_attr($tuesday); ?>", "wednesday":"<?php echo esc_attr($wednesday); ?>", "thursday":"<?php echo esc_attr($thursday); ?>", "friday":"<?php echo esc_attr($friday); ?>", "saturday":"<?php echo esc_attr($saturday); ?>" }'>
                    <div class="wHelp__popup--header 
					<?php
                    if ('center' === $header_content_position) {
                    ?>
						header-center<?php } ?>">
                        <?php if($agent_photo) : ?>
                        <div class="image">
                            <img src="<?php echo esc_url($agent_photo); ?>" />
                        </div>
                        <?php endif; ?>
                        <?php if($agent_name || $agent_subtitle) : ?>
                        <div class="info">
                            <?php if($agent_name) : ?> 
                            <h4 class="info__name"><?php echo esc_html($agent_name); ?></h4>
                            <?php endif; ?>
                            <?php if($agent_subtitle) : ?>
                            <p class="info__title"><?php echo esc_html($agent_subtitle); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <form class="wHelp__popup--content" data-template="<?php echo esc_attr($whatsapp_message_template); ?>" data-number="<?php echo esc_attr($whatsapp_number); ?>">

                        <?php if ('form' === $opt_layout_type) :
                            if ($gdpr_enable) : ?>
                                <div class="wHelp--checkbox">
                                    <input id="gdpr-check" name="gdpr-check" type="checkbox" class="wHelp__checkbox" /> <label for="gdpr-check"><?php echo wp_kses_post($gdpr_complience_content); ?></label>
                                </div>
                            <?php endif; ?>
                            <div class="user-text">
                                <input id="wHelp-name" type="text" placeholder="<?php echo esc_attr($agent_name_placeholder); ?>" required>
                                <textarea id="wHelp-message" rows="5" type="text" placeholder="<?php echo esc_attr($agent_message_placeholder); ?>" required></textarea>
                            </div>
                            <?php else :
                            if ($gdpr_enable) : ?>
                                <div class="wHelp--checkbox">
                                    <input id="gdpr-check" name="gdpr-check" type="checkbox" class="wHelp__checkbox" />
                                    <label for="gdpr-check"><?php echo wp_kses_post($gdpr_complience_content); ?></label>
                                </div>
                            <?php endif; ?>
                            <div class="current-time"></div>
                            <div class="sms">
                                <?php if($agent_photo) : ?>
                                    <div class="sms__user">
                                        <img src="<?php echo esc_url($agent_photo); ?>" />
                                    </div>
                                <?php endif;?>
                                <div class="sms__text">
                                    <p>
                                        <?php echo esc_html($agent_message); ?>
                                    </p>
                                </div>
                            </div>
                            <?php endif;
                        if ('form' === $opt_layout_type) :
                            if ($before_chat_icon || $chat_button_text) :
                            ?>
                                <button class="wHelp__send-message
							<?php
                                if ($gdpr_enable) :
                            ?>
								condition__checked<?php endif; ?>" target="_blank" type="submit">
                                    <i class="<?php echo esc_html($before_chat_icon); ?>"></i><?php echo esc_html($chat_button_text); ?>
                                </button>
                            <?php endif;
                        else :
                            if ($before_chat_icon || $chat_button_text) :
                            ?>
                                <button class="wHelp__send-message
							<?php
                                if ($gdpr_enable) :
                            ?>
								condition__checked<?php endif; ?>" target="_blank">
                                    <i class="<?php echo esc_html($before_chat_icon); ?>"></i><?php echo esc_html($chat_button_text); ?>
                                    <a href="https://wa.me/<?php echo esc_attr($whatsapp_number); ?>" target="_blank"></a>
                                </button>
                        <?php endif;
                        endif; ?>
                        <span style="display:block!important" class="wcp-branding"><?php echo esc_html__('Powered by', 'chat-help'); ?> <a target="_blank" href="https://wordpress.org/plugins/chat-help"><strong><?php echo esc_html__('WpChatPlugins', 'chat-help'); ?></strong></a></span>
                    </form>
                </div>
            </div>
<?php
        endif;
    }
}