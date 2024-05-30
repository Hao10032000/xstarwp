<?php  
/**
 * @package xstar
 */
?>
<?php 
echo '<div class="post-meta">';
    $meta_elements = themesflat_layout_draganddrop(themesflat_get_opt( 'meta_elements' ));
    foreach ( $meta_elements as $meta_element ) :
        if ( 'date' == $meta_element ) {
            echo '<span class="item-meta post-date">';   
                $archive_year  = get_the_time('Y'); 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d');                 
                echo '<a class="meta-text" href="'.get_day_link( $archive_year, $archive_month, $archive_day).'">'.get_the_date().'</a>';
            echo '</span>';
        } elseif ( 'category' == $meta_element ) {
            echo '<span class="item-meta post-categories">'.esc_html__("",'xstar');
                the_category( ', ' );
            echo '</span>';
        } elseif ( 'comment' == $meta_element ) {
            echo'<span class="item-meta post-comments"><span class="meta-text">';
                    comments_number ();
            echo '</span></span>';
        } elseif ( 'view' == $meta_element ) {
            echo '<span class="item-meta post-view">'. themesflat_get_post_views(get_the_ID()) .'</span>';
        }
    endforeach;
echo '</div>';
?>