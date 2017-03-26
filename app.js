(function($){
    var menuLength = $(".menu>a").length;
    var offset = $(".menu>a").width()/2;
    var underlinePosition = -$(".menu>hr").width()*(menuLength/2)+offset;
    $(".menu>hr").css("margin-left", underlinePosition+"px");

    $("#icon").click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    })

    $("#site-cache").click(function(e){
        $('body').removeClass('with--sidebar');
    })

    $(".menu>a").click(function(e){
        e.stopPropagation();

        $('body').removeClass('with--sidebar');
        $(".tabs-content>.active").removeClass("active");

        $($(this).attr('href')).addClass('active');

        var element = $(this);
        offset = element.width()/2;

        offset += element.width()*$(".menu>a").index(this);
        underlinePosition = -element.width()*(menuLength/2)+offset;

        $(".menu>hr").css("margin-left", underlinePosition+"px");
    });

    $(".menu>a").hover(function(e){
        var element = $(this);
        offset = element.width()/2;

        offset += element.width()*$(".menu>a").index(this);

        $(".menu>hr").css("margin-left", (-element.width()*(menuLength/2)+offset)+"px");
    });

    $(".menu").mouseleave(function(e){
        $(".menu>hr").css("margin-left", underlinePosition+"px");
    });

})(jQuery);