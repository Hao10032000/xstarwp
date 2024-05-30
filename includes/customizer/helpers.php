<?php
/**
 * Return the built-in header styles for this theme
 *
 * @return  array
 */
Class themesflat_options_helpers {
    public function themesflat_recognize_control_class( $name ) {
        $segments = explode( '-', $name );
        $segments = array_map( 'ucfirst', $segments );
        
        return implode( '', $segments );
    }
}

function themesflat_get_class_for_custom($vc_class = '',$themesflat_class='') {
    if (!empty($vc_class)) {
        if (function_exists('vc_shortcode_custom_css_class')) {
            $vcclass = vc_shortcode_custom_css_class( $vc_class, '' );
        }
    }
    else {
        $vcclass = $themesflat_class; 
    }
    return $vcclass;
}

function themesflat_shortcode_default_id(){
    return array(
        'type'       => 'textfield',
        'param_name' => 'default_id',
        'group' => esc_html__( 'Design Options', 'xstar' ),
        'value' => 'themesflat_'.current_time('timestamp'),
        'std' => 'themesflat_'.current_time('timestamp')
    );
}

function themesflat_add_icons($icon_name='fa',$url='') {
    $icons = '';
    if ($url != '') {
       $fontContent = wp_remote_get( $url, array('sslverify'   => false) );
       if (!is_wp_error($fontContent)){
           $pattern = sprintf('/\.([\A%s].*?)\:/',$icon_name);
           preg_match_all($pattern, $fontContent['body'],$tmp_icons);
           $icons = $tmp_icons[1];
       }
    }

    return $icons;
}

function themesflat_check_isset($control) {
    return isset($control) ? $control : '';
}

function themesflat_render_box_control($name,$control=array(),$id='') {
    add_action('admin_enqueue_scripts','themesflat_admin_color_picker');
    $default = array(
        'margin-top' => '',
        'margin-bottom' => '',
        'margin-left' => '',
        'margin-right' => '',
        'padding-top' => '',
        'padding-bottom' => '',
        'padding-left' => '',
        'padding-right' => '',
        'border-top-width' => '',
        'border-bottom-width' => '',
        'border-left-width' => '',
        'border-right-width' => ''
        );
    $controls = themesflat_decode($control);
    if (!is_array($controls)) {
        $controls = array();
    }
    $controls = array_merge($default,$controls);
    ?>
    <div class="themesflat_box_control">
        <div class="themesflat_box_position">
            <div class="themesflat_box_margin">
                <label class="themesflat_box_label"><?php echo esc_html('Margin');?></label>
                <input placeholder="-" data-position='margin-top' value ="<?php  echo esc_attr(($controls['margin-top']));?>" class="top" type="text"/>
                <input placeholder="-" data-position='margin-bottom' value ="<?php  echo esc_attr(($controls['margin-bottom']));?>" class="bottom" type="text"/>
                <input placeholder="-" data-position='margin-left' value ="<?php  echo esc_attr(($controls['margin-left']));?>" class="left" type="text"/>
                <input placeholder="-" data-position='margin-right' value ="<?php  echo esc_attr(($controls['margin-right']));?>" class="right" type="text"/>
            </div>

            <div class="themesflat_box_padding">
                <label class="themesflat_box_label"><?php echo esc_html('Padding');?></label>
                <input placeholder="-" data-position='padding-top' value ="<?php  echo esc_attr(($controls['padding-top']));?>" class="top" type="text"/>
                <input placeholder="-" data-position='padding-bottom' value ="<?php  echo esc_attr(($controls['padding-bottom']));?>" class="bottom" type="text"/>
                <input placeholder="-" data-position='padding-left' value ="<?php  echo esc_attr(($controls['padding-left']));?>" class="left" type="text"/>
                <input placeholder="-" data-position='padding-right' value ="<?php  echo esc_attr(($controls['padding-right']));?>" class="right" type="text"/>
            </div>

            <div class="themesflat_box_border">
                <label class="themesflat_box_label"><?php echo esc_html('Border');?></label>
                <input placeholder="-" data-position='border-top-width' value ="<?php  echo esc_attr(($controls['border-top-width']));?>" class="top" type="text"/>
                <input placeholder="-" data-position='border-bottom-width' value ="<?php  echo esc_attr(($controls['border-bottom-width']));?>" class="bottom" type="text"/>
                <input placeholder="-" data-position='border-left-width' value ="<?php  echo esc_attr(($controls['border-left-width']));?>" class="left" type="text"/>
                <input placeholder="-" data-position='border-right-width' value ="<?php  echo esc_attr(($controls['border-right-width']));?>" class="right" type="text"/>
            </div>
            <div class="themesflat_control_logo"></div>
        </div>
    </div>
    <input name="<?php echo esc_attr($name);?>" data-customize-setting-link="<?php echo  esc_attr($id);?>" value="<?php echo esc_attr(json_encode($controls));?>" type="hidden"/>
    <?php 
}

