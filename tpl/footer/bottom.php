<?php
if (themesflat_get_opt('show_bottom') == 1):     
    ?>
<div id="bottom" class="bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inside <?php echo esc_attr(themesflat_get_opt('show_footer_navigation') == 1 ? '' : 'hide');?>">
                    <div class="content-left">
                        <div class="copyright">
                            <span><?php echo wp_kses(themesflat_get_opt( 'footer_copyright'), themesflat_kses_allowed_html()); ?></span>
                        </div>
                    </div>
                    <?php if (themesflat_get_opt('show_footer_navigation') == 1): ?>
                    <div class="content-right">
                        <div class="menu-bottom">
                            <?php wp_nav_menu( array( 'theme_location' => 'bottom', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<?php endif; ?>