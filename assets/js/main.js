$(document).ready(function(){

//EXPERIMENTATIONS LIVRES

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
	var images = ['img/fond2.png', 'img/fond3.png', 'img/fond4.png'];
	$('#backgroundSheet').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
});

// Popup

$('.ecoles_link').on('click', function(){
	$('.ecoles_popup').toggleClass('ecoles_popup_visible');
});
$('.selection_link').on('click', function(){
	$('.ecoles_popup').toggleClass('ecoles_popup_visible');
});

//glitching


	$(".glitch").each(function(index){
		book_glitch(this);
	});







function book_glitch(target){
	console.log( $(target) );

	var nbr = Math.ceil(Math.random() * 10)+3;
	var shadow = new Array();

	for(var i =0 ; i< nbr; i++){

		var x = i*20 + Math.random() * 10 ;
		var y = i*20 + Math.random() * 10 ;
		shadow.push( x + "px "+y+"px 0 #000" )
	}



	$(target).css('box-shadow',shadow.join() );
}



// PAGE : TABLEAU > programme on click


	$('td.event').each(function (index, value){
		var hidden = $(this).find('.detail');

		$(this).click(function(){
			$(hidden).toggle();
		});

	});


	$('#intervenants ul li').each(function (index, value){

		var bio= $(this).find(' li:nth-child(1)');
		bio.addClass('invisible');
var wesh=$(this).find("em");
console.log($(wesh).text());

		$(this).click(function(){
			$(bio).toggle();
			    if($(bio).is(':visible')){
          $(wesh).html('&#65516;');
    }else{
          $(wesh).html('&#65515;');
    }

		});

	});




$('.rubrique').each( function(){
var cate=this.id;
console.log(cate);

   $('.rubrique').not(this).css({"background-color":"black", "z-index":"-1"});
   $(cate).css("z-index","10");

});



$(".event").click(function(){

	var bro = $(this).find(".i");

	$(bro).html('&#65516;');
	
    if($('.detail').is(':visible')){
          $(bro).html('&#65516;');
    }else{
          $(bro).html('&#65515;');
    }
});
	
// TOUS : MENU > sous-menus 


$('ul.menu.programme').find('ul.sous-menu#programme').removeClass('invisible');
$('ul.menu.selection').find('ul.sous-menu#selection').removeClass('invisible');
$('ul.menu.home').find('ul.sous-menu#selection').removeClass('invisible');

   
// Horizontal Scroll

$('#mosaic, #mosaic-scroll').mousewheel(function(e, delta) {
   this.scrollLeft -= (delta * 10);
   e.preventDefault();
});

   // Random background

   var link = [];
   link[0] = "assets/css/green.css";
   link[1] = "assets/css/blue.css";
   link[2] = "assets/css/red.css";


   $(function() {
      var style = link[Math.floor(Math.random() * link.length )];
      $('<link />',{
         rel :'stylesheet',
         type:'text/css',
         href: style
      }).appendTo('head');
   });

   // Random background pour les pages de livres

   var underlink = [];
   underlink[0] = "../assets/css/green.css";
   underlink[1] = "../assets/css/blue.css";
   underlink[2] = "../assets/css/red.css";


   $(function() {
      var style = underlink[Math.floor(Math.random() * underlink.length )];
      $('<link />',{
         rel :'stylesheet',
         type:'text/css',
         href: style
      }).appendTo('head');
   });

   // Accés
   
   $('#acces li').on('click', function(e){
      $('#acces li').removeClass('visible');
   })
   $('#acces li').on('click', function(e){
      $(this).addClass('visible');
   })
   
   // End
});






