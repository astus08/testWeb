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
                $('.case.return').removeClass("return");
            } else {
                setTimeout(function() {
                    $('.case.return').children().remove();
                    console.log($('.case.return'));
                    $('.case.return').removeClass("return");
;                }, 1000);
            }
        }
    } else if (!$(this).hasClass("valide")){
        $(this).removeClass("return");
        
        $(this).children().remove();
    }
});

function initGame() {
    var tableCase = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8];

    for(var position=tableCase.length-1; position>=1; position--){
	
        //hasard reçoit un nombre entier aléatoire entre 0 et position
        var hasard=Math.floor(Math.random()*(position+1));
        
        //Echange
        var sauve=tableCase[position];
        tableCase[position]=tableCase[hasard];
        tableCase[hasard]=sauve;
    }
    var i = 0;

    $('div.case').each(function( index ) {
        $(this).addClass('' + tableCase[i]);
        console.log(tableCase[i]);
        i++;
    });

    console.log(tableCase);

}