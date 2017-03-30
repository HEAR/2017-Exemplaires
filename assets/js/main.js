$(document).ready(function(){


	jQuery.fn.shuffle = function () {
    var j;
    for (var i = 0; i < this.length; i++) {
        j = Math.floor(Math.random() * this.length);
        $(this[i]).before($(this[j]));
    }
    return this;
};


function book_glitch(target){
	console.log( $(target) );

	var nbr = Math.ceil(Math.random() * 5)+3;
	var shadow = new Array();

	for(var i =0 ; i< nbr; i++){

		var x = i*20 + Math.random() * 10 ;
		var y = i*20 + Math.random() * 10 ;
		shadow.push( x + "px "+y+"px 0 #000" )
	}


	$(target).css('box-shadow',shadow.join() );
}


//glitching


	$(".glitch").each(function(index){
		book_glitch(this);
	});


 // TOUS : RANDOM COLOR

var couleurs=new Array('rgb(0,0,255)','rgb(255,0,0)','rgb(0,255,0)');
var rand=Math.floor(Math.random()*fonds.length);

// TOUS : BACKGROUND

$("body").css({"background-image":"url('"+fonds[rand]+"')"});

// TOUS : MENU > sous-menus 


$('.menu.programme').find('ul.programme.sous-menu').removeClass('invisible');
$('.menu.selections').find('ul.selections.sous-menu').removeClass('invisible');
$('.menu.selections.home').find('ul.selections.sous-menu').addClass('invisible');




// PROGRAMME COLLOQUE : INTERVENANTS

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


// PROGRAMME COLLOQUE : Change color text + arrow

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

// PROGRAMME SOUS MENU > background li

var ui=$("ul.sous-menu li").not("li.is-active");

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

   


// SELECTIONS : ACCUEIL 


  $("#selections img").each(function() {

   var cla=$(this).attr("class");
    $(this).addClass("gray");

    $(this).hover(function(){
  
      $("img."+cla).removeClass("gray").addClass("hover_selections");
      book_glitch($("img."+cla));
      $(".ecole ul li."+cla).css("display","block");

    }, function(){

    $("img."+cla).addClass("gray").removeClass("hover_selections").css("box-shadow","0px 0px");
      $(".ecole ul li."+cla).css("display","none");

    });

  });



$("#selections a").shuffle();


// SELECTION ECOLES


   var sel_ecole=new Array("#selection-hear-strasbourg li", "#selection-head-geneve li", "#selection-uqam-montreal li", "#selection-ensba-lyon li", "#selection-esad-valence li", "#selection-eesab-rennes li", "#selection-erg-bruxelles li", "#selection-isdat-toulouse li", "#selection-isba-besancon li");
   
   $.each(sel_ecole, function(i, item) {
      $(sel_ecole[i]).hover(function(){
         if(rand==2){
            $(this).find("h1").css({"color": couleurs[rand]});
         }else {
            $(this).find("h1").css({"color": couleurs[rand]});
         }

      }, function() {

         $(this).find("h1").css({"color": "black"});
      }
   ); 
   });


   //    SLECTION, PAGE : HOVER COUVS



   $(".selection .main li").each(function(){

      var image=$(this).find("img");
      var nom_livre=$(this).attr("id");
      var titre=$(".side li#"+nom_livre+" h3");
      var cat=$(".side h2#"+nom_livre);

      console.log(titre);

  $(image).hover(function(){

      book_glitch(this);
      $(this).removeClass("gray").addClass("hover");
      $(titre).css("color",couleurs[rand]);
      $(cat).css("color",couleurs[rand]);
      $(".side li").not("#"+nom_livre+" h3").css("color", "black");

   }, function() {

      $(this).addClass("gray").removeClass("hover");
      $(this).css("box-shadow", "none");
      $(titre).css("color","black");
      $(cat).css("color","black");
    
   });

});



   //  SELECTION, PAGE : HOVER TITRES

var timer;


  
    $(".side h2").hover(function() {


     var nom_livre3=$(this).attr("id");
    var image3=$(".main li#"+nom_livre3).find("img");

  var that=$(this);

  timer = setTimeout(function(){

     book_glitch(image3);
      $("body").animate({scrollTop: $(image3).offset().top-80}, 700);
      $(that).css("color",couleurs[rand]);
      $(image3).removeClass("gray").addClass("hover");


 }, 300); 

   }, function() {

    var nom_livre3=$(this).attr("id");
    var image3=$(".main li#"+nom_livre3).find("img");
    
    clearTimeout(timer);
    $(this).css("color","black");
    $(image3).css("box-shadow", "none").addClass("gray").removeClass("hover");



    });

    $(".selection .side li").each(function(){

      var titre2=$(this).find("h3");
      var nom_livre2=$(this).attr("id");
      var image2=$(".main li#"+nom_livre2).find("img");

    $(titre2).hover(function() {

  var that=$(this);

  timer = setTimeout(function(){

      book_glitch(image2);

      $("body").animate({scrollTop: $(image2).offset().top-80}, 700);
      $(that).css("color",couleurs[rand]);
      $(".side h3").not(that).css("color", "black");
      $(image2).removeClass("gray").addClass("hover");

 

 }, 300); 

   }, function() {

    clearTimeout(timer);
    $(image2).css("box-shadow", "none").addClass("gray").removeClass("hover");
    $(this).css("color","black");

   	});
   
});


   //  SELECTION, LIVRE : HOVER SITES

   $("#livre .site a").hover(function(){

    $(this).css("color",couleurs[rand]);

    }, function(){

    $(this).css("color","black");

    });

   //SELECTION, LIVRE : GRAND LIVRE

   var haut=$("img#relief-d-une-exposition").height();
   var smaller=1.2;
   var wid=$("img#relief-d-une-exposition").width();

   $("img#relief-d-une-exposition").css({"height":(haut/smaller), "width":(wid/smaller)});

// INTERVENANTS : DÉPLIANT

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

// INTERVENANTS : DÉPLIANT CHANGEMENT FLÈCHE

$(".inter").click(function(){

	var bro = $(this).find(".i");

	$(bro).html('&#65516;');
	
    if($('.detail').is(':visible')){
          $(bro).html('&#65516;');
    }else{
          $(bro).html('&#65515;');
    }
});



// ACCES

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




// RESPONSIVE

$(".phone .header").css("background-color",couleurs[rand]);
var supportsOrientationChange = "onorientationchange" in window,
    orientationEvent = supportsOrientationChange ? "orientationchange" : "resize";

var win=$(window).width();

var nobr= [".rubrique#home","ul.liens_ext a","#intervenants ul li","#credits ul h3","#credits ul a",".programme#colloque", ".rubrique.selection .side li h3" ];

	$.each(nobr, function(index, value){

		$(value).find("br").remove();

	});

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {



if($(window).height()<400){

    $("nav").css({"overflow":"scroll","height":$(window).height()});
}

	if(win<700){



// MENU

$(".phone i").css("display","block");


$("nav ul.sous-menu").empty();

$("nav ul li").replaceWith(function() { return $(this).contents(); });
$("nav ul").replaceWith(function() { return $(this).contents(); });

	//bleu
	if(rand==0){ $(".phone .header").addClass("white");}







if ($('#home').length > 0) {


//white background bars
//on load
 	if(screen.width>500){

 		$(".phone i").addClass("white-background");
 		$(".phone i").addClass("extra-marge");


 	}else{

 		$(".phone i").removeClass("white-background");
 		$(".phone i").removeClass("extra-marge");

 	}

//on window scroll
 		$(window).scroll(function(){

 			   if($(window).scrollTop()>$(".infos").height()){

 			   	$(".phone i").removeClass("white-background");

 			   		
 			   		}else{
					
					if(screen.width>500){
 			   		$(".phone i").addClass("white-background");
 			   		}	

 			   		}

 			   	});

//on orientation change
 window.addEventListener(orientationEvent, function() {



 	if(screen.width>500){
 		$(".phone i").addClass("white-background");
 		$(".phone i").addClass("extra-marge");
 	
 	}else{

 		$(".phone i").removeClass("white-background");
 		$(".phone i").removeClass("extra-marge");

 	}

 			  }, false);

//on click
     $(".phone i").click(function(){
 	
 	if(screen.width>500){
 		if($(".infos").height()>$(window).scrollTop()){

     	$(".phone i").toggleClass("white-background");
		
		}
			}
	

	});	



$(window).scroll(function(){

   if($(window).scrollTop()>$(".infos").height()){
  
   		$(".phone .header").css("display","block");

         
   			if(rand==0){

			$(".phone i").addClass("white");

			}

         }else{

         $(".phone .header").css("display","none");
         $(".phone i").removeClass("white");


         }


  });   }else{


			$(".phone .header").css("display","block");

			if(rand==0){
			$(".phone i").addClass("white");
			}


}


          $(".phone i").click(function(){
          	
          		$("body").toggleClass("scroll");
				$("nav").toggleClass("phone_visible");
				$(this).toggleClass("fa-bars").toggleClass("fa-close");
			


 			if($(window).scrollTop()<$(".infos").height()){

 				if ($('#home').length > 0) {
				$(".phone .header").toggle();
		

						if(rand==0){
							$(".phone i").toggleClass("white");


						}
								}

 				}



 				

			});	

          $("nav a").click(function(){

          	$(this).css("color",couleurs[rand]);


          });



//end window scroll
}


$.each(white, function(i, item) {
  $(white[i]).hover(function(){
  	
  	$(this).css({"color":couleurs[rand]});

  	}, function() {

  	$(this).css({"color":"white"});
  	
  	}

  );
});

//RESPONSIVE : PAGES SELECTION

var img_livre=$(".rubrique.selection .main img");


$(img_livre).each(function(){

var pxtorem=16;
var base_height = $(this).height();


$(this).css("height", base_height*(win/600));


});


 window.addEventListener(orientationEvent, function() {


$(img_livre).css("height", base_height*(win/600));


});


var img_livre2=$("#livre .main img");


$(img_livre2).each(function(){


var pxtorem=16;
var win_w=$(window).width();
var base_w = $(this).width();


$(this).css({"width": base_w*(win_w/500)});


 window.addEventListener(orientationEvent, function() {


$(this).css({"width": base_w*(win_w/500)});


});


});


$("#livre .main").insertAfter("#livre .side");


$(window).resize(function(){
  if($(window).width()<1250){

      $("#livre .main").insertAfter("#livre .side");

  }
});




var nobr= [".rubrique#home","ul.liens_ext a","#intervenants ul li","#credits ul h3","#credits ul a",".programme#colloque", ".rubrique.selection .side li h3" ];

  $.each(nobr, function(index, value){

    $(value).find("br").remove();

  });


$(".rubrique.selection .side li h3").text($(".rubrique.selection .side li h3").text());

//end responsive
}

//INTERVENANTS : ANCRE

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


if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

$(function() {

    $(document).scrollTop( $(ancre).offset().top-110); 

});

}

});
