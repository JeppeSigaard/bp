$(function(){
    $('#topnav').on('click',function(e){
        
        var t = $(e.target);
        
        
        if(t.is('.top-nav-toggle')){
            $(this).toggleClass('toggle');
        }
        
    });
})