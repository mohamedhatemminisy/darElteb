(function ($) {

    "use strict";
 
   // scroll redesign
   $(window).scroll(function () {


    if ($(window).scrollTop()) {

        // $("body").addClass("colored").animate({
  
        // }, 4000);

        $(".header-navbar").addClass("fixed-top").animate({
  
        }, 4000);

        $(".main-menu").addClass("menu-fixed").animate({
  
        }, 4000);

        $(".app-content").addClass("resize").animate({
  
        }, 4000);

    } 
    else {

        // $("body").removeClass("colored").animate({
  
        // }, 4000);

        $(".header-navbar").removeClass("fixed-top").animate({
  
        }, 4000);
        $(".main-menu").removeClass("menu-fixed").animate({
  
        }, 4000);

        $(".app-content").removeClass("resize").animate({
  
        }, 4000);
    }
  
  });

  // card content collapse
  
  $('.card-content').on('hide.bs.collapse', function () {
    
    $(".pull-up").addClass("collapsed");

  });
  $('.card-content').on('show.bs.collapse', function () {
    
    $(".pull-up").removeClass("collapsed");

  })

  // alert

  setTimeout(function() {
    
    $(".alert-dismissible").fadeOut(); 
    
  }, 4000);


   // auto complete
   $("input").attr("autocomplete","off");
   $("textarea").attr("autocomplete","off");
    
   // single select
   $(".js-example-placeholder-single").select2({
    placeholder:"Select",
    allowClear: true,
    maximumSelectionLength: 2,
    "language": {
      "noResults": function(){
          return "no results found";
      },
    }
   });

    //select2  multiple select
    $(".js-example-placeholder-multiple").select2({
      placeholder: "Select",
      tags: true,
      tokenSeparators: [',', ' '],
      "language": {
        "noResults": function(){
            return "no results found";
        },
      }
     });

    // custom file input

    $(document).ready(function () {
      bsCustomFileInput.init()
    })
  
    $("input[type=file]").on('change',function(event){
  
      let fileVal=event.target.value;
      
      if(fileVal){
  
        $(this).next(".custom-file-label").addClass('colored');
  
  
      }
      else{
  
        $(this).next(".custom-file-label").removeClass('colored');
  
      }
    })


   // scroll to top
          
    $(window).scroll(function(){
          if($(this).scrollTop() > 300) {
        
            $(".auto-scroll-to-top").removeClass("non-hover");                 
             $(".auto-scroll-to-top").addClass("visible");  
           } else {
        
            $(".auto-scroll-to-top").addClass("non-hover");
            $(".auto-scroll-to-top").removeClass("visible");
           }        
    });
             

    $('.auto-scroll-to-top').on('click touchend', function(event) {
          $("html, body").animate({scrollTop: 0}, 1000);
           event.preventDefault();
     });


})(jQuery);




