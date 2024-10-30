<?php

namespace ThemeAtelier\ChatWhatsapp\Frontend;

class CustomButtonsTemplates {


	public static $get_data;

	function __construct( array $args ) {
		self::$get_data = $args;
	}
	// Template Style 1
	public function ctw_button_s1() {
		$iterate_data = self::$get_data;
		$atts         = $iterate_data;

		// button settings
		$number = $atts['number'];

		// visibility
		if ( $atts['visibility'] === 'only-desktop' ) {
			$button_visibility = 'wHelp-desktop-only';
		} elseif ( $atts['visibility'] === 'only-tablet' ) {
			$button_visibility = 'wHelp-tablet-only';
		} elseif ( $atts['visibility'] === 'only-tablet-mobile' ) {
			$button_visibility = 'wHelp-mobile-tablet-only';
		} else {
			$button_visibility = '';
		}

		$button_rounded    = $atts['rounded'];
		$button_sizes      = $atts['sizes'];
		$agent_photo       = $atts['photo'];
		$agent_name        = $atts['name'];
		$agent_designation = $atts['designation'];
		$label_text        = $atts['label'];
		$onlineText        = $atts['online'];
		$offline_text       = $atts['offline'];
		// availablity
		$avl_timezone = $atts['timezone'];
		$avl_sunday    = $atts['sunday'];
		$avl_monday    = $atts['monday'];
		$avl_tuesday   = $atts['tuesday'];
		$avl_wednesday = $atts['wednesday'];
		$avl_thursday  = $atts['thursday'];
		$avl_friday    = $atts['friday'];
		$avl_saturday  = $atts['saturday'];
		?>
		<div class="button-wrapper">
			<button
				<?php
				if ( $avl_timezone ) {
					?>
				data-timezone="<?php esc_attr( $avl_timezone ); ?>" <?php } ?> class="wHelpButtons wHelp-button-4 wHelp-btn-bg <?php echo esc_attr( $button_visibility ); ?> <?php echo esc_attr( $button_rounded ); ?> avatar-active <?php echo esc_attr( $button_sizes ); ?>" data-btnavailablety='{ "sunday":"<?php echo esc_attr( $avl_sunday ); ?>", "monday":"<?php echo esc_attr( $avl_monday ); ?>", "tuesday":"<?php echo esc_attr( $avl_tuesday ); ?>", "wednesday":"<?php echo esc_attr( $avl_wednesday ); ?>", "thursday":"<?php echo esc_attr( $avl_thursday ); ?>", "friday":"<?php echo esc_attr( $avl_friday ); ?>", "saturday":"<?php echo esc_attr( $avl_saturday ); ?>" }'>
				<?php if ( $agent_photo ) { ?>
					<img src="<?php echo esc_attr( $agent_photo ); ?>" />
				<?php } ?>

				<div class="info-wrapper">
					<?php if ( $agent_name || $agent_designation ) { ?>
						<p class="info">
							<?php
							if ( $agent_name ) {
								?>
								<?php echo esc_html( $agent_name ); ?><?php } ?> <?php
								if ( $agent_designation ) {
									?>
									/ <?php echo esc_html( $agent_designation ); ?><?php } ?></p>
					<?php } ?>
					<?php if ( $label_text ) { ?>
						<p class="title"><?php echo esc_html( $label_text ); ?></p>
					<?php } ?>
					<?php if ( $onlineText ) { ?>
						<p class="online"><?php echo esc_html( $onlineText ); ?></p>
					<?php } ?>
					<?php if ( $offline_text ) { ?>
						<p class="offline"><?php echo esc_html( $offline_text ); ?></p>
					<?php } ?>
				</div>
				<a href="https://wa.me/<?php echo esc_attr( $number ); ?>" target="_blank"></a>
			</button>
		</div>
		<?php
	}

	// // Template style 2
	public function ctw_button_s2() {
		$iterate_data = self::$get_data;
		$atts         = $iterate_data;
		$number       = esc_attr( $atts['number'] );
		// visibility
		if ( $atts['visibility'] === 'only-desktop' ) {
			$button_visibility = 'wHelp-desktop-only';
		} elseif ( $atts['visibility'] === 'only-tablet' ) {
			$button_visibility = 'wHelp-tablet-only';
		} elseif ( $atts['visibility'] === 'only-tablet-mobile' ) {
			$button_visibility = 'wHelp-mobile-tablet-only';
		} else {
			echo '';
		}
		$button_sizes   = $atts['sizes'];
		$button_rounded = $atts['rounded'];
		$label_text     = $atts['label'];
		?>

		<div class="button-wrapper">
			<a href="https://wa.me/<?php echo esc_attr( $number ); ?>" class="wHelp-button-2 wHelp-btn-bg <?php echo esc_attr( $button_sizes ); ?> <?php echo esc_attr( $button_visibility ); ?> <?php echo esc_attr( $button_rounded ); ?>">
				<i class="icofont-phone"></i><?php echo esc_attr( $label_text ); ?>
			</a>
		</div>
		<?php
	}
} // End Class
