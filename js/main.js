$ = jQuery.noConflict();

$(document).ready(function(){
    $('.mobile-menu a').on('click' , function(){
        $('nav.site-nav').toggle('slow');
    });
    
   //Heeight of images
   boxAdjustement();


   //fluid Plugin
   jQuery('.gallery a').each(function(){
       jQuery(this).attr({'data-fluidbox': ''});
   });

   if(jQuery('[data-fluidbox]').length > 0){
       jQuery('[data-fluidbox]').fluidbox();
   }


});

function boxAdjustement(){
    var images = $('.box-image');
    if(images.length > 0){
        var imagesHeight = images[0].height;
        var boxes = $('.content-box');
        $(boxes).each(function(element){
             $(element).css({'height': imagesHeight +'px'});
        });
    }

    
 
}