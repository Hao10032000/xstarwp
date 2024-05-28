<?php 
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Plugin;
use Elementor\Repeater;
use Elementor\Icons_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow as Group_Control_Box_Shadow;
use Elementor\Modules\DynamicTags\Module as TagsModule;


class themesflat_options_elementor {
	public function __construct(){	
        add_action('elementor/documents/register_controls', [$this, 'themesflat_elementor_register_options'], 10);
        add_action('elementor/editor/before_enqueue_scripts', function() { wp_enqueue_script( 'elementor-preview-load', THEMESFLAT_LINK . 'assets/js/elementor/elementor-preview-load.js', array( 'jquery' ), null, true );
        }, 10, 3);
    }

    public function themesflat_elementor_register_options($element){
        $post_id = $element->get_id();
        $post_type = get_post_type($post_id);

        $this->themesflat_options_page_header($element);                      
        $this->themesflat_options_page_footer($element);                      
        $this->themesflat_options_page($element);
        $this->themesflat_options_page_pagetitle($element);

        if ( $post_type == 'services' ) {
            $this->themesflat_options_services($element);
        }
    }

    public function themesflat_options_page_header($element) {
        // Header
        $element->start_controls_section(
            'themesflat_header_options',
            [
                'label' => esc_html__('TF Header Style', 'xstar'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        ); 

        $element->add_control(
            'show_topbar',
            [
                'label'     => esc_html__( 'Show Topbar', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'xstar'),
                    0       => esc_html__( 'Hide', 'xstar'),
                    1       => esc_html__( 'Show', 'xstar'),                    
                ],
            ]
        );

        $element->add_control(
            'topbar_background',
            [
                'label' => esc_html__( 'Topbar Background', 'xstar' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .topbar-wrap' => 'background: {{VALUE}};',                  
                ],
            ]
        );

        $element->add_control(
            'style_header',
            [
                'label'     => esc_html__( 'Choose Header Style', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'options'   => [
                    'default'      => esc_html__( 'Default', 'xstar'),
                    'header-02'      => esc_html__( 'Header Style 02', 'xstar'),
                    'header-absolute'       => esc_html__( 'Style Absolute', 'xstar'),
                ],
            ]
        ); 

        $element->add_control(
            'site_logo',
            [
                'label'   => esc_html__( 'Custom Logo', 'xstar' ),
                'type'    => Controls_Manager::MEDIA,
            ]
        );

        $element->add_control(
            'header_background',
            [
                'label' => esc_html__( 'Header Background', 'xstar' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #header' => 'background: {{VALUE}};',                  
                ],
            ]
        );

        $element->add_control(
            'text_header_color',
            [
                'label' => esc_html__( 'Text Color', 'xstar' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} #mainnav > ul > li > a, {{WRAPPER}} .phone-header-box .inner, {{WRAPPER}} .widget_login_menu_widget .user-dropdown .user-display-name.dropdown-toggle::after, {{WRAPPER}} #header:not(.header-sticky) .themesflat-socials li a, {{WRAPPER}} .show-search a, {{WRAPPER}} .widget_login_menu_widget .user-dropdown .user-display-name span.display-name' => 'color: {{VALUE}};',                  
                ],
            ]
        );

        $element->add_control(
            'header_search_box',
            [
                'label'     => esc_html__( 'Header Search', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'xstar'),
                    0       => esc_html__( 'Hide', 'xstar'),
                    1       => esc_html__( 'Show', 'xstar'),                    
                ],
            ]
        );

        $element->add_control(
            'header_infor_phone',
            [
                'label'     => esc_html__( 'Header Phone', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'xstar'),
                    0       => esc_html__( 'Hide', 'xstar'),
                    1       => esc_html__( 'Show', 'xstar'),                    
                ],
            ]
        );

