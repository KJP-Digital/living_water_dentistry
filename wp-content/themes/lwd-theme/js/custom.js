// NAVIGATION - TAB/MOBILE VIEW
$('.nav-menu-icon').click(function(){
    $("html").toggleClass("menu-open");
});
$('.menu-open .nav-menu-icon:before').click(function(){
    $("html").removeClass("menu-open");
});
$('.close-ico-mob').click(function(){
    $("html").removeClass("menu-open");
});

//FOOTER RESPONSIVE EXPAND COLLAPSE JS
$(".panelheading").click(function(){
    var $ans = $(this).next(".panel-content");
    var $ico = $(this);
    $ans.slideToggle(500);
    $ico.toggleClass("show");
    $(".panel-content").not($ans).slideUp(500);
    $(".panelheading").not($ico).removeClass("show");
});