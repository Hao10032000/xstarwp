<?php 

// Enable Smooth Scroll
$wp_customize->add_setting(
  'enable_smooth_scroll',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_smooth_scroll'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'enable_smooth_scroll',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Smooth Scroll ( OFF | ON )', 'xstar'),
        'section' => 'general_panel',
        'priority' => 1,
    ))
);

// Enable Smooth Scroll
$wp_customize->add_setting(
    'animation_cursor',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('animation_cursor'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'animation_cursor',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Animation Cursor ( OFF | ON )', 'xstar'),
          'section' => 'general_panel',
          'priority' => 1,
      ))
  );

// Enable Preload
$wp_customize->add_setting(
  'enable_preload',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_preload'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'enable_preload',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Preload ( OFF | ON )', 'xstar'),
        'section' => 'general_panel',
        'priority' => 2,
    ))
);

//Socials
$wp_customize->add_setting(
    'social_links',
    array(
      'sanitize_callback' => 'esc_attr',
      'default' => themesflat_customize_default('social_links'),     
    )   
  );
  $wp_customize->add_control( new themesflat_SocialIcons($wp_customize,
      'social_links',
      array(
          'type' => 'social-icons',
          'label' => esc_html__('Social Media', 'xstar'),
          'section' => 'general_panel',
          'priority' => 3,
      ))
  );

// Go To Button
$wp_customize->add_setting(
  'go_top',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('go_top'),     
    )   
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'go_top',
    array(
        'type' => 'checkbox',
        'label' => esc_html__('Go To Button ( OFF | ON )', 'xstar'),
        'section' => 'general_panel',
        'priority' => 4,
    ))
);


//less
$wp_customize->add_setting(
    'enable_less',
    array(
        'sanitize_callback' => 'themesflat_sanitize_checkbox',
        'default' => themesflat_customize_default('enable_less'),
    )
);

$wp_customize->add_control(new themesflat_Checkbox($wp_customize,
        'enable_less',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Enable Less', 'xstar'),
            'section' => 'general_panel',
            'priority' => 5,
        ))
);