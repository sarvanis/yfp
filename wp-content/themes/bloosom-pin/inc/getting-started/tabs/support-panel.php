<?php
/**
 * Support Panel.
 *
 * @package Blossom Pin
 */

?>
<!-- Support panel -->
<div id="support-panel" class="panel-left">
	<div class="toggle-block active">
		<h3 class="toggle-title"><?php esc_html_e( 'What is the difference between Free and Pro?', 'blossom-pin' ); ?></h3>
		<div class="toggle-content">
			<p><?php esc_html_e( 'Both Free and Pro version of the themes are well-built. However, the Pro version comes with many additional features.', 'blossom-pin' );
			?></p>
			<p><?php esc_html_e( 'With the Pro version, you can change the look and feel of your website in seconds. You can change color, choose from background patterns, and change the fonts with ease. You will also get more homepage sections that you can reorder and hide as per your needs.', 'blossom-pin' );
			?></p>
			<p><?php printf( __( 'Overall, you will have more control over your website with the Pro version. You can find out more about the difference between Free and Pro versions %1$shere%2$s.', 'blossom-pin' ), '<a href="'. esc_url( 'https://blossomthemes.com/downloads/' . BLOSSOM_PIN_THEME_TEXTDOMAIN . '-free-wordpress-theme/' ) .'" target="_blank">', '</a>' );
			?></p>
		</div>
	</div>

	<div class="toggle-block">
		<h3 class="toggle-title"><?php esc_html_e( 'What are the advantages of upgrading to the Premium version?', 'blossom-pin' ); ?></h3>
		<div class="toggle-content">
			<p><?php esc_html_e( 'With Premium version, besides the extra features and frequent updates, you get premium support. If you run into any theme issues, you will get a lot quicker response compared to the free support.', 'blossom-pin' );
			?></p>
		</div>
	</div>	

	<div class="toggle-block">
		<h3 class="toggle-title"><?php esc_html_e( 'Upgrading to the Pro version- will I lose my changes?', 'blossom-pin' ); ?></h3>
		<div class="toggle-content">
			<p><?php esc_html_e( 'When you upgrade to the Pro theme, your posts, pages, media, categories, and other data will remain intact-- all your data is saved.', 'blossom-pin' );
			?></p>
			<p><?php esc_html_e( 'However, since the Pro version comes with added features and settings, you will need to set up the additional features in the customizer. This process is simple and only takes a few minutes.', 'blossom-pin' );
			?></p>
			<p><?php esc_html_e( 'The Pro version is built with lots of flexibility in mind for future upgrades. Therefore, it is slightly different than the free theme but extremely flexible and easy-to-use.', 'blossom-pin' );
			?></p>
		</div>
	</div>

	<div class="toggle-block">
		<h3 class="toggle-title"><?php esc_html_e( 'How do I change the copyright text?', 'blossom-pin' ); ?></h3>
		<div class="toggle-content">
			<p><?php printf( __( 'You can change the copyright text going to %1$sAppearance > Customize > Footer Settings%2$s. However, if you want to hide the author credit text, please %3$supgrade to the Pro version%4$s.', 'blossom-pin' ), '<b>', '</b>', '<a href="'. esc_url( 'https://blossomthemes.com/downloads/blossom-pin-pro/' ) .'" target="_blank">', '</a>' ); ?></p>
		</div>
	</div>

	<div class="toggle-block">
		<h3 class="toggle-title"><?php esc_html_e( 'Why is my theme not working well?', 'blossom-pin' ); ?></h3>
		<div class="toggle-content">
			<p><?php esc_html_e( 'If your customizer is not loading properly or you are having issues with the theme, it might be due to the plugin conflict.', 'blossom-pin' );
			?></p>
			<p><?php printf( __( 'To solve the issue, deactivate all the plugins first, except the ones recommended by the theme. Then, hard reload your website using %1$s"Ctrl+Shift+R"%2$s on Windows and %1$s"Cmd+Shift+R"%2$s on Mac. If the issues are fixed, start activating the plugins one by one, and reload and check your site each time. This will help you find out the plugin that is causing the problem.', 'blossom-pin' ), '<b>', '</b>' );
			?></p>
			<p><?php printf( __( 'If this didn\'t help, please %1$scontact us%2$s.', 'blossom-pin' ), '<a href="'. esc_url( 'https://blossomthemes.com/support-ticket/' ) .'" target="_blank">', '</a>' ); ?></p>
		</div>
	</div>

	<div class="toggle-block">
		<h3 class="toggle-title"><?php esc_html_e( 'How can I solve my issues quickly and get faster support?', 'blossom-pin' ); ?></h3>
		<div class="toggle-content">
			<p><?php esc_html_e( 'Before you send us a support ticket for any issues, please make sure you have updated the theme to the latest version. We might have fixed the bug in the theme update.', 'blossom-pin' );
			?></p>
			<p><?php esc_html_e( 'When you submit the support ticket, please try to provide as much details as possible so that we can solve your problem faster. We recommend you to send us a screenshot(s) with issues explained and your website\'s address (URL).', 'blossom-pin' );
			?></p>
			<p><?php esc_html_e( 'Also, you might experience a slower response time during the weekend, so please bear with us.', 'blossom-pin' );
			?></p>
		</div>
	</div>	
</div><!-- .panel-left support -->