<?php 
// Show Bottom
$wp_customize->add_setting ( 
    'show_bottom',
    array (
        'sanitize_callback' => 'themesflat_sanitize_checkbox' ,
        'default' => themesflat_customize_default('show_bottom'),     
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'show_bottom',
    array(
        'type'      => 'checkbox',
        'label'     => esc_html__('Bottom ( OFF | ON )', 'xstar'),
        'section'   => 'section_bottom',
        'priority'  => 1
    ))
);

// Footer Copyright
$wp_customize->add_setting(
    'footer_copyright',
    array(
        'default' => themesflat_customize_default('footer_copyright'),
        'sanitize_callback' => 'themesflat_sanitize_text',
    )
);
// Footer Nav
$wp_customize->add_setting(
    'show_footer_navigation',
      array(
          'sanitize_callback' => 'themesflat_sanitize_checkbox',
          'default' => themesflat_customize_default('show_footer_navigation'),     
      )   
  );
  $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
      'show_footer_navigation',
      array(
          'type' => 'checkbox',
          'label' => esc_html__('Navigation ( OFF | ON )', 'xstar'),
          'section' => 'section_bottom',
          'priority' => 2,
      ))
  );