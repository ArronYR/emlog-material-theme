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
        $("#goto-top").click(function(){
            $('body,html').animate({scrollTop:0},1000);
            return false;
        });

        $('pre[class*=lang-]').addClass('prettyprint linenums');

        $('#pagenavi').find('a').wrap('<li class="waves-effect"></li>').end().find('span').wrap('<li class="active"></li>')

        $('.comment-reply a').on('click', function(event) {
            event.preventDefault();
            var response = document.getElementById('comment-post');
            document.getElementById('comment-pid').value = $(this).attr('cid');
            $('#comment-modal').find('#comment-body').append(response);
            $('#comment-modal').openModal({
                dismissible: true,
                opacity: .5,
                in_duration: 300,
                out_duration: 200,
                ready: function() { console.log('Ready'); },
                complete: function() {
                    $('#comment-place').append(response);
                    document.getElementById('comment-pid').value = 0;
                }
            });
        });

        prettyPrint();
    });

})(jQuery);