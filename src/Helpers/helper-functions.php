<?php
function handle_form_submission() {

// Verify the nonce
if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'chat_whatsapp_nonce')) {
    wp_send_json_error('Invalid nonce');
    wp_die();
}

// Sanitize and retrieve POST data
$name = sanitize_text_field($_POST['name']);
$message = sanitize_textarea_field($_POST['message']);
$whatsapp_template = sanitize_text_field($_POST['template']);
$whatsapp_number  = sanitize_text_field($_POST['agent']);

// Prepare variables for the template
$date = date('F j, Y, H:i (h:i A) (\G\M\T O)');
$siteURL = get_site_url();
$variables = array('{name}', '{message}', '{date}',  '{siteURL}');
$values = array($name, $message, $date, $siteURL);
$text = trim(str_replace($variables, $values, $whatsapp_template));
$whatsAppURL = 'https://wa.me/' . esc_attr($whatsapp_number) . '?text=' . urlencode($text);

// Send the WhatsApp URL back to the client
wp_send_json_success(array('whatsAppURL' => $whatsAppURL));

wp_die(); // Terminate immediately and return a proper response
}

// Add action hook for AJAX
add_action('wp_ajax_handle_form_submission', 'handle_form_submission');
add_action('wp_ajax_nopriv_handle_form_submission', 'handle_form_submission');
