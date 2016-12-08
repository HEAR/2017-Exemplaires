var mason;
$(function(){

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
                                            

