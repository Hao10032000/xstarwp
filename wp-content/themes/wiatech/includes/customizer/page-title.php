<?php 
// ADD SECTION PAGE TITLE
$wp_customize->add_section('section_page_title',array(
    'title'         => esc_html__( 'Page Title','xstar' ),
    'priority'      => 1,
    'panel'         => 'page_title_panel',
));
require THEMESFLAT_DIR . "includes/customizer/page-title/page-title.php";

// ADD SECTION BREADCRUMB
$wp_customize->add_section('section_breadcrumb',array(
    'title'         => esc_html__( 'Breadcrumb','xstar' ),
    'priority'      => 2,
    'panel'         => 'page_title_panel',
));
require THEMESFLAT_DIR . "includes/customizer/page-title/breadcrumb.php";