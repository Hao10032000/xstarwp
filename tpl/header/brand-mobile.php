<?php
$logo_site = themesflat_get_opt('site_logo_mobile');
if ( $logo_site ) : ?>
    <div id="logo-mobi" class="logo" >                  
        <a href="<?php echo esc_url( home_url('/') ); ?>"  title="<?php bloginfo('name'); ?>">
            <?php if  (!empty($logo_site)) { ?>
                <img class="site-logo" width="169" height="32" src="<?php echo esc_url($logo_site); ?>" alt="<?php bloginfo('name'); ?>" />
            <?php } ?>
        </a>
    </div>
<?php else : ?>
    <div id="logo-mobi" class="logo">
        <h6 class="site-title"><a href="<?php echo esc_url( home_url('/') ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h6>			
    </div><!-- /.site-infomation -->          
<?php endif; ?>