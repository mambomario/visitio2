$( document ).ready(function() {
    // console.log( "ready!" );


    // design fun 

    $('.profile_photo').delay(600).fadeOut(300).delay(300).fadeIn(300);

    // end fo design fun

    var h = $(window).height();
    console.log(h);
    $('body').css('min-height', h + 'px');
    // Toggle controls 

    $('.fa-chevron-circle-right').click(function(){
        $('.fa-chevron-circle-right').toggle();
        $('.fa-chevron-circle-down').toggle();
        $('.contacts_listing').fadeToggle(600);
        $('.social_link_display').toggle();
    });

    $('.fa-chevron-circle-down').click(function(){
        $('.fa-chevron-circle-right').toggle();
        $('.fa-chevron-circle-down').toggle();
        $('.contacts_listing').fadeToggle(600);
        $('.social_link_display').toggle();
    });


    
    // SHOW CONTENT OF SOCIAL BUTTON LINK -START
    
    clicked_social_button_class="";
    $('.social_button').click(function(){
        clicked_social_button_class = $(this).attr('class').split(' ')[1];
        console.log('single click class:', clicked_social_button_class);
        
        $('.visitio').each(function(){
            let link = $('.'+clicked_social_button_class +" a", this).attr('href');
            console.log('single click link je:', link);
            if (link.startsWith('mailto:')){  //check email href
                link=link.substr(7,); 
                if (link.indexOf('?') != -1) { link=link.substr(0, link.indexOf('?'));  }
            }
            if (clicked_social_button_class=="email") {
                $('p.target', this).empty().append('<a target="_blank" href=\"mailto:' +link+ '?Subject=See my Visitio\">'+link+ ' </a>').show();
            } else {
                $('p.target', this).empty().append('<a target="_blank" href=\"https://' +link+ '\">'+link+ ' </a>').show();
            }
            
        });


    });

    // SHOW CONTENT OF SOCIAL BUTTON LINK -END


//   EDIT SOCIAL LINKS ALLinONE -START
 
    $('#homepage .visitio .social_button').dblclick(function(){

        if ($('p.target').is(":visible")) { $('p.target').toggle(); }
        // identify what was clicked and it's class which determines service
        clicked_social_button_class = $(this).attr('class').split(' ')[1];
        console.log('dblclicked class jeee', clicked_social_button_class);
        // fill all inputs with links of respective social network
        $('.visitio').each(function(){
            let link = $('.'+clicked_social_button_class +" a", this).attr('href');
            console.log('link je:', link);
            if (link.startsWith('mailto:')){  //check email href
                link=link.substr(7,);   
            }
            $('.input_social_link', this).val(link);
        });
        $('input.input_social_link, .save_social_link').show().fadeIn(500);
        
    });

    // NOW save all edited fields 
        $('.save_social_link').click(function(){
             console.log('clicked save JE:', clicked_social_button_class);
            $('.visitio').each(function(){
                let new_link = $('input',this).val();
                
                $('.'+clicked_social_button_class +" a", this).attr("href",new_link);
                
                if (clicked_social_button_class == "email") {
                    $('.'+clicked_social_button_class +" a", this).attr("href","mailto:" + new_link);
                }
                $('.input_social_link', this).empty();
                $('.input_social_link, .save_social_link', this).toggle();
            })    
        });


//   EDIT SOCIAL LINKS ALLinONE -END

//   EDIT SOCIAL LINKS inONE -START
    $('#single_visitcard .visitio .social_button').dblclick(function(){

        if ($('p.target').is(":visible")) { $('p.target').toggle(); }
        // identify what was clicked and it's class which determines service
        clicked_social_button_class = $(this).attr('class').split(' ')[1];
        console.log('dblclicked class jeee', clicked_social_button_class);
        // fill all inputs with links of respective social network
        $('.visitio').each(function(){
            let link = $('.'+clicked_social_button_class +" a", this).attr('href');
            console.log('link je:', link);
            if (link.startsWith('mailto:')){  //check email href
                 console.log('mail link je:', link);
                link=link.substr(7,);   
            }
            $('.input_social_link', this).val(link);
        });
        $('input.input_social_link, .save_social_link').show().fadeIn(500);
        
    });


  //  NOW save all edited fields 
        $('.save_social_link').click(function(){
             console.log('clicked save JE:', clicked_social_button_class);
                
                var new_link = $('input',this).val();
                // if (clicked_social_button_class == "email") {
                //     new_link = new_link.substring(0, new_link.indexOf('?'));
                //     alert(new_link);
                //     document.write(new_link);
                // }
                $('.'+clicked_social_button_class +" a", this).attr("href",new_link);
                
                if (clicked_social_button_class == "email") {
                    // new_link = new_link.substring(0, new_link.indexOf('?'));
                    // alert('uaaa', new_link);
                    // document.write(new_link);
                    $('.'+clicked_social_button_class +" a", this).attr("href","mailto:" + new_link);
                }
                $('.input_social_link', this).empty();
                $('.input_social_link, .save_social_link', this).toggle();
               
        });

//   EDIT SOCIAL LINKS inONE -END

// SHARING Visitio -START    
    $('.send_card').click(function(){
        $('.sharebutton').fadeToggle(500);
      
    }); 

    $('.save_to_contacts').click(function(){
         $('.vcficon').fadeToggle(500);
    });

    $('.save_to_app').click(function(){
        
    });
    
    $('.qrcode').click(function(){
        $('.qr_region').fadeToggle(500);
        $('.sharebutton').addClass('hideqr');
        
    }); 

      $('.qr_region').click(function(){
        $(this).fadeToggle(500);
        $('.sharebutton').removeClass('hideqr');
        
    }); 
// SHARING Visitio -END 

// End of jquery 
});
