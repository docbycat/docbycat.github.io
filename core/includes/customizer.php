<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'creative_portfolio_lite_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'creative-portfolio-lite' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'creative_portfolio_lite_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'creative-portfolio-lite' ),
	) );

	// POST SECTION

	Kirki::add_section( 'creative_portfolio_lite_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_post_heading',
		'section'     => 'creative_portfolio_lite_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'creative_portfolio_lite_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'creative_portfolio_lite_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_phone_number_heading',
		'section'     => 'creative_portfolio_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'creative_portfolio_lite_header_phone_number',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'creative_portfolio_lite_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_email_address_heading',
		'section'     => 'creative_portfolio_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Email Address', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'creative_portfolio_lite_header_email_address',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_hire_us',
		'section'     => 'creative_portfolio_lite_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hire Us Button', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_header_hire_us_txt',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'       => esc_html__( 'Button Link', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_header_hire_us_lnk',
		'section'  => 'creative_portfolio_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] ); 

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_socail_link',
		'section'     => 'creative_portfolio_lite_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'creative_portfolio_lite_section_header',
		'priority'    => 11,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'creative-portfolio-lite' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'creative-portfolio-lite' ),
		'settings'     => 'creative_portfolio_lite_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'creative-portfolio-lite' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'creative-portfolio-lite' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'creative-portfolio-lite' ),
				'description' => esc_html__( 'Add the social icon url here.', 'creative-portfolio-lite' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'creative_portfolio_lite_blog_slide_section', array(
        'title'          => esc_html__( 'Slider Settings', 'creative-portfolio-lite' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'creative-portfolio-lite' ),
        'panel'          => 'creative_portfolio_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_heading',
		'section'     => 'creative_portfolio_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_slider_heading',
		'section'     => 'creative_portfolio_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'creative_portfolio_lite_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'creative_portfolio_lite_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'creative-portfolio-lite' ),
		'priority'    => 10,
		'choices'     => creative_portfolio_lite_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => esc_html__( 'Extra Text', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_slider_extra_text',
		'section'  => 'creative_portfolio_lite_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	//PROJECTS SECTION

	Kirki::add_section( 'creative_portfolio_lite_project_section', array(
	    'title'          => esc_html__( 'Our Project Settings', 'creative-portfolio-lite' ),
	    'description'    => esc_html__( 'Here you can add different type of project.', 'creative-portfolio-lite' ),
	    'panel'          => 'creative_portfolio_lite_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_enable_heading',
		'section'     => 'creative_portfolio_lite_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Project',  'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_projects_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_project_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable',  'creative-portfolio-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_projects_text_heading',
		'section'     => 'creative_portfolio_lite_project_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Project', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_projects_heading_text',
		'section'  => 'creative_portfolio_lite_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Heading', 'creative-portfolio-lite' ),
		'settings' => 'creative_portfolio_lite_projects_heading',
		'section'  => 'creative_portfolio_lite_project_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'creative_portfolio_lite_projects_number',
		'label'       => esc_html__( 'Number of Tabs to show', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_project_section',
		'default'     => '',
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	$featured_post = get_theme_mod('creative_portfolio_lite_projects_number','');
    	for ( $j = 1; $j <= $featured_post; $j++ ) :

    	Kirki::add_field( 'theme_config_id', [
	        'type'        => 'text',
	        'settings'    => 'creative_portfolio_lite_projects_text' .$j,
	        'label'       => esc_html__( 'Tab Text ', 'creative-portfolio-lite' ).$j,
	        'section'     => 'creative_portfolio_lite_project_section',
	        'default'     => '',
	    ] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'select',
			'settings'    => 'creative_portfolio_lite_projects_category'.$j,
			'label'       => esc_html__( 'Select the category to show project ', 'creative-portfolio-lite' ).$j,
			'section'     => 'creative_portfolio_lite_project_section',
			'default'     => '',
			'placeholder' => esc_html__( 'Select an category...', 'creative-portfolio-lite' ),
			'priority'    => 10,
			'choices'     => creative_portfolio_lite_get_categories_select(),
		] );

	endfor;
    
	// FOOTER SECTION

	Kirki::add_section( 'creative_portfolio_lite_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'creative-portfolio-lite' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'creative-portfolio-lite' ),
        'panel'          => 'creative_portfolio_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_footer_text_heading',
		'section'     => 'creative_portfolio_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'creative_portfolio_lite_footer_text',
		'section'  => 'creative_portfolio_lite_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'creative_portfolio_lite_footer_enable_heading',
		'section'     => 'creative_portfolio_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'creative-portfolio-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'creative_portfolio_lite_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'creative-portfolio-lite' ),
		'section'     => 'creative_portfolio_lite_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'creative-portfolio-lite' ),
			'off' => esc_html__( 'Disable', 'creative-portfolio-lite' ),
		],
	] );
}