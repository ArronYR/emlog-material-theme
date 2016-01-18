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

        $(window).scroll(function(){
            if ( $(window).scrollTop() > 400){
                $("#fixed-menu").removeClass('hide').fadeIn(500);
            }else{
                $("#fixed-menu").fadeOut(500);
            }
        });

        $('#pagenavi').find('a').wrap('<li class="waves-effect"></li>').end().find('span').wrap('<li class="active"></li>')

        $("#goto-top").click(function(){
            $('body,html').animate({scrollTop:0},1000);
            return false;
        });

        prettyPrint();
    });

})(jQuery);