<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: section_tab
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

if ( ! class_exists( 'CHAT_WHATSAPP_Field_section_tab' ) ) {
  class CHAT_WHATSAPP_Field_section_tab extends CHAT_WHATSAPP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $unallows = array( 'section_tab' );

      echo wp_kses_post($this->field_before());

      echo '<div class="chat-whatsapp-section_tab-nav">';
      foreach ( $this->field['tabs'] as $key => $tab ) {
        $section_tab_icon   = ( ! empty( $tab['icon'] ) ) ? '<i class="chat-whatsapp--icon '. esc_attr( $tab['icon'] ) .'"></i>' : '';
        $section_tab_active = ( empty( $key ) ) ? 'chat-whatsapp-section_tab-active' : '';

        echo '<a href="#" class="'. esc_attr( $section_tab_active ) .'"">'. $section_tab_icon . esc_attr( $tab['title'] ) .'</a>';

      }
      echo '</div>';

      echo '<div class="chat-whatsapp-section_tab-contents">';
      foreach ( $this->field['tabs'] as $key => $tab ) {

        $section_tab_hidden = ( ! empty( $key ) ) ? ' hidden' : '';

        echo '<div class="chat-whatsapp-section_tab-content'. esc_attr( $section_tab_hidden ) .'">';

        foreach ( $tab['fields'] as $field ) {

          if ( in_array( $field['type'], $unallows ) ) { $field['_notice'] = true; }

          $field_id      = ( isset( $field['id'] ) ) ? $field['id'] : '';
          $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';
          $field_value   = ( isset( $this->value[$field_id] ) ) ? $this->value[$field_id] : $field_default;
          $unique_id     = ( ! empty( $this->unique ) ) ? $this->unique : '';

          CHAT_WHATSAPP::field( $field, $field_value, $unique_id, 'field/section_tab' );

        }

        echo '</div>';

      }
      echo '</div>';

      echo wp_kses_post($this->field_after());

    }

  }
}