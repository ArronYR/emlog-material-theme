(function($){
    $(function(){
        $('input#search').focus(function() { $(this).parents('.search-wrapper').addClass('focused'); });
        $('input#search').blur(function() {
            if (!$(this).val()) {
                $(this).parents('.search-wrapper').removeClass('focused');
            }
        });
        $('input#search').siblings('i').on('click', function(event) {
            event.preventDefault();
            if ($(this).siblings('input#search').val()) {
                $(this).parent('form[name=keyform]').submit();
            }
        });

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    });

})(jQuery);