        $element->add_control(
            'header_sidebar_toggler',
            [
                'label'     => esc_html__( 'Header Information Phone', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'xstar'),
                    0       => esc_html__( 'Hide', 'xstar'),
                    1       => esc_html__( 'Show', 'xstar'),                    
                ],
            ]
        );

        $element->add_control(
            'header_button',
            [
                'label'     => esc_html__( 'Header Button', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'Theme Setting', 'xstar'),
                    0       => esc_html__( 'Hide', 'xstar'),
                    1       => esc_html__( 'Show', 'xstar'),                    
                ],
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_page_pagetitle($element) {
        // TF Page Title
        $element->start_controls_section(
            'themesflat_pagetitle_options',
            [
                'label' => esc_html__('TF Page Title', 'xstar'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );       

        $element->add_control(
            'hide_pagetitle',
            [
                'label'     => esc_html__( 'Hide Page Title', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'block',
                'options'   => [
                    'none'       => esc_html__( 'Yes', 'xstar'),
                    'block'      => esc_html__( 'No', 'xstar'),
                ],
                'selectors'  => [
                    '{{WRAPPER}} .page-title' => 'display: {{VALUE}};',
                ],
            ]
        ); 

        $element->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'pagetitle_bg',
                'label' => esc_html__( 'Background', 'xstar' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .page-title',
                'condition' => [ 'hide_pagetitle' => 'block' ]
            ]
        );

        $element->add_control(
            'pagetitle_overlay_color',
            [
                'label' => esc_html__( 'Overlay Color', 'xstar' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page-title .overlay' => 'background: {{VALUE}}; opacity: 100%;filter: alpha(opacity=100);',
                ],
                'condition' => [ 'hide_pagetitle' => 'block' ]
            ]
        );

        //Extra Classes Page Title
        $element->add_control(
            'extra_classes_pagetitle',
            [
                'label'   => esc_html__( 'Extra Classes', 'xstar' ),
                'type'    => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before'
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_page_footer($element) {
        // TF Footer
        $element->start_controls_section(
            'themesflat_footer_options',
            [
                'label' => esc_html__('TF Footer', 'xstar'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'footer_heading',
            [
                'label'     => esc_html__( 'Footer', 'xstar'),
                'type'      => Controls_Manager::HEADING,
            ]
        );       

        $element->add_control(
            'hide_footer',
            [
                'label'     => esc_html__( 'Hide Footer', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'block',
                'options'   => [
                    'none'       => esc_html__( 'Yes', 'xstar'),
                    'block'      => esc_html__( 'No', 'xstar'),
                ],
                'selectors'  => [
                    '{{WRAPPER}} #footer' => 'display: {{VALUE}};',
                    '{{WRAPPER}} .info-footer' => 'display: {{VALUE}};' 
                ],
            ]
        );

        $element->add_control(
            'bottom_heading',
            [
                'label'     => esc_html__( 'Bottom', 'xstar'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

        $element->add_control(
            'hide_bottom',
            [
                'label'     => esc_html__( 'Hide?', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'block',
                'options'   => [
                    'none'       => esc_html__( 'Yes', 'xstar'),
                    'block'      => esc_html__( 'No', 'xstar'),
                ],
                'selectors'  => [
                    '{{WRAPPER}} #bottom' => 'display: {{VALUE}};' 
                ],
            ]
        );

        //Extra Classes Footer
        $element->add_control(
            'extra_classes_footer',
            [
                'label'   => esc_html__( 'Extra Classes', 'xstar' ),
                'type'    => Controls_Manager::TEXT,
                'label_block' => true,
                'separator' => 'before'
            ]
        );

        $element->end_controls_section();
    }

    public function themesflat_options_page($element) {
        // TF Page
        $element->start_controls_section(
            'themesflat_page_options',
            [
                'label' => esc_html__('TF Page', 'xstar'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'page_sidebar_layout',
            [
                'label'     => esc_html__( 'Sidebar Position', 'xstar'),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__( 'No Sidebar', 'xstar'),
                    'sidebar-right'     => esc_html__( 'Sidebar Right','xstar' ),
                    'sidebar-left'      =>  esc_html__( 'Sidebar Left','xstar' ),
                    'fullwidth'         =>   esc_html__( 'Full Width','xstar' ),
                    'fullwidth-small'   =>   esc_html__( 'Full Width Small','xstar' ),
                    'fullwidth-center'  =>   esc_html__( 'Full Width Center','xstar' ),
                ],
            ]
        );

        $element->add_control(
            'main_content_heading',
            [
                'label'     => esc_html__( 'Main Content', 'xstar'),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before'
            ]
        );

        $element->add_control(
            'main_content_padding',
            [
                'label' => esc_html__( 'Padding', 'xstar' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => [ 'top', 'bottom' ],
                'selectors' => [
                    '{{WRAPPER}} #themesflat-content' => 'padding-top: {{TOP}}{{UNIT}}; padding-bottom: {{BOTTOM}}{{UNIT}};',
                ],
            ]
        ); 

        $element->end_controls_section();
    }

    public function themesflat_options_services($element) {
        // TF Services
        $element->start_controls_section(
            'themesflat_services_options',
            [
                'label' => esc_html__('TF Services', 'xstar'),
                'tab' => Controls_Manager::TAB_SETTINGS,
            ]
        );

        $element->add_control(
            'services_post_icon',
            [
                'label' => esc_html__( 'Post Icon', 'xstar' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );


        $element->end_controls_section();
    }
}

new themesflat_options_elementor();

