<?php 
if (function_exists('themesflat_register_team_post_type')) {

    /* team Archive 
    ===============================================*/ 
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'team', array(
        'label' => esc_html__('TEAM ARCHIVE', 'xstar'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 1
        ) )
    );

    // team Slug
    $wp_customize->add_setting (
        'team_slug',
        array(
            'default' =>  themesflat_customize_default('team_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'team_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Team Slug', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 2
        )
    );  

    // team Name
    $wp_customize->add_setting (
        'team_name',
        array(
            'default' =>  themesflat_customize_default('team_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'team_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Customize Text Team Page Title', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 3
        )
    );

    // Number Posts team
    $wp_customize->add_setting (
        'team_number_post',
        array(
            'default' => themesflat_customize_default('team_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'team_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 4
        )
    );

    /* team Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'teamsingle', array(
        'label' => esc_html__('TEAM SINGLE', 'xstar'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 5
        ) )
    ); 

    // Customize team Featured Title
    $wp_customize->add_setting (
        'team_featured_title',
        array(
            'default' => themesflat_customize_default('team_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'team_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize Text Team Page Title', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 6
        )
    );
}

if (function_exists('themesflat_register_project_post_type')) {

    /* project Archive 
    =================================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'project', array(
        'label' => esc_html__('PROJECT ARCHIVE', 'xstar'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 7
        ) )
    ); 

    $wp_customize->add_setting (
        'project_archive_style',
        array(
            'default' =>  themesflat_customize_default('project_archive_style'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );

    $wp_customize->add_control(
        'project_archive_style',
        array(
            'type'      => 'select',
            'label'     => esc_html('Style Archive Grid', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 8,
            'choices' => array(
                'style-grid'          => esc_html( 'default', 'xstar' ),
                'style-masonry'            => esc_html( 'masonry', 'xstar' ),
            )        
        )
    );

    // project Slug
    $wp_customize->add_setting (
        'project_slug',
        array(
            'default' =>  themesflat_customize_default('project_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Project Slug', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 9
        )
    );  

    // project Name
    $wp_customize->add_setting (
        'project_name',
        array(
            'default' =>  themesflat_customize_default('project_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Customize Text Project Page Title', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 10
        )
    );

    $wp_customize->add_setting (
        'project_cat_slug',
        array(
            'default' =>  themesflat_customize_default('project_cat_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_cat_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Project Category Slug', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 11
        )
    );  

    $wp_customize->add_setting (
        'project_tag_slug',
        array(
            'default' =>  themesflat_customize_default('project_tag_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_tag_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Project Tag Slug', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 12
        )
    );  

    // Number Posts project
    $wp_customize->add_setting (
        'project_number_post',
        array(
            'default' => themesflat_customize_default('project_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 13
        )
    );

    // Order By project
    $wp_customize->add_setting(
        'project_order_by',
        array(
            'default' => themesflat_customize_default('project_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'project_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 14,
            'choices' => array(
                'date'          => esc_html( 'Date', 'xstar' ),
                'id'            => esc_html( 'Id', 'xstar' ),
                'author'        => esc_html( 'Author', 'xstar' ),
                'title'         => esc_html( 'Title', 'xstar' ),
                'modified'      => esc_html( 'Modified', 'xstar' ),
                'comment_count' => esc_html( 'Comment Count', 'xstar' ),
                'menu_order'    => esc_html( 'Menu Order', 'xstar' )
            )        
        )
    );

    // Order Direction project
    $wp_customize->add_setting(
        'project_order_direction',
        array(
            'default' => themesflat_customize_default('project_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'project_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 15,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'xstar' ),
                'ASC'  => esc_html( 'Assending', 'xstar' )
            )        
        )
    );

    // project Exclude Post
    $wp_customize->add_setting (
        'project_exclude',
        array(
            'default' =>  themesflat_customize_default('project_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 16
        )
    );

    // Show filter project
    $wp_customize->add_setting (
        'project_show_filter',
        array (
            'sanitize_callback' => 'themesflat_sanitize_checkbox',
            'default' => themesflat_customize_default('project_show_filter'),     
        )
    );
    $wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'project_show_filter',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Filter ( OFF | ON )', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 17
        ))
    );

    // Filter Categories Order
    $wp_customize->add_setting (
        'project_filter_category_order',
        array(
            'default' =>  themesflat_customize_default('project_filter_category_order'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_filter_category_order',
        array(
            'type'      => 'text',
            'label'     => esc_html('Filter Slug Categories Order Split By ","', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 18
        )
    );

    /* project Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'projectsingle', array(
        'label' => esc_html__('PROJECT SINGLE', 'xstar'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 18
        ) )
    ); 

    // Customize project Featured Title
    $wp_customize->add_setting (
        'project_featured_title',
        array(
            'default' => themesflat_customize_default('project_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'project_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize Text Project Page Title', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 18
        )
    );

}

if (function_exists('themesflat_register_services_post_type')) {

    /* services Archive 
    =================================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'services', array(
        'label' => esc_html__('SERVICES ARCHIVE', 'xstar'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 19
        ) )
    ); 

    // services Slug
    $wp_customize->add_setting (
        'services_slug',
        array(
            'default' =>  themesflat_customize_default('services_slug'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_slug',
        array(
            'type'      => 'text',
            'label'     => esc_html('Services Slug', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 20
        )
    );  

    // services Name
    $wp_customize->add_setting (
        'services_name',
        array(
            'default' =>  themesflat_customize_default('services_name'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_name',
        array(
            'type'      => 'text',
            'label'     => esc_html('Customize Text Services Page Title', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 21
        )
    );

    // Number Posts services
    $wp_customize->add_setting (
        'services_number_post',
        array(
            'default' => themesflat_customize_default('services_number_post'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_number_post',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Show Number Posts', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 22
        )
    );

    // Order By services
    $wp_customize->add_setting(
        'services_order_by',
        array(
            'default' => themesflat_customize_default('services_order_by'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_order_by',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order By', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 23,
            'choices' => array(
                'date'          => esc_html( 'Date', 'xstar' ),
                'id'            => esc_html( 'Id', 'xstar' ),
                'author'        => esc_html( 'Author', 'xstar' ),
                'title'         => esc_html( 'Title', 'xstar' ),
                'modified'      => esc_html( 'Modified', 'xstar' ),
                'comment_count' => esc_html( 'Comment Count', 'xstar' ),
                'menu_order'    => esc_html( 'Menu Order', 'xstar' )
            )        
        )
    );

    // Order Direction services
    $wp_customize->add_setting(
        'services_order_direction',
        array(
            'default' => themesflat_customize_default('services_order_direction'),
            'sanitize_callback' => 'esc_attr',
        )
    );
    $wp_customize->add_control(
        'services_order_direction',
        array(
            'type'      => 'select',
            'label'     => esc_html('Order Direction', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 24,
            'choices' => array(
                'DESC' => esc_html( 'Descending', 'xstar' ),
                'ASC'  => esc_html( 'Assending', 'xstar' )
            )        
        )
    );

    // services Exclude Post
    $wp_customize->add_setting (
        'services_exclude',
        array(
            'default' =>  themesflat_customize_default('services_exclude'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_exclude',
        array(
            'type'      => 'text',
            'label'     => esc_html('Post Ids Will Be Inorged. Ex: 1,2,3', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 25
        )
    );

    /* Services Single 
    ==============================================*/  
    $wp_customize->add_control( new themesflat_Info( $wp_customize, 'servicessingle', array(
        'label' => esc_html__('SERVICES SINGLE', 'xstar'),
        'section' => 'section_content_post_type',
        'settings' => 'themesflat_options[info]',
        'priority' => 26
        ) )
    ); 

    // Customize services Featured Title
    $wp_customize->add_setting (
        'services_featured_title',
        array(
            'default' => themesflat_customize_default('services_featured_title'),
            'sanitize_callback' => 'themesflat_sanitize_text'
        )
    );
    $wp_customize->add_control(
        'services_featured_title',
        array(
            'type'      => 'text',
            'label'     => esc_html__('Customize Text Services Page Title', 'xstar'),
            'section'   => 'section_content_post_type',
            'priority'  => 27
        )
    );

}