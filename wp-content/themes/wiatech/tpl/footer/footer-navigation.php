<?php

if (themesflat_get_opt('show_footer_navigation') == 1) : ?>  
    <div class="footer-navigation"> 
        <div class="container">
            <div class="wrap-navigation">
                <div class="content-left">
                    <?php get_template_part( 'tpl/footer/brand-ft'); ?>
                </div>
                <?php if (themesflat_get_opt('show_footer_navigation_social') == 1) : ?>
                <div class="content-right">
                    <?php themesflat_render_social();   ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>