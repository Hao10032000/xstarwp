<?php 

//Header Style
$wp_customize->add_setting(
    'style_header',
    array(
        'default'           => themesflat_customize_default('style_header'),
        'sanitize_callback' => 'esc_attr',
    )
);
$wp_customize->add_control( new themesflat_RadioImages($wp_customize,
    'style_header',
    array (
        'type'      => 'radio-images',           
        'section'   => 'section_options',
        'priority'  => 1,
        'label'         => esc_html__('Header Style', 'xstar'),
        'choices'   => array (
            'header-default' => array (
                'tooltip'   => esc_html__( 'Header Default','xstar' ),
                'src'       => THEMESFLAT_LINK . 'images/header-default.png'
            ),
            'header-02' => array (
                'tooltip'   => esc_html__( 'Header 02','xstar' ),
                'src'       => THEMESFLAT_LINK . 'images/header-02.jpg'
            ),
            'header-absolute' => array (
                'tooltip'   => esc_html__( 'Header Style Absolute','xstar' ),
                'src'       => THEMESFLAT_LINK . 'images/header-absolute.jpg'
            ),
        ),
    ))
); 

// Enable Header Absolute
$wp_customize->add_setting(
  'header_absolute',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_absolute'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_absolute',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Absolute ( OFF | ON )', 'xstar'),
        'section' => 'section_options',
        'priority' => 2,
    ))
);

// Enable Header Sticky
$wp_customize->add_setting(
  'header_sticky',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_sticky'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_sticky',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Header Sticky ( OFF | ON )', 'xstar'),
        'section' => 'section_options',
        'priority' => 3,
    ))
);    

// Show search 
$wp_customize->add_setting(
  'header_search_box',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('header_search_box'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'header_search_box',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Search Box ( OFF | ON )', 'xstar'),
        'section' => 'section_options',
        'priority' => 4,
    ))
);

// Show Infor Phone 
$wp_customize->add_setting(
    'header_infor_phone',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('header_infor_phone'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'header_infor_phone',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Show Phone Call ( OFF | ON )', 'xstar'),
          'section' => 'section_options',
          'priority' => 4,
      ))
  );

  // Show search 
$wp_customize->add_setting(
    'header_sidebar_toggler',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('header_sidebar_toggler'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'header_sidebar_toggler',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Sidebar Toggler ( OFF | ON )', 'xstar'),
          'section' => 'section_options',
          'priority' => 5,
      ))
  );

$wp_customize->add_control( new themesflat_Info( $wp_customize, 'header_button_label', array(
    'label'    => esc_html__( 'Button', 'xstar' ),
    'section'  => 'section_options',
    'settings' => 'themesflat_options[info]',
    'priority' => 12,
    'active_callback' => function () use ( $wp_customize ) {
        return 1 === $wp_customize->get_setting( 'header_button' )->value();
    }, 
) )
);

$wp_customize->add_control( new themesflat_Info( $wp_customize, 'header_button_label', array(
    'label'    => esc_html__( 'Button', 'xstar' ),
    'section'  => 'section_options',
    'settings' => 'themesflat_options[info]',
    'priority' => 17,
    'active_callback' => function () use ( $wp_customize ) {
        return 1 === $wp_customize->get_setting( 'header_button' )->value();
    }, 
) )
);

$wp_customize->add_setting(
    'header_button',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('header_button'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'header_button',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Header Button ( OFF | ON )', 'xstar'),
          'section' => 'section_options',
          'priority' => 7,
      ))
  );


// Button Text
$wp_customize->add_setting(
    'header_button_text',
    array(
        'default' => themesflat_customize_default('header_button_text'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'header_button_text',
    array(
        'label' => esc_html__( 'Button Text', 'xstar' ),
        'section' => 'section_options',
        'type' => 'text',
        'priority' => 18,
        'active_callback' => function () use ( $wp_customize ) {
            return 1 === $wp_customize->get_setting( 'header_button' )->value();
        }, 
    )
);

//add setting
$wp_customize->add_setting( 'header_button_url', array(
    'default' => '',
));

//add control
$wp_customize->add_control( 'header_button_url', array(
    'label' => 'Select page for button link to',
    'priority' => 19,
    'active_callback' => function () use ( $wp_customize ) {
        return 1 === $wp_customize->get_setting( 'header_button' )->value();
    }, 
    'type'  => 'dropdown-pages',
    'section' => 'section_options',
    'settings' => 'header_button_url'
));
