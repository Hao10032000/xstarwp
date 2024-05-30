<?php  
/**
 * @package xstar
 */
?>
<div class="entry-box-title clearfix">
	<div class="wrap-entry-title">							
		<?php
		if ( is_singular('post') ) :						
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		if ( get_post_format() == 'quote' ) {
			printf(
			'<a class="author-quote" href="%s" title="%s" rel="author"><span>%s</span> </a>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'xstar' ), get_the_author() ) ),get_the_author());
		}
		?>										
	</div><!-- /.wrap-entry-title -->
</div>