function themesflat_color_picker_control($title,$control) { 
    $output = '<span class="themesflat-options-control-title">'. esc_attr($title).'</span>
                <div class="background-color">
                    <div class="themesflat-options-control-color-picker">
                        <div class="themesflat-options-control-inputs">
                            <input type="text" class="themesflat-color-picker" id="'. esc_attr( $control['name'] ) .'-color" name="'. esc_attr($control['name']).'" data-default-color value="'. esc_attr( $control['color'] ) .'" />
                        </div>
                    </div>
                </div>';
    return $output;   
}

function themesflat_available_icons($name = 'icon' ) {
    $icon_types = array ($name.'_type'=>'fontawesome',$name.'_fontawesome' => '');
    return  $icon_types;
}

function themesflat_custom_button_color($color = '') {
    $color = $color == '' ? themesflat_get_opt( 'primary_color' ) : $color;
    return $color;
}

function themesflat_render_post($blog_layout,$readmore = '[...]',$length='') {
    if ($length != '') {
        global $themesflat_length;
        $themesflat_length = $length;
        add_filter('excerpt_length','themesflat_special_excerpt',1000);
    }
    $button_type = array(
        'blog-grid' => 'no-background',
        'blog-list' => '',
        );
    $_button_type = $button_type[$blog_layout];
    if( strpos( get_the_content(), 'more-link' ) === false ) {
        add_filter( 'excerpt_more', 'themesflat_excerpt_not_more' );
        the_excerpt();        
        if ($readmore != '[...]') {
            echo '<div class="themesflat-button-container"><a class="themesflat-button themesflat-archive '. esc_attr($_button_type).'" href="'.get_the_permalink().'" rel="nofollow">'.$readmore.'</a></div>';
            add_filter( 'excerpt_more', 'themesflat_excerpt_more' );            
        }        
    }
    else {
        if ($readmore != '[...]') {
            the_content('[...]');
            echo '<div class="themesflat-button-container"><a class="themesflat-button themesflat-archive '. esc_attr($_button_type).'" href="'.get_the_permalink().'" rel="nofollow">'.$readmore.'</a></div>';
        }
        else {
            the_content($readmore);
        }
    }
}

function themesflat_excerpt_more( $more ) {
    return '';
}

function themesflat_excerpt_not_more( $more ) {
    return '';
}

function themesflat_special_excerpt($length) {
    global $themesflat_length;
    return $themesflat_length;
}

function themesflat_available_social_icons() {
    $icons = apply_filters( 'themesflat_available_icons', array(
        'twitter'        => array( 'iclass' => 'icon-xstar-twitter', 'title' => 'Twitter','share_link' => THEMESFLAT_PROTOCOL . '://twitter.com/intent/tweet?url=' ),
        'facebook'       => array( 'iclass' => 'icon-xstar-facebook', 'title' => 'Facebook','share_link'=> THEMESFLAT_PROTOCOL . '://www.facebook.com/sharer/sharer.php?u=' ),
        'google-plus-g'    => array( 'iclass' => 'icon-xstar-google-plus', 'title' => 'Google Plus','share_link'=> THEMESFLAT_PROTOCOL . '://plus.google.com/share?url=' ),
        'pinterest'      => array( 'iclass' => 'icon-xstar-pinterest', 'title' => 'Pinterest','share_link' => THEMESFLAT_PROTOCOL . '://pinterest.com/pin/create/bookmarklet/?url=' ),
        'instagram'      => array( 'iclass' => 'icon-xstar-instagram', 'title' => 'Instagram','share_link' => 'https://www.instagram.com/?url=' ),
        'youtube'        => array( 'iclass' => 'icon-xstar-youtube', 'title' => 'Youtube','share_link' =>'' ),
        'vimeo'          => array( 'iclass' => 'icon-xstar-vimeo', 'title' => 'Vimeo','share_link' =>'' ),
        'behance'        => array( 'iclass' => 'icon-xstar-behance', 'title' => 'Behance','share_link' =>'' ),
        'bitcoin'        => array( 'iclass' => 'icon-xstar-bitcoin', 'title' => 'Bitcoin','share_link' =>'' ),
        'digg'           => array( 'iclass' => 'icon-xstar-digg', 'title' => 'Digg','share_link' =>'http://digg.com/submit?url=' ),
        'skype'          => array( 'iclass' => 'icon-xstar-skype', 'title' => 'Skype','share_link' => THEMESFLAT_PROTOCOL . '://web.skype.com/share?url='),
        'slack'          => array( 'iclass' => 'icon-xstar-slack', 'title' => 'Slack','share_link' => ''),
        'spotify'        => array( 'iclass' => 'icon-xstar-spotify', 'title' => 'Spotify','share_link' => ''),
        'stack-overflow' => array( 'iclass' => 'icon-xstar-stack-overflow', 'title' => 'Stack Overflow','share_link' => ''),
        'steam'          => array( 'iclass' => 'icon-xstar-steam', 'title' => 'Steam','share_link' => ''),
        'dribble'          => array( 'iclass' => 'icon-xstar-dribble', 'title' => 'Dribble','share_link' => ''),
        'linkedin'          => array( 'iclass' => 'icon-xstar-linkedin', 'title' => 'Linkedin','share_link' => ''),
    ) );

    $icons['__ordering__'] = array_keys( $icons );

    return $icons;
}

