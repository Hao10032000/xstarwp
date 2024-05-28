<?php
/**
 * @package xstar
 */

if ( get_post_format() != 'quote' ) {
echo '<div class="themesflat-button-container"><a class="themesflat-btn-blog" href="'.get_the_permalink().'" rel="nofollow">'.themesflat_get_opt( 'blog_archive_readmore_text').'</a></div>';
}