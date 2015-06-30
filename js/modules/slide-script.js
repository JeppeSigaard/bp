$(function(){

    if($('#slidecontainer').length && $('.slide').length > 1){
        var flkty = $('#slidecontainer').flickity({
            wrapAround: true,
            prevNextButtons: false,
            cellSelector: '.slide'
            
        });
        
        $('#slidecontainer .slidenav').on('click',function(e){
            var t = $(e.target);
            
            if(t.is('.prev')){
            flkty.flickity( 'previous', true );
            }
            else if(t.is('.next')){
                flkty.flickity( 'next', true );
            }
        });
    }
    
});