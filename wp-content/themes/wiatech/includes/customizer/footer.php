<?php 

// ADD SECTION FOOTER
$wp_customize->add_section('section_footer',array(
    'title'         => esc_html__( 'Footer','xstar' ),
    'priority'      => 3,
    'panel'         => 'footer_panel',
));
require THEMESFLAT_DIR . "includes/customizer/footer/footer.php";

// ADD SECTION NAVIGATION
$wp_customize->add_section('section_navigation_footer',array(
    'title'         => esc_html__( 'Logo, Menu, Social Footer','xstar' ),
    'priority'      => 4,
    'panel'         => 'footer_panel',
));
require THEMESFLAT_DIR . "includes/customizer/footer/navigation-ft.php";

// ADD SECTION BOTTOM
$wp_customize->add_section('section_bottom',array(
    'title'         => esc_html__( 'Bottom','xstar' ),
    'priority'      => 5,
    'panel'         => 'footer_panel',
)); 
require THEMESFLAT_DIR . "includes/customizer/footer/bottom.php";

