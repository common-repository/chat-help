<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: submessage
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CHAT_WHATSAPP_Field_submessage' ) ) {
  class CHAT_WHATSAPP_Field_submessage extends CHAT_WHATSAPP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $style = ( ! empty( $this->field['style'] ) ) ? $this->field['style'] : 'normal';

      echo '<div class="chat-whatsapp-submessage chat-whatsapp-submessage-'. esc_attr( $style ) .'">'. wp_kses_post($this->field['content']) .'</div>';

    }

  }
}
