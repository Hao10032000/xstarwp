<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package xstar
 */
?>
</div><!-- #content -->
</div><!-- #main-content -->

<?php get_template_part( 'tpl/partner'); ?>

<!-- Start Footer -->
<div class="footer_background <?php echo themesflat_get_opt('footer_fixed') == 1 ? esc_attr( 'footer-fixed' ) : '' ;?>">
    <div class="overlay-footer"></div>

    <!-- Footer navigation -->
    <?php get_template_part( 'tpl/footer/footer-navigation'); ?>

    <div class="container">
        <div class="col-md-12">
            <div class="footer-divide"></div>
        </div>
    </div>

    <!-- Footer Widget -->
    <?php get_template_part( 'tpl/footer/footer-widgets'); ?>

    <!-- Bottom -->
    <?php get_template_part( 'tpl/footer/bottom'); ?>

</div> <!-- Footer Background Image -->
<!-- End Footer -->

</div><!-- /#boxed -->
<?php wp_footer(); ?>
</body>

</html>