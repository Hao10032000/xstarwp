<?php
/**
 * @package xstar
 */
 echo'<div class="themesflat-button-container">';
if ( get_post_format() != 'quote' ) {
echo '<a class="themesflat-btn-blog" href="'.get_the_permalink().'" rel="nofollow">'.themesflat_get_opt( 'blog_archive_readmore_text').'</a>';
}
themesflat_social_single();
echo'</div>';
