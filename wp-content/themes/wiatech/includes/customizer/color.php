<?php 
 // ADD SECTION GENERAL
$wp_customize->add_section('color_general',array(
    'title'         => esc_html__( 'General','xstar' ),
    'priority'      => 1,
    'panel'         => 'color_panel',
));
require THEMESFLAT_DIR . "includes/customizer/color/general.php";

// ADD SECTION HEADER
$wp_customize->add_section('color_header',array(
    'title'=> esc_html__( 'Header','xstar' ),
    'priority'=> 3,
    'panel'=>'color_panel',
));  
require THEMESFLAT_DIR . "includes/customizer/color/header.php";

// ADD SECTION FOOTER
$wp_customize->add_section('color_footer',array(
    'title'=> esc_html__( 'Footer','xstar' ),
    'priority'=> 5,
    'panel'=>'color_panel',
));
require THEMESFLAT_DIR . "includes/customizer/color/footer.php";

// ADD SECTION COLOR BOTTOM
$wp_customize->add_section('color_bottom',array(
    'title'=> esc_html__( 'Bottom','xstar' ),
    'priority'=> 6,
    'panel'=>'color_panel',
));
require THEMESFLAT_DIR . "includes/customizer/color/bottom.php";