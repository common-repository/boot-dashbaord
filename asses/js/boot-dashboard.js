jQuery(document).ready(function( $ ) {
	
	//button button-primary button-hero load-customize hide-if-no-customize
    
    $.fn.replaceClass = function (pFromClass, pToClass) {
        return this.removeClass(pFromClass).addClass(pToClass);
    };
    
    // Button class change
    $('.button').replaceClass('button','btn');
    $('.button-primary').replaceClass('button-primary','btn-primary');
    $('.button-secondary').replaceClass('button-secondary','btn btn-success');
    $('.button-hero').replaceClass('button-hero','btn-lg');
    $('.show-settings').replaceClass('show-settings','btn-default');
    $('.page-title-action').replaceClass('page-title-action','btn btn-primary');
    
    // Input form class change
    $('.action-links .open-plugin-details-modal').addClass('btn');
    $('.inline-edit-save .cancel').addClass('btn-danger');
    $('.preview, .action-links .open-plugin-details-modal, .change-theme').addClass('btn-info');
    $('.action, #post-query-submit').addClass('btn-primary');
    $('#newmeta-submit, #search-submit, .tagadd, #save-post, .add-to-menu input[type=submit], .action-links .install-now, .theme-actions .activate, .upload-button, .actions .new, #accordion-section-add_menu .add-new-menu-item, #upgrade-themes, #upgrade-themes-2, #plupload-browse-button').addClass('btn-success');
    
	
});