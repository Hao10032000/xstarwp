<?php
/**
 * Return the default options of the theme
 * 
 * @return  void
 */

function themesflat_customize_default($key) {
	$default = array(
		'social_links'	=> array ("facebook" => '#', "twitter" => '#', "linkedin"  => '#', "instagram" => '#'),
		'show_social_share' => 0,		
		'social_footer' => 0,
		'enable_less' => 1,
		'animation_cursor' => 0,
		'go_top' => 1,
		'logo_controls' => array('padding-top' => '','padding-bottom' => ''),
		'header_backgroundcolor'=>'',
		'show_topbar' => 0,
		'topbar_address' => 1,
		'topbar_mail' => 1,
		'topbar_menu' => 1,
		'topbar_social' => 1,
		'style_header'	=> 'header-default',
		'header_sticky' => 0,
		'header_search_box' => 0,
		'header_infor_phone' => 0,
		'header_content_right' => '',
		'header_absolute'	=> 0,		
		'header_sidebar_toggler' => 0,
		'header_button' => 1,
		'header_button_text' => 'Get Started <i class="icon-xstar-angle-right"></i>',
		'header_button_url' => '#',
		'information_email' => 'support@gmail.com',
		'information_address' => '55 Main Street, 2nd block, Malborne ,Australia',
		'information_phone' => '+208-555-0112',
		'show_post_navigator' => 0,
		'show_entry_footer_content'	=> 0,
		'logo_width' => 159,
		'menu_location_primary' => 'primary',
		'site_logo'	=> THEMESFLAT_LINK . 'images/logo.png',
		'site_logo_mobile'	=> THEMESFLAT_LINK . 'images/logo.png',	
		'show_bottom' => 1,		
		'header_backgroundcolor_sticky'=>'#161616',		
		'primary_color'=>'#E3FF04;',
		'typography_body' => array(
			'family' => 'Manrope',
			'style'  => '400',
			'size'   => '16',
			'line_height'=>'28px',
		),
		'body_text_color'=>'#FFFFFF',
		'body_background_color' => '#1b1b1b',
		'page_sidebar_layout' => 'fullwidth',
		'content_controls' => array('padding-top' => 130,'padding-bottom' => 130),
		'typography_menu' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '600',
			'size'   => '16',
			'line_height'=>'102px',
		), 
		'mainnav_color_sticky'		=> '',
		'mainnav_color'		=> '#FFFFFF',
		'mainnav_hover_color'=>'#E3FF04',
		'menu_distance_between' => 10,
		'typography_sub_menu' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '600',
			'size'   => '16',
			'line_height'=>'28px',
		),
		'sub_nav_color'		=>'#FFFFFF',		
		'sub_nav_color_hover'	=>	'#E3FF04',
		'sub_nav_background'=>'#161616',
		'sub_nav_background_hover'=>'',
		'sub_nav_border_color' => '#F1F1F1',
		'typography_headings'	=> array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '600',
			'line_height'=>'1.2',
		),
		'h1_size' => 80,
		'h2_size' => 55,
		'h3_size' => 48,
		'h4_size' => 30,
		'h5_size' => 24,
		'h6_size' => 20,
		'typography_blockquote' => array(
			'family' => 'Manrope',
			'style'  => '500',
			'size'   => '24',
			'line_height'=>'36px',
		),	

		'typography_blog_post_title' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '700',
			'size'   => '24',
			'line_height'=>'1.2',
		),
		'typography_blog_post_meta' => array(
			'family' => 'Manrope',
			'style'  => '500',
			'size'   => '16',
			'line_height'=>'21.86px',
		),
		'typography_blog_post_buttons' => array(
			'family' => 'Manrope',
			'style'  => '700',
			'size'   => '16',
			'line_height'=>'19.36px',
		),
		'typography_blog_single_title' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '700',
			'size'   => '24',
			'line_height'=>'1.2',
		),
		'typography_blog_single_comment_title' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '700',
			'size'   => '24',
			'line_height'=>'1.2',
		),
		'typography_sidebar_widget_title' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '600',
			'size'   => '20',
			'line_height'=>'30px',
		),	
		'typography_footer_widget_title' => array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '700',
			'size'   => '24',
			'line_height'=>'1.2',
		),	
		'typography_page_title'	=> array(
			'family' => 'Plus Jakarta Sans',
			'style'  => '700',
			'size'   => '80',
			'line_height'=>'95px',
		),

		'page_title_background_color' => '#161616',
		'page_title_background_color_opacity' => '100',
		'page_title_text_color' => '#fff',		
		'page_title_controls' => array('padding-top' => 220, 'padding-bottom' => 144),
		'page_title_background_image' => '',
		'page_title_alignment' => 'center',
		'page_title_image_size' => 'cover',
		'page_title_heading_enabled' => 1,
		'typography_breadcrumb'	=> array(
			'family' => 'Manrope',
			'style'  => '400',
			'size'   => '16',
			'line_height'=>'28px',
		),
		'bread_crumb_prefix' =>'',
		'breadcrumb_separator' =>  '<i class="fas fa-arrow-up"></i>',
		'breadcrumb_color' => '#E3FF04',
		'breadcrumb_link_color' => '#fff',

		'typography_buttons' => array(
			'family' => 'Inter',
			'style'  => '700',
			'size'   => '16',
			'line_height'=>'19.36px',
		),
		'typography_pagination'	=> array(
			'family' => 'Manrope',
			'style'  => '600',
			'size'   => '16',
			'line_height'=>'30px',
		),		
		'breadcrumb_enabled' => 1,
		'show_post_paginator' => 1,
		'blog_grid_columns' => 2,
		'post_content_elements' => 'meta,title,excerpt_content,readmore',
		'meta_elements' => 'category,date',
		'blog_archive_exclude' => '',
		'blog_featured_title' => 'Blog Details',
		'sidebar_layout' => 'sidebar-right',
		'blog_archive_layout' => 'blog-list',
		'blog_sidebar_list'		  => 'blog-sidebar',	
		'blog_layout_single'		  => 'sidebar-right',	
		'blog_archive_readmore' => 1,
		'blog_archive_post_excepts_length' => 25,
		'blog_archive_readmore_text' => '<i class="fas fa-arrow-right"></i>',
		'blog_archive_pagination_style' => 'pager-numeric',
		'blog_posts_per_page'	=> 3,
		'blog_order_by'	=> 'date',
		'blog_order_direction' => 'DESC',
		'page_sidebar_list'	=> 'blog-sidebar',	

		// Property
		
		'typography_footer' => array(
			'family' => 'Inter',
			'style'  => '400',
			'size'   => '16',
			'line_height'=>'30px',
		),
		'footer_background_color'	=> '#161616',
		'footer_title_widget_color' => '#FFFFFF',
		'footer_text_color'			=> '#bebebe ',
		'footer_text_color_hover'   => '#E3FF04',
		'site_logo_ft'	=> THEMESFLAT_LINK . 'images/logo.png',
		'logo_controls_ft' => array('padding-top' => '','padding-bottom' => ''),
		'logo_width_ft' => 197,
		'footer_controls' => array('padding-top' => 75, 'padding-bottom' => 22),
		'footer1' => 'footer-1',
		'footer2' => 'footer-2',
		'footer3' => 'footer-3',
		'footer4' => 'footer-4',
		'show_footer'   => 1,		
		'footer_fixed'   => 0,		
		'footer_widget_areas' => 4,
		'footer_background_image' => '',
		'footer_image_size' => 'cover',
		'typography_bottom_copyright' => array(
			'family' => 'Manrope',
			'style'  => '400',
			'size'   => '16',
			'line_height'=>'30px',
		),
		'bottom_background_color'	=> '#1b1b1b',
		'bottom_text_color'			=> '#bebebe ',
		'social_bottom'   => 1,		
		'layout_version'			=> 'wide',		
		'footer_copyright'			=> '© 2024 Themesflat - IT Services. All rights reserved.',
		'enable_smooth_scroll'	=> 0,
		'enable_preload' => 1,
		'page_title_styles' => 'default',
        'show_footer_navigation'	=> 1,
        'show_footer_navigation_social'	=> 1,

		// project
        'project_number_post'	=> 9,
		'project_slug' => '',
		'project_archive_style' => 'style-grid',
		'project_name' => '',
		'project_featured_title' => 'Project Details',
		'project_filter_category_order' => '',
		'project_show_filter' => 1,
		'project_cat_slug' => '',
		'project_tag_slug' => '',
		'project_filter_category_order' => '',
		'project_order_direction' => 'DESC',
		'project_exclude' => '',
		'project_order_by' => 'author,date,comment',

		// services
        'services_number_post'	=> 8,
		'services_slug' => '',
		'services_name' => '',
		'services_featured_title' => 'Services Details',
		'services_order_by' => 'author,date,comment',
		'services_order_direction' => 'DESC',
		'services_exclude' => '',

		// team
        'team_number_post'	=> 8,
		'team_slug' => '',
		'team_name' => '',
		'team_featured_title' => 'Team Details',

	);
	return $default[$key];
}