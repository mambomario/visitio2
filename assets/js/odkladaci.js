    // EDIT Social links
    $('.user .contacts button.social_button').dblclick(function(){
        // var place_social_link = $('a', this).text().clone();
        alert('here');
        $('p.target').hide();
        $('input#input_social_link, #save_social_link').show().fadeIn(500);

        var target_social_a = $('a', this); // a object
        var target_social_link = $('a', this).attr("href");

        if (target_social_link.match("^mailto:")) {
            target_social_link = target_social_link.replace("mailto:", "");
            
        }       
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