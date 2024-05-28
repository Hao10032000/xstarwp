<?php 

$wp_customize->add_setting ( 
    'show_footer',
    array (
        'sanitize_callback' => 'themesflat_sanitize_checkbox' ,
        'default' => themesflat_customize_default('show_footer'),     
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
    'show_footer',
    array(
        'type'      => 'checkbox',
        'label'     => esc_html__('Show Footer ( OFF | ON )', 'xstar'),
        'section'   => 'section_footer',
        'priority'  => 1
    ))
);

// Columns Footer
$wp_customize->add_setting(
    'footer_widget_areas',
    array(
        'default'           => themesflat_customize_default('footer_widget_areas'),
        'sanitize_callback' => 'themesflat_sanitize_grid_post_related',
    )
);
$wp_customize->add_control(
    'footer_widget_areas',
    array(
        'type'      => 'select',           
        'section'   => 'section_footer',
        'priority'  => 2,
        'label'     => esc_html__('Columns Footer', 'xstar'),
        'choices'   => array(                
            2     => esc_html__( '2 Columns', 'xstar' ),
            3     => esc_html__( '3 Columns (6|3|3)', 'xstar' ),
            4     => esc_html__( '3 Columns (4|4|4)', 'xstar' ),                  
            5     => esc_html__( '4 Columns (3|3|3|3)', 'xstar' ),                  
        )
    )
); 

// $wp_customize->add_setting ( 
//     'footer_fixed',
//     array (
//         'sanitize_callback' => 'themesflat_sanitize_checkbox' ,
//         'default' => themesflat_customize_default('footer_fixed'),     
//     )
// );
// $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
//     'footer_fixed',
//     array(
//         'type'      => 'checkbox',
//         'label'     => esc_html__('Footer Fixed ( OFF | ON )', 'xstar'),
//         'section'   => 'section_footer',
//         'priority'  => 2
//     ))
// );

// Footer Box control
$wp_customize->add_setting(
    'footer_controls',
    array(
        'default' => themesflat_customize_default('footer_controls'),
        'sanitize_callback' => 'themesflat_sanitize_text',
    )
);
$wp_customize->add_control( new themesflat_BoxControls($wp_customize,
    'footer_controls',
    array(
        'label' => esc_html__( 'Footer Box Controls (px)', 'xstar' ),
        'section' => 'section_footer',
        'type' => 'box-controls',
        'priority' => 3
    ))
);

