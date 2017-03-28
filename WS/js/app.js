$('#day').click(function(e){
    $('body').removeClass("night");
});

$('#night').click(function(e){
    $('body').addClass("night");
});

var emptyCase = {x: 4,
                 y: 4};
var nbDeplacement = 0;

function move(x, y, button){
    if ((x == emptyCase.x && y == emptyCase.y) ||
        Math.abs(x-emptyCase.x) + Math.abs(y-emptyCase.y) >= 2){
        return 0;
    }


    emptyCase.x = x;
    emptyCase.y = y;

    var value = $(button).val();

    $('.emptyCase').val(value);
    $('.emptyCase').removeClass('emptyCase');
    $(button).val(" ");
    $(button).addClass('emptyCase');

    nbDeplacement ++;

    $('.score').html(nbDeplacement);

    console.log($('.score'));
}

$('.case').click(function(e){
    e.preventDefault();
    if (!$(this).hasClass("return") && !$(this).hasClass("valide")){
        $(this).addClass("return");
        $(this).append("<img src=\"img/vignette" + $(this).attr('class').split(' ')[1] + ".jpg\" alt=\"image\">")

        if ($('.case.return').length == 2){
            if($('.case.return.'+$(this).attr('class').split(' ')[1]).length == 2) {
                $('.case.return.'+$(this).attr('class').split(' ')[1]).addClass("valide");
            } else {
                $('.case.return').children().remove();
            }
            $('.case.return').removeClass("return");
        }
    } else if (!$(this).hasClass("valide")){
        $(this).removeClass("return");
        
        $(this).children().remove();
    }
});