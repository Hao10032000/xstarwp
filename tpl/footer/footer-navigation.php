<?php 
    $action_box_button_image = themesflat_get_opt('action_box_button_image');
    $show_action_box = themesflat_get_opt('show_action_box');
    if ($show_action_box == 1) : 
    $action_box_text = themesflat_get_opt('action_box_text');
    $action_box_button_text = themesflat_get_opt('action_box_button_text');
    $action_box_button_url = themesflat_get_opt('action_box_button_url');
?>
<div class="themesflat-action-box">
    <div class="container">
        <div class="wrap-action-box">
            <div class="content-left">
                <h2 class="heading"><?php echo themesflat_get_opt('action_box_text'); ?></h2>
            </div>
            <div class="content-right">
                <?php if(!empty($action_box_button_image)): ?>
                    <a href="<?php echo esc_url(themesflat_get_opt('action_box_button_url')) ?>"
                    class="tf-btn-ac button">
                    <img src="<?php echo esc_url($action_box_button_image); ?>" alt="image">    
                </a>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
