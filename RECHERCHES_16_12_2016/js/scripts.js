var mason;

//pour tous
var color_base		= "0px 0px 50px white";
var color_change	= "0 0 0 black";

$(document).ready(function(){


	console.log("exemplaire 2017");


	$(".livre").each(function(index){


		var x = Math.random() * 100 - 50;
		var y = Math.random() * 100 - 50;


		// $(this).css("transform", "rotate("+angle+"deg)");
		$(this).css("transform", "translate("+x+"px, "+y+"px)");

   })


   $(".livre").mouseenter(function(e){
      var selection = $(this).data("ville");
      $(".livre[data-ville='"+selection+"']").addClass('select');

      $("#selection li").not(".titre").css("visibility","hidden");
      $("#selection li#" + selection).css("visibility","visible");

   })
	$(".livre").mouseleave(function(e){
		var selection = $(this).data("ville");		
		$(".livre[data-ville='"+selection+"']").removeClass('select');
	})



	$("#container").mason({
		itemSelector: ".box",
		ratio: 1.9,
		sizes: [
		[1,2],
		[2,2]
		],
		columns: [
		[0, 480, 2],
		[480, 1920, 27]
		],
		filler: {
			itemSelector: '.filler',
			filler_class: 'mason-filler'
		},
		layout: 'fluid',
		gutter: 0

	});
});

// Horizontal Scroll

$(document).ready(function() {
   $('html, body, *, #container').mousewheel(function(e, delta) {
      this.scrollLeft -= (delta * 10);
      e.preventDefault();
   });
});

// FFF

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

// Random position

var posLeft = [ "0","5","10","15","20","25" ]
var posTop = [ "0","5","10","15" ]
var bStyle = [ "2","5","10" ]


$('.margin').each(function(i,el){

   var imgTop     = posTop[Math.floor(Math.random()   * posTop.length)]
   var imgLeft    = posLeft[Math.floor(Math.random()  * posLeft.length)]
   var imgBorder  = bStyle[Math.floor(Math.random()   * posLeft.length)]

   $(el).css({marginLeft: imgLeft + "px",
              marginTop: imgTop + "px",
              outline: imgBorder + "px solid white"});

});

// Random background

$(function() {
   var images = ['../img/fond1.png', '../img/fond2.png', '../img/fond3.png', '../img/fond4.png'];
   $('#backgroundSheet').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')',
                              'background-size': 'contain'});
});

$(function() {
   var images = ['../img/nfond1.png', '../img/nfond2.png', '../img/nfond3.png', '../img/nfond4.png'];
   $('#nbackgroundSheet').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
});

// Random book test

//$(function() {
//   var images = ['../img/00-anri-sala-maurice-ravel-unravel-biennale-venise-2013-concerto-main-gauche-echenoz.jpg',
//                 '../img/ca7ed2c9-33a5bb3-05729.png',
//                 '../img/untitled.jpeg',
//                 '../img/xerox.jpg'];
//   $('.livre').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
//});

// Book Glitch

$(document).ready(function(){
   $(".livre").each(function(index){
      book_glitch(this);
   });


});

function book_glitch(target){
   console.log( $(target) );

   var nbr = Math.ceil(Math.random() * 10)+3;
   var shadow = new Array();
   
   var images = ['../img/00-anri-sala-maurice-ravel-unravel-biennale-venise-2013-concerto-main-gauche-echenoz.jpg',
                 '../img/ca7ed2c9-33a5bb3-05729.png',
                 '../img/untitled.jpeg',
                 '../img/xerox.jpg'];

   for(var i =0 ; i< nbr; i++){

      var x = i*20 + Math.random() * 10 ;
      var y = i*20 + Math.random() * 10 ;
      shadow.push( x + "px "+y+"px 0 black" )
   }

   console.log( shadow.join() );

   $(target).css('box-shadow',shadow.join() );

   $(target).css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
}

// Popup

$('.ecoles_link').on('click', function(){
   $('.ecoles_popup').toggleClass('ecoles_popup_visible');
});

//$(document).ready(function(){
//   $(".ecoles_popup li").each(function(index){
//      book_glitch(this);
//   });
//
//
//});
//
//function book_glitch(target){
//   console.log( $(target) );
//
//   var nbr = Math.ceil(Math.random() * 10)+3;
//   var shadow = new Array();
//
//   var images = ['../img/00-anri-sala-maurice-ravel-unravel-biennale-venise-2013-concerto-main-gauche-echenoz.jpg',
//                 '../img/ca7ed2c9-33a5bb3-05729.png',
//                 '../img/untitled.jpeg',
//                 '../img/xerox.jpg'];
//
//   for(var i =0 ; i< nbr; i++){
//
//      var x = i*20 + Math.random() * 10 ;
//      var y = i*20 + Math.random() * 10 ;
//      shadow.push( x + "px "+y+"px 0 black" )
//   }
//
//   console.log( shadow.join() );
//
//   $(target).css('box-shadow',shadow.join() );
//}