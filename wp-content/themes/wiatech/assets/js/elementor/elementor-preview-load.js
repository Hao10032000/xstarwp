;(function($) {
    "use strict";

    jQuery(document).ready(function(){
        //Header
        elementor.settings.page.addChangeCallback( 'style_header', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'site_logo', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_search_box', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_infor_phone', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_sidebar_toggler', handleReloadPreview );
        elementor.settings.page.addChangeCallback( 'header_button', handleReloadPreview );
    });

    function handleReloadPreview ( newValue ) {
        elementor.saver.saveEditor({
            status: elementor.settings.page.model.get('post_status'),
            onSuccess: () => {
                elementor.reloadPreview();

                elementor.once("preview:loaded", function() {
                    elementor.getPanelView().setPage("page_settings");
                });
            }
        })
    }

})(jQuery);