<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: textarea
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

if ( ! class_exists( 'CHAT_WHATSAPP_Field_textarea' ) ) {
  class CHAT_WHATSAPP_Field_textarea extends CHAT_WHATSAPP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      echo wp_kses_post($this->field_before());
      echo $this->shortcoder();
      echo '<textarea name="'. esc_attr( $this->field_name() ) .'"'. $this->field_attributes() .'>'. $this->value .'</textarea>';
      echo wp_kses_post($this->field_after());

    }

    public function shortcoder() {

      if ( ! empty( $this->field['shortcoder'] ) ) {

        $shortcodes = ( is_array( $this->field['shortcoder'] ) ) ? $this->field['shortcoder'] : array_filter( (array) $this->field['shortcoder'] );
        $instances  = ( ! empty( CHAT_WHATSAPP::$shortcode_instances ) ) ? CHAT_WHATSAPP::$shortcode_instances : array();

        if ( ! empty( $shortcodes ) && ! empty( $instances ) ) {

          foreach ( $shortcodes as $shortcode ) {

            foreach ( $instances as $instance ) {

              if ( $instance['modal_id'] === $shortcode ) {

                $id    = $instance['modal_id'];
                $title = $instance['button_title'];

                echo '<a href="#" class="button button-primary chat-whatsapp-shortcode-button" data-modal-id="'. esc_attr( $id ) .'">'. esc_html( $title ) .'</a>';

              }

            }

          }

        }

      }

    }
  }
}
