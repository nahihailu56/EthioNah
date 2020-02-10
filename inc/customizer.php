<?php
function EthioNah_customize_register($wp_customize){
	// Banner Nah Section
	$wp_customize->add_section('nah', array(
		'title'	=> __('NahHeafing', 'EthioNah'),
		'description'	=> sprintf(__('Options for homepage nah', 'EthioNah')),
		'priority'	=> 130
	));

	// Heading Setting
	$wp_customize->add_setting('nah_heading', array(
		'default'		=> _x('Nah Heading', 'EthioNah'),
		'type'			=> 'theme_mod'
	));

	// Heading Control
	$wp_customize->add_control('nah_heading', array(
		'label'			=> __('Heading', 'EthioNah'),
		'section'		=> 'nah',
		'priority'		=> 20
    ));
    
    $wp_customize->add_setting('nah_text', array(
		'default'		=> _x('Welcome to the Wordpress EthioNah Theme. This theme uses the Bootstrap 3 framework ', 'EthioNah'),
		'type'			=> 'theme_mod'
	));

	// Text Control
	$wp_customize->add_control('nah_text', array(
		'label'			=> __('Text', 'EthioNah'),
		'section'		=> 'nah',
		'priority'		=> 20
	));

	// Button Text Setting
	$wp_customize->add_setting('nah_btn_text', array(
		'default'		=> _x('Visit Us', 'EthioNah'),
		'type'			=> 'theme_mod'
    ));
    // Background Image Setting
	$wp_customize->add_setting('nah_image', array(
		'default'		=> get_bloginfo('template_directory').'/image/banner.jpg',
		'type'			=> 'theme_mod'
	));

	// Background Image Control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nah_image', array(
			'label'	=> __('Background Image', 'EthioNah'),
			'section'	=> 'nah',
			'settings'	=> 'nah_image'
	)));

	// Button Text Control
	$wp_customize->add_control('nah_btn_text', array(
		'label'			=> __('Button Text', 'EthioNah'),
		'section'		=> 'nah',
		'priority'		=> 20
	));

	// Boxes Section
	$wp_customize->add_section('boxes', array(
		'title'          => __('Boxes', 'EthioNah'),
		'description'    => sprintf( __('Options for homepage boxes', 'EthioNah')
		),
		'priority'       => 130,
 	));

   // BOX 1

	// Box 1 Heading Setting
	$wp_customize->add_setting( 'box1_heading', array(
		'default'   => _x('Box 1 Heading', 'EthioNah'),
		'type'      => 'theme_mod'
	));

	// Box 1 Heading Control
	$wp_customize->add_control( 'box1_heading', array(
		'label'    => __('Box 1 Heading', 'EthioNah'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 1 Text Setting
 	$wp_customize->add_setting( 'box1_text', array(
 		'default'              => _x('Subheadings are used for divisions of the various chapters or titled sections of the manuscript. Subheadings must be used in the same order, levels cannot be skipped and must be used consistently throughout the manuscript.', 'EthioNah'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 1 Text Control
 	$wp_customize->add_control( 'box1_text', array(
 		'label'    => __('Box 1 Text', 'EthioNah'),
 		'section'  => 'boxes',
 		'priority' => 20,
	 ));
	 
	 //Box 2 Heading Setting
	 $wp_customize->add_setting( 'box2_heading', array(
		 'default'   => _x('Box 2 Heading', 'EthioNah'),
		 'type'      => 'theme_mod'
	 ));
 
	 // Box 1 Heading Control
	 $wp_customize->add_control( 'box2_heading', array(
		 'label'    => __('Box 2 Heading', 'EthioNah'),
		 'section'  => 'boxes',
		 'priority' => 20,
	 ));
 
	 // Box 1 Text Setting
	  $wp_customize->add_setting( 'box2_text', array(
		  'default'              => _x('Subheadings are used for divisions of the various chapters or titled sections of the manuscript. Subheadings must be used in the same order, levels cannot be skipped and must be used consistently throughout the manuscript.', 'EthioNah'),
		  'type'                 => 'theme_mod'
	  ));
 
	  // Box 1 Text Control
	  $wp_customize->add_control( 'box2_text', array(
		  'label'    => __('Box 1 Text', 'EthioNah'),
		  'section'  => 'boxes',
		  'priority' => 20,
	  ));
	// Button URL Setting
	$wp_customize->add_setting('nah_btn_url', array(
		'default'		=> _x('http://google.com', 'EthioNah'),
		'type'			=> 'theme_mod'
	));

	// Button URL Control
	$wp_customize->add_control('nah_btn_url', array(
		'label'			=> __('Button URL', 'EthioNah'),
		'section'		=> 'nah',
		'priority'		=> 20
	));

	

}

add_action('customize_register', 'EthioNah_customize_register');