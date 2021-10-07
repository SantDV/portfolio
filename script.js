
$(document).ready(function(){

    $('#toggle').click(function(){
        
        $('#toggle').toggleClass('active');
        $('body').toggleClass('active');
        $('header').toggleClass('active');
        
    })


    $('#menu').click(function(){

        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');

    });

    $(window).on('scroll load', function(){

        $(this).removeClass('fa-times');
        $('header').removeClass('toggle');

        if($(window).scrollTop() > 0){
            $('.top').show();
        }else{
            $('.top').hide();
        }

    })

    $('a[href*="#"]').on('click',function(e){

        e.preventDefault();
    
        $('html, body').animate({
    
          scrollTop : $($(this).attr('href')).offset().top,
    
        },
          500, 
          'linear'
        );
    
      });
    
    });