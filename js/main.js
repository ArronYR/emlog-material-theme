(function($){
    $(function(){
        $('input#search').focus(function() { $(this).parent().addClass('focused'); });
        $('input#search').blur(function() {
            if (!$(this).val()) {
                $(this).parent().removeClass('focused');
            }
        });

        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    });

})(jQuery);