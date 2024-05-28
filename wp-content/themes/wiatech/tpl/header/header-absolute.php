<?php 
$header_search_box = themesflat_get_opt('header_search_box');
if (themesflat_get_opt_elementor('header_search_box') != '') {
    $header_search_box = themesflat_get_opt_elementor('header_search_box');
}

$information_email = themesflat_get_opt('information_email');

$information_phone = themesflat_get_opt('information_phone');

$information_address = themesflat_get_opt('information_address');

$header_infor_phone = themesflat_get_opt('header_infor_phone');
if (themesflat_get_opt_elementor('header_infor_phone') != '') {
    $header_infor_phone = themesflat_get_opt_elementor('header_infor_phone');
}

$header_button = themesflat_get_opt('header_button');
if (themesflat_get_opt_elementor('header_button') != '') {
    $header_button = themesflat_get_opt_elementor('header_button');
}

$header_button_text = themesflat_get_opt('header_button_text');

$header_button_url = themesflat_get_opt('header_button_url');

$header_sidebar_toggler = themesflat_get_opt('header_sidebar_toggler');
if (themesflat_get_opt_elementor('header_sidebar_toggler') != '') {
    $header_sidebar_toggler = themesflat_get_opt_elementor('header_sidebar_toggler');
}

$topbar_address = themesflat_get_opt('topbar_address');

$show_topbar = themesflat_get_opt('show_topbar');
if (themesflat_get_opt_elementor('show_topbar') != '') {
    $show_topbar = themesflat_get_opt_elementor('show_topbar');
}

$topbar_mail = themesflat_get_opt('topbar_mail');

$topbar_menu = themesflat_get_opt('topbar_menu');

$topbar_social = themesflat_get_opt('topbar_social');

?>

<?php if ( $show_topbar == 1 ) :?>
<div class="topbar-wrap style-absolute">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="inner-wrap">
                    <div class="topbar-left">
                        <?php if ( $topbar_address == 1 || $topbar_mail == 1 )  :?>
                        <ul class="list-infor-topbar">
                            <?php if ( $topbar_address == 1 ) :?>
                                <li></a> <i class="icon-xstar-location-dot-2"></i> <?php echo esc_html($information_address); ?></li>
                            <?php endif;?>
                            <?php if ( $topbar_mail == 1 ) :?>
                                <li> <a href="mailto:<?php echo esc_attr($information_email); ?>"><i class="icon-xstar-envelope-2"></i> <span><?php echo esc_html($information_email); ?></span> </a></li>
                            <?php endif;?>
                        </ul>
                        <?php endif;?>
                    </div>
                    <?php if ( $topbar_menu == 1 || $topbar_social == 1 )  :?>
                    <div class="topbar-right">
                        <?php if ( $topbar_menu == 1 ) :?>
                        <div class="topbar-menu">
                            <?php
                                wp_nav_menu( array( 'theme_location' => 'topbar', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );
                            ?>
                        </div>
                        <?php endif;?>
                        <?php if ( $topbar_social == 1 ) :?>
                        <div class="topbar-social">
                            <?php themesflat_render_social();   ?>
                        </div>
                        <?php endif;?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<header id="header" class="header header-default style-absolute">
    <div class="inner-header">  
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-wrap clearfix">
                        <div class="header-ct-left">
                            <?php get_template_part( 'tpl/header/brand'); ?>
                        </div>
                        <div class="header-ct-center">
                            <div class="inner-center">
                                <?php get_template_part( 'tpl/header/navigator'); ?>
                            </div>
                            <?php if ( $header_search_box == 1 ) :?>
                                <div class="show-search">
                                    <a href="#"><i class="icon-xstar-search"></i></a> 
                                    <div class="submenu top-search widget_search">
                                        <?php get_search_form(); ?>
                                    </div>        
                                </div> 
                        <?php endif;?>
                        </div>
                    <?php if( $header_button == 1 || $header_infor_phone == 1): ?>
                        <div class="header-ct-right">
                            <?php if ( $header_infor_phone == 1 ) :?>
                                <a href="tel:<?php echo esc_attr($information_phone); ?>" class="header-infor-phone">
                                  <i class="icon-xstar-phone"></i> 
                                <?php echo esc_html($information_phone); ?>
                            </a>
                            <?php endif;?>     
                            <?php if ( $header_button == 1 ) :?>
                                <a href="<?php echo get_permalink ( get_theme_mod ( 'header_button_url' )); ?>" class="tf-btn <?php if(!is_user_logged_in()) echo 'display-pop-login'; ?>"><?php echo wp_kses($header_button_text, themesflat_kses_allowed_html()); ?><span></span></a> 
                            <?php endif;?> 
                            <?php if ( $header_sidebar_toggler == 1 ) :?>
                            <div class="header-modal-menu-left-btn">
                                <div class="modal-menu-left-btn">
                                    <div class="line line--1"></div>
                                    <div class="line line--2"></div>
                                    <div class="line line--3"></div>
                                </div>
                                <span class="span-modal-menu-left-btn"><?php esc_html_e( 'Menu','xstar' ) ?></span>
                            </div><!-- /.header-modal-menu-left-btn -->
                            <?php endif;?>        
                        </div>
                    <?php endif; ?>
                    <div class="btn-menu">
                        <span class="line-1"></span>
                    </div><!-- //mobile menu button -->
                    </div>                
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <div class="canvas-nav-wrap">
        <div class="overlay-canvas-nav"><div class="canvas-menu-close"><span></span></div></div>
        <div class="inner-canvas-nav">
            <div class="group-header-logo">
                <?php get_template_part( 'tpl/header/brand-mobile'); ?>
            </div>

            <div class="bottom-canvas-nav">
                <nav id="mainnav_canvas" class="mainnav_canvas" role="navigation">
                    <?php
                        wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );
                    ?>
                </nav><!-- #mainnav_canvas -->
                <div class="wrap-btn-mobile">
                    <a href="<?php echo get_permalink ( get_theme_mod ( 'header_button_url' )); ?>" class="tf-btn <?php if(!is_user_logged_in()) echo 'display-pop-login'; ?>"><?php echo wp_kses($header_button_text, themesflat_kses_allowed_html()); ?><span></span></a> 
                </div>      
            
            </div>


        </div>
    </div><!-- /.canvas-nav-wrap --> 
</header><!-- /.header --> 

