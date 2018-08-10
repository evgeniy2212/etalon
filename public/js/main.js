$(document).ready(function () {


    /* work with cart */
    $('.product-button').on('click', function (eventObject) {

        let id = $(this).attr('data_id');

        let name = $(this).attr('data_name');

        let price = $(this).attr('data_price');

        $(this).parents('.product-container').find('.success-message').text('Товар доданий').show();

        setTimeout(function () {
            $('.success-message').hide();
        }, 800);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST', // Type of response and matches what we said in the route
            url: 'addCart', // This is the url we gave in the route
            data: {
                'name': name,
                'price': price,
                'id': id
            }, // a JSON object to send back
            success: function (response) { // What to do if we succeed
                count = response['count'];
                $('#count').text('( ' + count + ' )');
            },
            error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    });

    $('#phone-mask').mask("(999) 99-99-999");
});

$(window).on("load",function() {
    $(window).scroll(function() {
        let windowBottom = $(this).scrollTop() + $(this).innerHeight();
        $(".fade").each(function() {
            /* Check the location of each desired element */
            let objectBottom = $(this).offset().top + $(this).outerHeight();

            /* If the element is completely within bounds of the window, fade it in */
            if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
            } else { //object goes out of view (scrolling up)
                if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
            }
        });
    }).scroll(); //invoke scroll-handler on page-load
});