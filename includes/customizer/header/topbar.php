<?php 

// Show Topbar
$wp_customize->add_setting(
    'show_topbar',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('show_topbar'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'show_topbar',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Show Topbar ( OFF | ON )', 'xstar'),
          'section' => 'section_topbar',
          'priority' => 1,
      ))
  );

// Enable Infor Address
$wp_customize->add_setting(
  'topbar_address',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('topbar_address'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'topbar_address',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Topbar Address ( OFF | ON )', 'xstar'),
        'section' => 'section_topbar',
        'priority' => 2,
        'active_callback' => function () use ( $wp_customize ) {
            return 1 === $wp_customize->get_setting( 'show_topbar' )->value();
        }, 
    ))
);

// Enable Infor Mail
$wp_customize->add_setting(
    'topbar_mail',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('topbar_mail'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'topbar_mail',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Topbar Mail ( OFF | ON )', 'xstar'),
          'section' => 'section_topbar',
          'priority' => 3,
          'active_callback' => function () use ( $wp_customize ) {
            return 1 === $wp_customize->get_setting( 'show_topbar' )->value();
        }, 
      ))
  );

  // Enable Infor Menu
$wp_customize->add_setting(
    'topbar_menu',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('topbar_menu'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'topbar_menu',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Topbar Menu ( OFF | ON )', 'xstar'),
          'section' => 'section_topbar',
          'priority' => 4,
          'active_callback' => function () use ( $wp_customize ) {
            return 1 === $wp_customize->get_setting( 'show_topbar' )->value();
        }, 
      ))
  );

    // Enable Infor Social
$wp_customize->add_setting(
    'topbar_social',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('topbar_social'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'topbar_social',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Topbar Social ( OFF | ON )', 'xstar'),
          'section' => 'section_topbar',
          'priority' => 5,
          'active_callback' => function () use ( $wp_customize ) {
            return 1 === $wp_customize->get_setting( 'show_topbar' )->value();
        }, 
      ))
  );