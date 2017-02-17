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


	$('td.inter').each(function (index, value){
		var hidden = $(this).find('.detail');

		$(this).click(function(){
			$(hidden).toggleClass('invisible');
		});

	});




	$('#intervenants ul li').each(function (index, value){

		var bio= $(this).find(' li:nth-child(1)');





		bio.addClass('invisible');
var wesh=$(this).find("strong");

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



$(".inter").click(function(){

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




 // TOUTES : RANDOM COLOR

var fonds= new Array('assets/images/fonds/base/grand-fond-bleu.png','assets/images/fonds/base/grand-fond-rouge9.png','assets/images/fonds/base/grand-fond-vert1.png');
var couleurs=new Array('rgb(0,0,255)','rgb(255,0,0)','rgb(0,255,0)');
var rand=Math.floor(Math.random()*fonds.length);

//TOUTES : Background

$("body").css({"background-image":"url('"+fonds[rand]+"')"});

// PROGRAMME GENERAL : Highline h1 


// PROGRAMME COLLOQUE : Change color text + arrow

//var under=new Array("td.inter","#intervenants h2",".rubrique#ecoles a");
   var sur=new Array( "#intervenants h2",".name", ".plus",".rubrique#ecoles a","#programme h1", ".rubrique#credits a",
  ".programme#colloque a","#acces li h1");
   var white=new Array("ul.liens_ext li a");

$.each(sur, function(i, item) {
$(sur[i]).hover(function(){
	
	$(this).css({"color":couleurs[rand]});

	}, function() {

	$(this).css({"color":"black"});
	
	}

);
});

$.each(white, function(i, item) {
$(white[i]).hover(function(){
	
	$(this).css({"color":couleurs[rand]});

	}, function() {

	$(this).css({"color":"white"});
	
	}

);
});

// PROGRAMME SOUS MENU > background li

var ui=$("ul.sous-menu li").not(".is-active");

   $(ui).each(function(){
   	$(this).hover(function(){
      if(rand==2){
         $(this).css({"background-color": couleurs[rand], 'color':'black'});
 
      }else {
         $(this).css({"background-color": couleurs[rand], 'color':'white'});


      }

   }, function() {

         $(this).css({"background-color": "white", 'color':'black'});

   }
  ); });


      if(rand==2){

$("ul.sous-menu li.is-active").css({"background-color": couleurs[rand], 'color':'black'});


    }else {

$("ul.sous-menu li.is-active").css({"background-color": couleurs[rand], 'color':'white'});


}



$(".rubrique#intervenants a").css("color",couleurs[rand]);

   $(".rubrique.programme .interne").css("color",couleurs[rand]);

   // Accés

   $('#acces li').click(function(){
      $(this).toggleClass('visible');
      $('#acces li').not(this).removeClass('visible');
   });

   // CONTACT : button 

   $("#contact #envoi").hover(function(){
      if(rand==2){
         $(this).css({"background-color": couleurs[rand], 'color':'white'});
      }else {
         $(this).css({"background-color": couleurs[rand], 'color':'white'});

      }

   }, function() {

      $(this).css({"background-color": "black", 'color':'white'});

   }
                             );

   // CONTACT : error 

   $("#contact .entree").hover(function(){
      if(rand==2){
         $(this).css({"border-color": couleurs[rand]});
      }else {
         $(this).css({"border-color": couleurs[rand]});

      }

   }, function() {

      $(this).css({"border-color": "black"});

   }
                              ); 

   $("#contact .uniform-errors__item").css({"color": couleurs[rand]});
   $("#contact #answer").css({"color": couleurs[rand]});




// PROGRAMME COLLOQUE : Intervenants
var liens=new Array("td.invite a", "#programme-colloque h3 a");
$.each(liens, function(i, item) {
$(liens[i]).hover(function(){
	if(rand==2){
	$(this).css({"background-color": couleurs[rand], "color":"black"});
	
	}else {
	$(this).css({"background-color": couleurs[rand], 'color':'white'});

	}

	}, function() {

	$(this).css({"background-color": "transparent", 'color':'black'});

	}
);

});




		var url =$(location).attr('href');
		var n = url.indexOf("#");
		var ancre=url.substring(n)+"_ancre";


		
	$(ancre).parent().removeClass('invisible');

if(ancre!='#soennecken'){
	var ouais=$(ancre).parents('ul').find("h2 strong");

          $(ouais).html('&#65516;');

}


$(function() {

    $(document).scrollTop( $(ancre).offset().top-60); 

});





});