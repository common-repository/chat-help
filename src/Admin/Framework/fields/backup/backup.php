<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Field: backup
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! class_exists( 'CHAT_WHATSAPP_Field_backup' ) ) {
  class CHAT_WHATSAPP_Field_backup extends CHAT_WHATSAPP_Fields {

    public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
      parent::__construct( $field, $value, $unique, $where, $parent );
    }

    public function render() {

      $unique = $this->unique;
      $nonce  = wp_create_nonce( 'CHAT_WHATSAPP_backup_nonce' );
      $export = add_query_arg( array( 'action' => 'chat-whatsapp-export', 'unique' => $unique, 'nonce' => $nonce ), admin_url( 'admin-ajax.php' ) );

      echo wp_kses_post($this->field_before());

      echo '<textarea name="CHAT_WHATSAPP_import_data" class="chat-whatsapp-import-data"></textarea>';
      echo '<button type="submit" class="button button-primary chat-whatsapp-confirm chat-whatsapp-import" data-unique="'. esc_attr( $unique ) .'" data-nonce="'. esc_attr( $nonce ) .'">'. esc_html__( 'Import', 'chat-help' ) .'</button>';
      echo '<hr />';
      echo '<textarea readonly="readonly" class="chat-whatsapp-export-data">'. esc_attr( wp_json_encode( get_option( $unique ) ) ) .'</textarea>';
      echo '<a href="'. esc_url( $export ) .'" class="button button-primary chat-whatsapp-export" target="_blank">'. esc_html__( 'Export & Download', 'chat-help' ) .'</a>';
      echo '<hr />';
      echo '<button type="submit" name="CHAT_WHATSAPP_transient[reset]" value="reset" class="button chat-whatsapp-warning-primary chat-whatsapp-confirm chat-whatsapp-reset" data-unique="'. esc_attr( $unique ) .'" data-nonce="'. esc_attr( $nonce ) .'">'. esc_html__( 'Reset', 'chat-help' ) .'</button>';

      echo wp_kses_post($this->field_after());

    }

  }
}
