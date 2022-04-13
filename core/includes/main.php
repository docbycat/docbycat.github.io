<?php

add_action( 'admin_menu', 'creative_portfolio_lite_getting_started' );
function creative_portfolio_lite_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'creative-portfolio-lite'), esc_html__('Get Started', 'creative-portfolio-lite'), 'edit_theme_options', 'creative-portfolio-lite-guide-page', 'creative_portfolio_lite_test_guide');   
}

function creative_portfolio_lite_admin_enqueue_scripts() {
	wp_enqueue_style( 'creative-portfolio-lite-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'creative_portfolio_lite_admin_enqueue_scripts' );

if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_DOCS_FREE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_DOCS_FREE',__('https://www.misbahwp.com/docs/creative-portfolio-free-docs/','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_DOCS_PRO' ) ) {
define('CREATIVE_PORTFOLIO_LITE_DOCS_PRO',__('https://www.misbahwp.com/docs/creative-portfolio-pro-docs','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_BUY_NOW' ) ) {
define('CREATIVE_PORTFOLIO_LITE_BUY_NOW',__('https://www.misbahwp.com/themes/creative-portfolio-wordpress-theme/','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_SUPPORT_FREE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_SUPPORT_FREE',__('https://wordpress.org/support/theme/creative-portfolio-lite','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_REVIEW_FREE' ) ) {
define('CREATIVE_PORTFOLIO_LITE_REVIEW_FREE',__('https://wordpress.org/support/theme/creative-portfolio-lite/reviews/#new-post','creative-portfolio-lite'));
}
if ( ! defined( 'CREATIVE_PORTFOLIO_LITE_DEMO_PRO' ) ) {
define('CREATIVE_PORTFOLIO_LITE_DEMO_PRO',__('https://www.misbahwp.com/demo/creative-portfolio/','creative-portfolio-lite'));
}

function creative_portfolio_lite_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'creative-portfolio-lite' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'creative-portfolio-lite' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'creative-portfolio-lite' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'creative-portfolio-lite' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','creative-portfolio-lite'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'creative-portfolio-lite'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','creative-portfolio-lite'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','creative-portfolio-lite'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','creative-portfolio-lite'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','creative-portfolio-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'creative-portfolio-lite' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','creative-portfolio-lite'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'creative-portfolio-lite' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'creative-portfolio-lite' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( CREATIVE_PORTFOLIO_LITE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'creative-portfolio-lite' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
