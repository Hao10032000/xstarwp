<?php 

// ADD SECTION FOOTER
$wp_customize->add_section('section_footer',array(
    'title'         => esc_html__( 'Footer','xstar' ),
    'priority'      => 3,
    'panel'         => 'footer_panel',
));
require THEMESFLAT_DIR . "includes/customizer/footer/footer.php";

// ADD SECTION NAVIGATION
$wp_customize->add_section('section_action_box',array(
    'title'         => esc_html__( 'Action Box','xstar' ),
    'priority'      => 4,
    'panel'         => 'footer_panel',
));
require THEMESFLAT_DIR . "includes/customizer/footer/action-box.php";
// ADD SECTION BOTTOM

// ADD SECTION BOTTOM
$wp_customize->add_section('section_bottom',array(
    'title'         => esc_html__( 'Bottom','xstar' ),
    'priority'      => 5,
    'panel'         => 'footer_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/footer/bottom.php";

