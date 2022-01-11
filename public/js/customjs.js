// pricing table mobile version
$('.bronze-mobile').on( "click", function() {
    $("[data-col='2'],[data-col='3']").css("display","none");
    $("[data-col='1']").css("display","block");
    $(".silver-mobile").animate({height:"55px"}, 500);
    $(".gold-mobile").animate({height:"55px"}, 500);
    $(".bronze-mobile").animate({height:"80px"}, 500);
});
$('.silver-mobile').on( "click", function() {
    $("[data-col='1'],[data-col='2']").css("display","none");
    $("[data-col='3']").css("display","block");
    $(".bronze-mobile").animate({height:"55px"}, 500);
    $(".gold-mobile").animate({height:"55px"}, 500);
    $(".silver-mobile").animate({height:"80px"}, 500);
});
$('.gold-mobile').on( "click", function() {
    $("[data-col='1'],[data-col='3']").css("display","none");
    $("[data-col='2']").css("display","block");
    $(".bronze-mobile").animate({height:"55px"}, 500);
    $(".silver-mobile").animate({height:"55px"}, 500);
    $(".gold-mobile").animate({height:"80px"}, 500);
});