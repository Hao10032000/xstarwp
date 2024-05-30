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
<div class="topbar-wrap style-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-wrap">
                    <div class="topbar-left">
                        <?php if ( $topbar_address == 1 || $topbar_mail == 1 )  :?>
                        <ul class="list-infor-topbar">
                            <?php if ( $topbar_address == 1 ) :?>
                            <li></a>
                                <div class="icon">
                                    <svg width="20" height="20" viewBox="0 0 54 54" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M51.925 42.825C51.925 43.725 51.725 44.65 51.3 45.55C50.875 46.45 50.325 47.3 49.6 48.1C48.375 49.45 47.025 50.425 45.5 51.05C44 51.675 42.375 52 40.625 52C38.075 52 35.35 51.4 32.475 50.175C29.6 48.95 26.725 47.3 23.875 45.225C21 43.125 18.275 40.8 15.675 38.225C13.1 35.625 10.775 32.9 8.7 30.05C6.65 27.2 5 24.35 3.8 21.525C2.6 18.675 2 15.95 2 13.35C2 11.65 2.3 10.025 2.9 8.525C3.5 7 4.45 5.6 5.775 4.35C7.375 2.775 9.125 2 10.975 2C11.675 2 12.375 2.15 13 2.45C13.65 2.75 14.225 3.2 14.675 3.85L20.475 12.025C20.925 12.65 21.25 13.225 21.475 13.775C21.7 14.3 21.825 14.825 21.825 15.3C21.825 15.9 21.65 16.5 21.3 17.075C20.975 17.65 20.5 18.25 19.9 18.85L18 20.825C17.725 21.1 17.6 21.425 17.6 21.825C17.6 22.025 17.625 22.2 17.675 22.4C17.75 22.6 17.825 22.75 17.875 22.9C18.325 23.725 19.1 24.8 20.2 26.1C21.325 27.4 22.525 28.725 23.825 30.05C25.175 31.375 26.475 32.6 27.8 33.725C29.1 34.825 30.175 35.575 31.025 36.025C31.15 36.075 31.3 36.15 31.475 36.225C31.675 36.3 31.875 36.325 32.1 36.325C32.525 36.325 32.85 36.175 33.125 35.9L35.025 34.025C35.65 33.4 36.25 32.925 36.825 32.625C37.4 32.275 37.975 32.1 38.6 32.1C39.075 32.1 39.575 32.2 40.125 32.425C40.675 32.65 41.25 32.975 41.875 33.4L50.15 39.275C50.8 39.725 51.25 40.25 51.525 40.875C51.775 41.5 51.925 42.125 51.925 42.825Z"
                                            stroke="currentColor" stroke-width="4" stroke-miterlimit="10"></path>
                                        <path d="M37.5742 16.4252L46.4242 7.5752" stroke="currentColor" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M46.4242 16.4252L37.5742 7.5752" stroke="currentColor" stroke-width="4"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>

                                <?php echo esc_html($information_address); ?>
                            </li>
                            <?php endif;?>
                            <?php if ( $topbar_mail == 1 ) :?>
                            <li> <a href="mailto:<?php echo esc_attr($information_email); ?>">
                                    <div class="icon">
                                        <svg width="20" height="20" viewBox="0 0 69 54" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.04604 3.04604C3.69236 2.39975 4.58521 2 5.57143 2H62.7143C63.7004 2 64.5932 2.39975 65.2396 3.04604M3.04604 3.04604C2.39975 3.69236 2 4.58521 2 5.57143V48.4286C2 50.4011 3.599 52 5.57143 52H41.2857M3.04604 3.04604L9.14286 9.14307M65.2396 3.04604C65.8861 3.69236 66.2857 4.58521 66.2857 5.57143V48.4286C66.2857 50.4011 64.6868 52 62.7143 52H55.5714M65.2396 3.04604L39.1936 29.0918C36.4039 31.8814 31.8814 31.8814 29.0918 29.0918L19.8571 19.8571"
                                                stroke="currentColor" stroke-width="4" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <?php echo esc_html($information_email); ?>
                                </a>
                            </li>
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

