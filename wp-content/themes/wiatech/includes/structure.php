<?php
if ( ! function_exists( 'themesflat_body_classes' ) ) {
	add_filter( 'body_class', 'themesflat_body_classes' );

	function themesflat_body_classes( $classes ) {	
		$custom_page_class = themesflat_meta('custom_page_class');

		$classes[] = $custom_page_class;

		/**
		 * layout version
		 */
	    $layout_version = themesflat_get_opt('layout_version');
		$classes[] = $layout_version;

		/**
		 * Header Absolute
		 */
	    $header_absolute = themesflat_get_opt('header_absolute');

		if ( $header_absolute == 1 ) {
			$classes[] = 'header-absolute';
		}

		/**
		 * Header Sticky
		 */
		$header_sticky = themesflat_get_opt('header_sticky');
		
		if ( $header_sticky == 1 ) {
			$classes[] = 'header_sticky';
		}

		/**
		 * Header Style Page Option
		 */
		$header_style = themesflat_get_opt_elementor('style_header');
		
		if ( !empty($header_style) ) {
			$classes[] = $header_style;
		}


		/**
		 * Name Page
		 */	  
		 $slug = get_post_field( 'post_name', get_post() );  	
		if ( $slug != '' ) {
			$classes[] = 'class-name-page-'.$slug;
		}

		return $classes;
	}
}