/**
 * Menu fallback
 */
function themesflat_menu_fallback() {
    echo '<ul id="menu-main" class="menu">
    <li>
    <a class="menu-fallback" href="' . esc_url(admin_url('nav-menus.php')) . '">' . esc_html__( 'Create a Menu', 'xstar' ) . '</a></li></ul>';
}


/**
 * Change the excerpt length
 */
function themesflat_excerpt_length( $length ) {  
    $excerpt = themesflat_get_opt('blog_archive_post_excepts_length');
    return $excerpt;
}
add_filter( 'excerpt_length', 'themesflat_excerpt_length', 999 );

/**
 * Blog layout
 */
function themesflat_blog_layout() {    
    switch (get_post_type()) {
        case 'page':
            $layout = themesflat_get_opt_elementor('page_sidebar_layout');   
            break;
        case 'post':
            $layout = themesflat_get_opt('sidebar_layout');
            if (is_single()) {
                $layout = themesflat_get_opt('blog_layout_single');
            }
            break;
        default:
            $layout = themesflat_get_opt('page_sidebar_layout');
            break;

    }

    if (is_search()) {
        $layout = themesflat_get_opt('sidebar_layout');
    }

    return $layout;
}

function themesflat_font_style($style) {
    if (strlen($style) > 3) {
        switch (substr($style, 0,3)) {
            case 'reg':
                $a[0] = '400';
                $a[1] = 'normal';
            break;
            case 'ita':
                $a[0] = '400';
                $a[1] = 'italic';               
            break;
            default:
                $a[0] = substr($style, 0,3);
                $a[1] = substr($style, 3);
            break;
        }
          
    }
    else {
        $a[0] = $style;
        $a[1] = 'normal';
    }
    return $a;
}

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
    /**
     * Filters wp_title to print a neat <title> tag based on what is being viewed.
     *
     * @param string $title Default title text for current view.
     * @param string $sep Optional separator.
     * @return string The filtered title.
     */
    function themesflat_wp_title( $title, $sep ) {
        if ( is_feed() ) {
            return $title;
        }

        global $page, $paged;

        // Add the blog name
        $title .= get_bloginfo( 'name', 'display' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            $title .= " $sep $site_description";
        }

        // Add a page number if necessary:
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
            $title .= " $sep " . sprintf( esc_html__( 'Page %s', 'xstar' ), max( $paged, $page ) );
        }

        return $title;
    }

    add_filter( 'wp_title', 'themesflat_wp_title', 10, 2 );

    /**
     * Title shim for sites older than WordPress 4.1.
     *
     * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
     * @todo Remove this function when WordPress 4.3 is released.
     */
    if ( ! function_exists( '_wp_render_title_tag' ) ) {
        function themesflat_render_title() {
            ?>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <?php
        }
        add_action( 'wp_head', 'themesflat_render_title' );
    }
    
endif;

function themesflat_hex2rgba($color, $opacity = false) {
 
    $default = 'rgb(0,0,0)';
 
    //Return default if no color provided
    if(empty($color))
          return $default; 
 
    //Sanitize $color if "#" is provided 
    if ($color[0] == '#' ) {
        $color = substr( $color, 1 );
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
            return $default;
    }

    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if($opacity){
        if(abs($opacity) > 1)
            $opacity = 1.0;
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
        $output = 'rgb('.implode(",",$rgb).')';
    }

    //Return rgb(a) color string
    return $output;
}

