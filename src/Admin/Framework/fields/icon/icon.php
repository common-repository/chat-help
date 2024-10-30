<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: icon
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CHAT_WHATSAPP_Field_icon' ) ) {
  class CHAT_WHATSAPP_Field_icon extends CHAT_WHATSAPP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $args = wp_parse_args( $this->field, array(
        'button_title' => esc_html__( 'Add Icon', 'chat-help' ),
        'remove_title' => esc_html__( 'Remove Icon', 'chat-help' ),
      ) );

      echo wp_kses_post($this->field_before());

      $nonce  = wp_create_nonce( 'CHAT_WHATSAPP_icon_nonce' );
      $hidden = ( empty( $this->value ) ) ? ' hidden' : '';

      echo '<div class="chat-whatsapp-icon-select">';
      echo '<span class="chat-whatsapp-icon-preview'. esc_attr( $hidden ) .'"><i class="'. esc_attr( $this->value ) .'"></i></span>';
      echo '<a href="#" class="button button-primary chat-whatsapp-icon-add" data-nonce="'. esc_attr( $nonce ) .'">'. esc_html($args['button_title']) .'</a>';
      echo '<a href="#" class="button chat-whatsapp-warning-primary chat-whatsapp-icon-remove'. esc_attr( $hidden ) .'">'. wp_kses_post($args['remove_title']) .'</a>';
      echo '<input type="hidden" name="'. esc_attr( $this->field_name() ) .'" value="'. esc_attr( $this->value ) .'" class="chat-whatsapp-icon-value"'. $this->field_attributes() .' />';
      echo '</div>';

      echo wp_kses_post($this->field_after());

    }

    public function enqueue() {
      add_action( 'admin_footer', array( 'CHAT_WHATSAPP_Field_icon', 'add_footer_modal_icon' ) );
      add_action( 'customize_controls_print_footer_scripts', array( 'CHAT_WHATSAPP_Field_icon', 'add_footer_modal_icon' ) );
    }

    public static function add_footer_modal_icon() {
    ?>
      <div id="chat-whatsapp-modal-icon" class="chat-whatsapp-modal chat-whatsapp-modal-icon hidden">
        <div class="chat-whatsapp-modal-table">
          <div class="chat-whatsapp-modal-table-cell">
            <div class="chat-whatsapp-modal-overlay"></div>
            <div class="chat-whatsapp-modal-inner">
              <div class="chat-whatsapp-modal-title">
                <?php esc_html_e( 'Add Icon', 'chat-help' ); ?>
                <div class="chat-whatsapp-modal-close chat-whatsapp-icon-close"></div>
              </div>
              <div class="chat-whatsapp-modal-header">
                <input type="text" placeholder="<?php esc_html_e( 'Search...', 'chat-help' ); ?>" class="chat-whatsapp-icon-search" />
              </div>
              <div class="chat-whatsapp-modal-content">
                <div class="chat-whatsapp-modal-loading"><div class="chat-whatsapp-loading"></div></div>
                <div class="chat-whatsapp-modal-load"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }

  }
}
