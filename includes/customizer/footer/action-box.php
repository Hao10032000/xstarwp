<?php 
$wp_customize->add_setting(
    'show_action_box',
    array(
        'default'   => themesflat_customize_default('show_action_box'),
        'sanitize_callback'  => 'themesflat_sanitize_checkbox',
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'show_action_box',
        array(

            'type'      => 'checkbox',
            'type'      => 'checkbox',
            'label'     => esc_html__('Action Box ( OFF | ON )', 'xstar'),
            'section'   => 'section_action_box',
            'priority'  => 1
        )
    )
);

// Heading
$wp_customize->add_setting(
    'action_box_text',
    array(
        'default' => themesflat_customize_default('action_box_text'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'action_box_text',
    array(
        'label' => esc_html__( 'Heading Action Box', 'xstar' ),
        'section' => 'section_action_box',
        'type' => 'text',
        'priority' => 2
    )
);


// Background
$wp_customize->add_setting(
    'action_box_button_image',
    array(
        'default' => themesflat_customize_default('action_box_button_image'),
        'sanitize_callback' => 'esc_url_raw',
    )
);    
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'action_box_button_image',
        array(
           'label'          => esc_html__( 'Upload Background Image', 'xstar' ),
           'type'           => 'image',
           'section'        => 'section_action_box',
           'priority'       => 6,
        )
    )
);

// Button Url
$wp_customize->add_setting(
    'action_box_button_url',
    array(
        'default' => themesflat_customize_default('action_box_button_url'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'action_box_button_url',
    array(
        'label' => esc_html__( 'Url', 'xstar' ),
        'section' => 'section_action_box',
        'type' => 'text',
        'priority' => 5
    )
);