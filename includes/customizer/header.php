<?php 

// ADD SECTION TOPBAR
$wp_customize->add_section('section_topbar',array(
    'title'         => esc_html__( 'Top Bar','xstar' ),
    'priority'      => 1,
    'panel'         => 'header_panel',
));
require THEMESFLAT_DIR . "includes/customizer/header/topbar.php";

// ADD SECTION LOGO
$wp_customize->add_section('section_logo',array(
    'title'         => esc_html__( 'Logo','xstar' ),
    'priority'      => 2,
    'panel'         => 'header_panel',
));
require THEMESFLAT_DIR . "includes/customizer/header/logo.php";

// ADD SECTION NAVIGATION
$wp_customize->add_section('section_navigation',array(
    'title'         => esc_html__( 'Navigation','xstar' ),
    'priority'      => 3,
    'panel'         => 'header_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/header/navigation.php";

// ADD SECTION HEADER OPTION
$wp_customize->add_section('section_options',array(
    'title'         => esc_html__( 'Header Options','xstar' ),
    'priority'      => 4,
    'panel'         => 'header_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/header/header-options.php";

// ADD SECTION INFOMATION
$wp_customize->add_section('section_information',array(
    'title'         => esc_html__( 'Infomation ( Address | Email | Phone Call )','xstar' ),
    'priority'      => 5,
    'panel'         => 'header_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/header/information.php";