function themesflat_render_box_position($class,$box_control,$custom_string='') {
    $css = esc_attr($class) .'{';
    if (is_array($box_control)) {
        foreach ($box_control as $key => $value) {
            if ( $value !='') {
                $css .= esc_attr($key) .':'.esc_attr(str_replace("px","",$value)).'px; ';
            }
        }
    }
    $css .= esc_attr($custom_string);
    $css .= '}';

    wp_add_inline_style( 'main-css', $css );
}

function themesflat_render_style($class,$custom_string=''){
    $css = esc_attr($class) .'{';
    if (is_array($custom_string)) {
        foreach ($custom_string as $key => $value) {
            if ( $value !='') {
                $css .= esc_attr($key) .':'.esc_attr($value);
            }
        }
    }
    else {
        $css .= esc_attr($custom_string);
    }
    $css .= '}';
    add_action( 'wp_enqueue_scripts', 'themesflat_add_custom_styles',10,$css );
}

function themesflat_add_custom_styles($custom) {
    echo 'inhere';
    wp_add_inline_style( 'main-css', '.testimagebox{}' );
} 

function themesflat_get_json($key) {
    if ( get_theme_mod($key) == '' ) return themesflat_customize_default($key);
    if (!is_array(get_theme_mod($key))) {
    $decoded_value = json_decode(str_replace('&quot;', '"',  get_theme_mod( $key )), true );
    }
    else {
        $decoded_value = get_theme_mod($key);
    }
    return $decoded_value;
}

function themesflat_decode($value) {
    if (!is_array($value)) {
        $decoded_value = json_decode(str_replace('&quot;', '"',  $value) , true );
    }
    else {
        $decoded_value = $value;
    }
    return $decoded_value;
}

function themesflat_dynamic_sidebar($sidebar) {
    if ( is_active_sidebar ( $sidebar ) ) {
        dynamic_sidebar( $sidebar );        
    } 
}

/**
 * Get post meta, using rwmb_meta() function from Meta Box class
 */
function themesflat_meta( $key,$ID = '') {
    global $post;
    if ( $ID =='' && !is_null($post)) :
        return get_post_meta( $post->ID,$key, true );
    else:
        return get_post_meta($ID,$key,true);
    endif;
}

function themesflat_get_opt( $key ) {
    return get_theme_mod( $key, themesflat_customize_default( $key ) );
}

// function themesflat_load_page_menu($params) {
//     if ( themesflat_meta( 'enable_custom_navigator' ) == 1 && themesflat_meta('menu_location_primary') != false ) {
//         if ($params['theme_location'] == 'primary') {
//             $params['menu'] = (int)themesflat_meta('menu_location_primary');
//         }
//     }
//     return ($params);
// }

// add_filter( 'wp_nav_menu_args', 'themesflat_load_page_menu' );

function themesflat_render_social($prefix = '',$value='',$show_title=false) {
    if ($value == '') {
        $value = themesflat_get_json('social_links');
    }
    $class= array();
    $class[] = ($show_title == false ? 'themesflat-socials' : 'themesflat-widget-socials');

    if ( ! is_array( $value ) ) {
            $decoded_value = json_decode(str_replace('&quot;', '"', $value), true );
            $value = is_array( $decoded_value ) ? $decoded_value : array();
        }

    $icons = themesflat_available_social_icons();

    ?>
    <ul class="<?php echo esc_attr(implode(" ", $class));?>">
        <?php
        foreach ( $value as $key => $val ) {
            if ($key != '__ordering__') {
                $title = ($show_title == false ? '' : $icons[$key]['title']);
                printf(
                    '<li class="%1$s">
                        <a href="%2$s" target="_blank" rel="alternate" title="%4$s">
                            <i class="icon-xstar-%4$s"></i>                            
                        </a>
                    </li>',
                    esc_attr( $key ),
                    esc_url( $val ),
                    esc_attr( $val ),
                    esc_attr( $key ),
                    esc_html($title)
                );
            }
    }
        ?>
    </ul><!-- /.social -->       
    <?php 
}

