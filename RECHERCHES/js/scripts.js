var mason;

//pour tous
var color_base		= "0px 0px 50px white";
var color_change	= "0 0 0 black";

$(document).ready(function(){


	console.log("exemplaire 2017");


	$(".livre").each(function(index){


		var angle = Math.random()*20 - 10;
		var x = Math.random()*100 - 50;
		var y = Math.random()*100 - 50;


		// $(this).css("transform", "rotate("+angle+"deg)");
		$(this).css("transform", "translate("+x+"px, "+y+"px) rotate("+angle+"deg)");

	})


	$(".livre").mouseenter(function(e){
		var selection = $(this).data("ville");
		$(".livre[data-ville='"+selection+"']").addClass('select');

		$("#selection li").not(".titre").css("visibility","hidden");
		$("#selection li#"+selection).css("visibility","visible");

	})
	$(".livre").mouseleave(function(e){
		var selection = $(this).data("ville");		
		$(".livre[data-ville='"+selection+"']").removeClass('select');
		$("#selection li").css("visibility","visible");
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