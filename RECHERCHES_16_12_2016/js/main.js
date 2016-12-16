/* livre */

$('.livre_link').on('click', function(){
   $('.view').addClass('view_visible');
   $('.back').addClass('back_visible');
});

$('.back_link').on('click', function(){
   $('.view').removeClass('view_visible');
   $('.back').removeClass('back_visible');
});

$('.selection_link').on('click', function(){
   $('.view').toggleClass('view_visible');
});

$('.view_link').on('click', function(){
   $('.view').toggleClass('view_visible');
});

$('.bg_link').on('click', function(){
   $('.view').removeClass('view_visible');
});

// Random position

var posLeft = [ "0","5","10","15","20","25" ]
var posTop = [ "0","5","10","15","20","25" ]
var bStyle = [ "2","5","10" ]


$('.margin').each(function(i,el){

   var imgTop     = posTop[Math.floor(Math.random()   * posTop.length)]
   var imgLeft    = posLeft[Math.floor(Math.random()  * posLeft.length)]
   var imgBorder  = bStyle[Math.floor(Math.random()   * posLeft.length)]

   $(el).css({marginLeft: imgLeft + "px",
              marginTop: imgTop + "px",
              outline: imgBorder + "px solid white"});

});

//Random background

$(function() {
   var images = ['../img/fond2.png', '../img/fond3.png', '../img/fond4.png'];
   $('#backgroundSheet').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
});

// Popup

$('.ecoles_link').on('click', function(){
   $('.ecoles_popup').toggleClass('ecoles_popup_visible');
});
$('.selection_link').on('click', function(){
   $('.ecoles_popup').toggleClass('ecoles_popup_visible');
});