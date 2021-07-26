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
        $('.fa-chevron-circle-right').hide();
        $('.fa-chevron-circle-down').show();
        $('.contacts_listing').fadeIn(1000);
    });

    $('.fa-chevron-circle-down').click(function(){
        $('.fa-chevron-circle-down').hide();
        $('.fa-chevron-circle-right').show();
        $('.contacts_listing').fadeOut(1000);
    });

    $('.contacts button.social_button').click(function(){
        $('p.target').show();
        // hide edit inputs if new social is clicked
        $('input#input_social_link, #save_social_link').hide();

        // make sure there's nothing left in target paragraph from previous time
        $('.social_link_display p').empty();
        $('.contacts button').removeClass('active');
        $(this).addClass('active');

        // place link to paragraph
        var place_social_link = $('a', this).clone();
        $('.social_link_display p.target').append(place_social_link).addClass('active');

    });

    // EDIT Social links
    $('.contacts button.social_button').dblclick(function(){
        // var place_social_link = $('a', this).text().clone();
        $('p.target').hide();
        $('input#input_social_link, #save_social_link').show().fadeIn(500);

        var target_social_a = $('a', this); // a object
        var target_social_link = $('a', this).attr("href");
        
        // alert(place_social_link);
        $('input#input_social_link').val(target_social_link);
        
        $('#save_social_link').click(function(){

            $('p.target').hide();

            var new_social_link = $('input#input_social_link').val();

            target_social_a.attr('href', ''); // emptying link href
            target_social_a.attr('href', new_social_link);
            $('input#input_social_link, #save_social_link').hide(500).delay(500);
            $('p.confirmation').text('link saved').show().fadeOut(1000);
            // validate link fce

        });
    });

// End of jquery 
});