<header id="header" class="header header-02">
    <div class="inner-header">
        <div class="container-fluid">
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
                        </div>
                        <?php if( $header_button == 1 || $header_infor_phone == 1): ?>
                        <div class="header-ct-right">
                            <?php if ( $header_infor_phone == 1 ) :?>
                            <a href="tel:<?php echo esc_attr($information_phone); ?>" class="header-infor-phone">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_6577_1298)">
                                            <path
                                                d="M21.2438 18.1073L17.7431 14.6066C17.0144 13.8779 15.8329 13.8771 15.1034 14.6066L14.0839 15.6261C11.7543 14.2035 9.79723 12.2464 8.37459 9.91682L9.49247 8.79899C10.2202 8.07121 10.2202 6.88701 9.49242 6.15923L5.9917 2.65851C5.26504 1.93194 4.08525 1.92519 3.34978 2.66071L1.14994 4.87766C0.0974045 5.76145 -0.272814 7.21251 0.207186 8.58777C2.67028 15.6461 8.35472 21.3305 15.413 23.7936C16.7409 24.2569 18.1046 23.9104 18.9717 23.0171C18.9842 23.006 18.9964 22.9946 19.0084 22.9826L21.2438 20.7471C21.9716 20.0193 21.9716 18.8352 21.2438 18.1073ZM20.1287 19.6319L17.9437 21.8168C17.9171 21.839 17.8919 21.863 17.8681 21.8888C17.4082 22.3887 16.6684 22.5613 15.9327 22.3044C9.32433 19.9984 4.00237 14.6764 1.69631 8.06802C1.43226 7.31141 1.62276 6.52752 2.18165 6.07091C2.20289 6.05357 2.22323 6.0351 2.24255 6.01565L4.46719 3.77366C4.49403 3.74672 4.52593 3.72536 4.56106 3.71081C4.5962 3.69626 4.63386 3.6888 4.67189 3.68887C4.7167 3.68887 4.80281 3.69984 4.87659 3.77366L8.37722 7.27438C8.43142 7.32871 8.46186 7.40231 8.46187 7.47905C8.46188 7.55579 8.43145 7.6294 8.37726 7.68374L6.82837 9.23263C6.70656 9.35442 6.62798 9.51274 6.60464 9.68339C6.58129 9.85405 6.61447 10.0277 6.69909 10.1777C8.37983 13.1574 10.8433 15.6209 13.8231 17.3016C13.9731 17.3862 14.1467 17.4194 14.3173 17.3961C14.488 17.3727 14.6463 17.2942 14.7681 17.1724L16.2187 15.7218C16.273 15.6676 16.3466 15.6371 16.4233 15.6371C16.5001 15.6371 16.5737 15.6676 16.628 15.7218L20.1287 19.2225C20.1829 19.2769 20.2133 19.3505 20.2133 19.4272C20.2133 19.504 20.1829 19.5776 20.1287 19.6319ZM12.6048 6.15604C12.1693 6.15604 11.8162 6.5091 11.8162 6.94462C11.8162 7.38013 12.1692 7.73319 12.6048 7.73319C14.6244 7.73319 16.2675 9.37631 16.2675 11.396C16.2675 11.8315 16.6206 12.1845 17.0561 12.1845C17.4916 12.1845 17.8447 11.8315 17.8447 11.396C17.8447 8.50668 15.4941 6.15604 12.6048 6.15604Z"
                                                fill="white"></path>
                                            <path
                                                d="M12.7779 3C12.3483 3 12 3.34828 12 3.7779C12 4.20752 12.3482 4.5558 12.7779 4.5558C16.4537 4.5558 19.4442 7.54629 19.4442 11.2221C19.4442 11.6517 19.7925 12 20.2221 12C20.6517 12 21 11.6517 21 11.2221C21 6.68844 17.3116 3 12.7779 3Z"
                                                fill="white"></path>
                                            <path
                                                d="M20.7128 3.28719C18.593 1.1674 15.7745 0 12.7767 0C12.3477 0 12 0.347735 12 0.776679C12 1.20562 12.3477 1.55336 12.7767 1.55336C18.1087 1.55336 22.4466 5.89127 22.4466 11.2233C22.4466 11.6523 22.7944 12 23.2233 12C23.6523 12 24 11.6523 24 11.2233C24 8.22542 22.8326 5.40702 20.7128 3.28719Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_6577_1298">
                                                <rect width="24" height="24" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <?php echo esc_html($information_phone); ?>
                            </a>
                            <?php endif;?>
                            <?php if ( $header_button == 1 ) :?>
                            <a href="<?php echo get_permalink ( get_theme_mod ( 'header_button_url' )); ?>"
                                class="tf-btn <?php if(!is_user_logged_in()) echo 'display-pop-login'; ?>"><?php echo wp_kses($header_button_text, themesflat_kses_allowed_html()); ?><span></span></a>
                            <?php endif;?>
                            <?php if ( $header_search_box == 1 ) :?>
                            <div class="show-search">
                                <a href="#"><i class="fal fa-search"></i></a>
                                <div class="submenu top-search widget_search">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
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
        <div class="overlay-canvas-nav">
            <div class="canvas-menu-close"><span></span></div>
        </div>
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
                    <a href="<?php echo get_permalink ( get_theme_mod ( 'header_button_url' )); ?>"
                        class="tf-btn <?php if(!is_user_logged_in()) echo 'display-pop-login'; ?>"><?php echo wp_kses($header_button_text, themesflat_kses_allowed_html()); ?><span></span></a>
                </div>

            </div>


        </div>
    </div><!-- /.canvas-nav-wrap -->
</header><!-- /.header -->