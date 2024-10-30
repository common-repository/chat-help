<?php
/**
 *
 * Field: repeater
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
use ThemeAtelier\ChatWhatsapp\Admin\Framework\Classes\CHAT_WHATSAPP;

if ( ! class_exists( 'CHAT_WHATSAPP_Field_repeater' ) ) {
  class CHAT_WHATSAPP_Field_repeater extends CHAT_WHATSAPP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'max'          => 0,
        'min'          => 0,
        'button_title' => '<i class="icofont-plus"></i>',
      ) );

      if ( preg_match( '/'. preg_quote( '['. $this->field['id'] .']' ) .'/', $this->unique ) ) {

        echo '<div class="chat-whatsapp-notice chat-whatsapp-notice-danger">'. esc_html__( 'Error: Field ID conflict.', 'chat-help' ) .'</div>';

      } else {

        echo wp_kses_post($this->field_before());

        echo '<div class="chat-whatsapp-repeater-item chat-whatsapp-repeater-hidden" data-depend-id="'. esc_attr( $this->field['id'] ) .'">';
        echo '<div class="chat-whatsapp-repeater-content">';
        foreach ( $this->field['fields'] as $field ) {

          $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';
          $field_unique  = ( ! empty( $this->unique ) ) ? $this->unique .'['. $this->field['id'] .'][0]' : $this->field['id'] .'[0]';

          CHAT_WHATSAPP::field( $field, $field_default, '___'. $field_unique, 'field/repeater' );

        }
        echo '</div>';
        echo '<div class="chat-whatsapp-repeater-helper">';
        echo '<div class="chat-whatsapp-repeater-helper-inner">';
        echo '<i class="chat-whatsapp-repeater-sort icofont-drag"></i>';
        echo '<i class="chat-whatsapp-repeater-clone icofont-copy-invert"></i>';
        echo '<i class="chat-whatsapp-repeater-remove chat-whatsapp-confirm icofont-close" data-confirm="'. esc_html__( 'Are you sure to delete this item?', 'chat-help' ) .'"></i>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="chat-whatsapp-repeater-wrapper chat-whatsapp-data-wrapper" data-field-id="['. esc_attr( $this->field['id'] ) .']" data-max="'. esc_attr( $args['max'] ) .'" data-min="'. esc_attr( $args['min'] ) .'">';

        if ( ! empty( $this->value ) && is_array( $this->value ) ) {

          $num = 0;

          foreach ( $this->value as $key => $value ) {

            echo '<div class="chat-whatsapp-repeater-item">';
            echo '<div class="chat-whatsapp-repeater-content">';
            foreach ( $this->field['fields'] as $field ) {

              $field_unique = ( ! empty( $this->unique ) ) ? $this->unique .'['. $this->field['id'] .']['. $num .']' : $this->field['id'] .'['. $num .']';
              $field_value  = ( isset( $field['id'] ) && isset( $this->value[$key][$field['id']] ) ) ? $this->value[$key][$field['id']] : '';

              CHAT_WHATSAPP::field( $field, $field_value, $field_unique, 'field/repeater' );

            }
            echo '</div>';
            echo '<div class="chat-whatsapp-repeater-helper">';
            echo '<div class="chat-whatsapp-repeater-helper-inner">';
            echo '<i class="chat-whatsapp-repeater-sort icofont-drag"></i>';
            echo '<i class="chat-whatsapp-repeater-clone icofont-copy-invert"></i>';
            echo '<i class="chat-whatsapp-repeater-remove chat-whatsapp-confirm icofont-close" data-confirm="'. esc_html__( 'Are you sure to delete this item?', 'chat-help' ) .'"></i>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $num++;

          }

        }

        echo '</div>';

        echo '<div class="chat-whatsapp-repeater-alert chat-whatsapp-repeater-max">'. esc_html__( 'You cannot add more.', 'chat-help' ) .'</div>';
        echo '<div class="chat-whatsapp-repeater-alert chat-whatsapp-repeater-min">'. esc_html__( 'You cannot remove more.', 'chat-help' ) .'</div>';
        echo '<a href="#" class="button button-primary chat-whatsapp-repeater-add">'. esc_html($args['button_title']) .'</a>';

        echo wp_kses_post($this->field_after());

      }

    }

    public function enqueue() {

      if ( ! wp_script_is( 'jquery-ui-sortable' ) ) {
        wp_enqueue_script( 'jquery-ui-sortable' );
      }

    }

  }
}