function themesflat_preload_hook(){
    
    // Preloader
    if (themesflat_get_opt('enable_preload') == 1): ?>
        <div id="preloader">
            <div class="row loader">
                <div class="pulse-loader"><div class="double-bounce3"></div><div class="double-bounce4"></div></div>
            </div>
        </div>
    <?php endif;

    // Go Top
    if ( themesflat_get_opt( 'go_top') == 1 ) : ?>
        <div class="go-top">
            <i class="icon-xstar-angle-up"></i>
        </div>
    <?php endif;

    get_template_part( 'tpl/header/aside-toggler');

    if ( themesflat_get_opt( 'animation_cursor') == 1 ) : ?>
        <div class="tfmouseCursor cursor-outer"></div>
        <div class="tfmouseCursor cursor-inner"></div>
    <?php endif;
    
}
add_action( 'wp_body_open', 'themesflat_preload_hook' );


function themesflat_kses_allowed_html() {
    $allowed_tags = array(
        'a' => array(
            'class' => array(),
            'href'  => array(),
            'rel'   => array(),
            'title' => array(),
        ),
        'abbr' => array(
            'class' => array(),
            'title' => array(),
        ),
        'b' => array(),
        'blockquote' => array(
            'class' => array(),
            'cite'  => array(),
        ),
        'cite' => array(
            'class' => array(),
            'title' => array(),
        ),
        'code' => array(
            'class' => array(),
        ),
        'del' => array(
            'datetime' => array(),
            'title' => array(),
        ),
        'dd' => array(),
        'div' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'dl' => array(
            'class' => array(),
        ),
        'dt' => array(
            'class' => array(),
        ),
        'em' => array(
            'class' => array(),
        ),
        'h1' => array(
            'class' => array(),
            'style' => array(),
        ),
        'h2' => array(
            'class' => array(),
            'style' => array(),
        ),
        'h3' => array(
            'class' => array(),
            'style' => array(),
        ),
        'h4' => array(
            'class' => array(),
            'style' => array(),
        ),
        'h5' => array(
            'class' => array(),
            'style' => array(),
        ),
        'h6' => array(
            'class' => array(),
            'style' => array(),
        ),
        'i' => array(
            'class' => array(),
        ),
        'img' => array(
            'alt'    => array(),
            'class'  => array(),
            'height' => array(),
            'src'    => array(),
            'width'  => array(),
        ),
        'li' => array(
            'class' => array(),
            'style' => array(),
        ),
        'ol' => array(
            'class' => array(),
        ),
        'p' => array(
            'class' => array(),
            'style' => array(),
        ),
        'q' => array(
            'cite' => array(),
            'title' => array(),
            'class' => array(),
        ),
        'span' => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'strike' => array(
            'class' => array(),
        ),
        'strong' => array(
            'class' => array(),
        ),
        'ul' => array(
            'class' => array(),
            'style' => array(),
        ),
        'input' => array(
            'class' => array(),
            'id' => array(),
            'type' => array(),
            'value' => array(),
            'data-customize-setting-link' => array(),
            'placeholder' => array(),
            'name' => array(),
            'tabindex' => array(),
            'size' => array(),
            'aria-required' => array(),
        ),
        'label' => array(
            'class' => array(),
            'style' => array(),
            'for' => array(),
        ),
    );    
    return $allowed_tags;
}
add_filter( 'wp_kses_allowed_html', 'themesflat_kses_allowed_html', 10, 2);

function themesflat_change_archive_titles($orig_title) {    
    global $post;
    if ($post) {
        $post_type = $post->post_type;
    }else {
        $post_type = '';
    }
        
    $types = array(
    );

    if ( is_archive() ) {
        foreach ( $types as $k => $v) {
            if ( in_array($post_type, $types[$k])) {
            return $types[$k]['title'];
            }
        }
        
    } else { 
        return $orig_title;
    }
}
add_filter('wp_title', 'themesflat_change_archive_titles');

function themesflat_layout_draganddrop($blocks) {
    if ( ! is_array( $blocks ) ) {
        $blocks = explode( ',', $blocks );
    }
    $blocks = array_combine( $blocks, $blocks );
    return $blocks;
}

function themesflat_custom_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'" >
    <label>
        <span class="screen-reader-text">' . esc_html__( 'Search for:' , 'xstar' ) . '</span>
        <input type="search" value="' . get_search_query() . '" name="s" class="s" placeholder="' . esc_html__( "Search…", "xstar" ) . '"/>
    </label>
    <button type="submit" class="search-submit"><i class="fal fa-search"></i></button>    
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'themesflat_custom_search_form' );

