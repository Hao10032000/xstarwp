<?php 
// ADD SECTION BODY
$wp_customize->add_section('section_typo_body',array(
    'title'         => esc_html__( 'Body','xstar' ),
    'priority'      => 1,
    'panel'         => 'typography_panel',
));
require THEMESFLAT_DIR . "includes/customizer/typography/body.php";

// ADD SECTION NAVIGATION
$wp_customize->add_section('section_typo_navigation',array(
    'title'         => esc_html__( 'Navigation','xstar' ),
    'priority'      => 3,
    'panel'         => 'typography_panel',
));
require THEMESFLAT_DIR . "includes/customizer/typography/navigation.php";

// ADD SECTION PAGE TITLE
$wp_customize->add_section('section_typo_page_title',array(
    'title'         => esc_html__( 'Page Title','xstar' ),
    'priority'      => 4,
    'panel'         => 'typography_panel',
));
require THEMESFLAT_DIR . "includes/customizer/typography/page-title.php";

// ADD SECTION BLOG POST
$wp_customize->add_section('panel_typo_blog_post',array(
    'title'         => esc_html__( 'Blog Post','xstar' ),
    'priority'      => 5,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/blog-post.php";

// ADD SECTION SIDEBAR WIDGET TITLE
$wp_customize->add_section('section_typo_sidebar_widget_title',array(
    'title'         => esc_html__( 'Sidebar Widget Title','xstar' ),
    'priority'      => 6,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/sidebar-widget-title.php";

// ADD SECTION FOOTER WIDGET TITLE
$wp_customize->add_section('section_typo_footer_widget_title',array(
    'title'         => esc_html__( 'Footer Widget Title','xstar' ),
    'priority'      => 7,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/footer-widget-title.php";

// ADD SECTION FOOTER WIDGET TITLE
$wp_customize->add_section('section_typo_footer',array(
    'title'         => esc_html__( 'Footer','xstar' ),
    'priority'      => 8,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/footer.php";

// ADD SECTION BOTTOM
$wp_customize->add_section('section_typo_bottom',array(
    'title'         => esc_html__( 'Bottom','xstar' ),
    'priority'      => 9,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/bottom.php";

// ADD SECTION BOTTOM
$wp_customize->add_section('section_typo_heading',array(
    'title'         => esc_html__( 'Heading H1 - H6','xstar' ),
    'priority'      => 10,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/heading.php";

// ADD SECTION BUTTONS
$wp_customize->add_section('section_typo_buttons',array(
    'title'         => esc_html__( 'Buttons','xstar' ),
    'priority'      => 11,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/button.php";

// ADD SECTION BUTTONS
$wp_customize->add_section('section_typo_pagination',array(
    'title'         => esc_html__( 'Pagination','xstar' ),
    'priority'      => 12,
    'panel'         => 'typography_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/typography/pagination.php";