function themesflat_social_single() {
    if( themesflat_get_opt('show_social_share') == 1 ):
        $value = themesflat_get_json('social_links');
        $sharelink = themesflat_available_social_icons();
        ?>
        <div class="social-share-article">
        <h5>Share</h5>
            <ul class="themesflat-socials">
                <?php
                    foreach ( $value as $key => $val ) {
                        if ( $key != '__ordering__') {
                            $link = $sharelink[$key]['share_link'].get_the_permalink();
                            printf(
                                '<li class="%1$s">
                                    <a href="%2$s" target="_blank" rel="alternate" title="%1$s">
                                        <i class="icon-xstar-%4$s"></i>
                                    </a>
                                </li>',
                                esc_attr( $key ),
                                esc_url( $link ),
                                esc_attr( $link ),
                                esc_attr( $key )
                            );
                        }
                    }
                ?>
            </ul>
        </div>
        <?php
    endif;
}

function themesflat_get_page_titles() {
    $title = '';
    
    if ( ! is_archive() ) {       
        if ( is_home() ) {
            if ( ! is_front_page() && $page_for_posts = get_option( 'page_for_posts' ) ) {
                $title = get_post_meta( $page_for_posts, 'custom_title', true );
                if ( empty( $title ) ) {
                    $title = get_the_title( $page_for_posts );
                }
            }
            if ( is_front_page() ) {
                $title = esc_html__('Blog', 'xstar');              
            }
        } 
        elseif ( is_page() ) {
            $title = get_post_meta( get_the_ID(), 'custom_title', true );
            if ( ! $title ) {
                $title = get_the_title();
            }
        } elseif ( is_404() ) {
            $title = esc_html__( '404', 'xstar' );
        } elseif ( is_search() ) {
            $title = sprintf( esc_html__( 'Search results for &#8220;%s&#8221;', 'xstar' ), get_search_query() );
        } else {
            $title = get_post_meta( get_the_ID(), 'custom_title', true );
            if ( ! $title ) {
                $title = get_the_title();
            } 
            if (is_single() && get_post_type() == 'post' && themesflat_get_opt('blog_featured_title') != ''){
                $title = themesflat_get_opt('blog_featured_title');
            } elseif(is_single() && get_post_type() == 'services' && themesflat_get_opt('services_featured_title') != ''){                
                $title = themesflat_get_opt('services_featured_title');
            } elseif(is_single() && get_post_type() == 'team' && themesflat_get_opt('team_featured_title') != ''){                
                $title = themesflat_get_opt('team_featured_title');
            } elseif(is_single() && get_post_type() == 'project' && themesflat_get_opt('project_featured_title') != ''){
                $title = themesflat_get_opt('project_featured_title');
            }
        }
    } else {
        if ( is_author() ) {
            the_post();
            $title = sprintf( esc_html__( 'Author: %s', 'xstar' ), get_the_author() );
            rewind_posts();
        } elseif ( is_day() ) {
            $title = sprintf( esc_html__( 'Daily: %s', 'xstar' ), get_the_date() );
        } elseif ( is_month() ) {
            $title = sprintf( esc_html__( 'Monthly: %s', 'xstar' ), get_the_date( 'F Y' ) );
        } elseif ( is_year() ) {
            $title = sprintf( esc_html__( 'Yearly: %s', 'xstar' ), get_the_date( 'Y' ) );
        } elseif ( is_search() ) {
            $title = sprintf( esc_html__( 'Search results for &#8220;%s&#8221;', 'xstar' ), get_search_query() );
        }
         elseif ( is_post_type_archive('emsb_service') ) {
            $title = esc_html__('Book Appointment','xstar');           
        }
         elseif ( is_tax() || is_category() || is_tag() ) {
            $title = single_term_title( '', false );
        } elseif ( is_post_type_archive('services') ) {
            $title = post_type_archive_title('', false);
            if (themesflat_get_opt('services_name') != '') {
                $title = themesflat_get_opt('services_name');
            }                      
        } elseif ( is_post_type_archive('project') ) {
            $title = post_type_archive_title('', false);
            if (themesflat_get_opt('project_name') != '') {
                $title = themesflat_get_opt('project_name');
            }                      
        } elseif ( is_post_type_archive('team') ) {
            $title = post_type_archive_title('', false);
            if (themesflat_get_opt('team_name') != '') {
                $title = themesflat_get_opt('team_name');
            }                      
        }
        
        
        else {
            $title = esc_html( wp_title('',FALSE) );
        }
    }

    return array(
        'title' => $title,
    );
}

