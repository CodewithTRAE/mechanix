(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


// Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });

})(jQuery);

/** clear subscribe box */
document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('.subscribe-form');
    var emailInput = document.getElementById('emailInput');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Clear the email input field
        emailInput.value = '';
    });
});


/** check if passwords are the same */
function validateForm() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    let message = document.getElementById("print-err");

    if (password !== confirm_password) {
        message.textContent = "Passwords do not match!";
        return false;
    }
    return true;
}

// bookings

$(document).ready(function(){
    $('#Payments-1').change(function(){
        if($(this).prop('checked')){
            $('#Delivery-1').prop('disabled', true);
            $('#Paypal-1').prop('disabled', true);
            $('#Transfer-1').prop('disabled', true);
        } else {
            $('#Delivery-1').prop('disabled', false);
            $('#Paypal-1').prop('disabled', false);
            $('#Transfer-1').prop('disabled', false);
        }
    });
    
    $('#Delivery-1').change(function(){
        if($(this).prop('checked')){
            $('#Payments-1').prop('disabled', true);
            $('#Paypal-1').prop('disabled', true);
            $('#Transfer-1').prop('disabled', true);
        } else {
            $('#Payments-1').prop('disabled', false);
            $('#Paypal-1').prop('disabled', false);
            $('#Transfer-1').prop('disabled', false);
        }
    });

    $('#Paypal-1').change(function(){
        if($(this).prop('checked')){
            $('#Payments-1').prop('disabled', true);
            $('#Delivery-1').prop('disabled', true);
            $('#Transfer-1').prop('disabled', true);
        } else {
            $('#Payments-1').prop('disabled', false);
            $('#Delivery-1').prop('disabled', false);
            $('#Transfer-1').prop('disabled', false);
        }
    });

    $('#Transfer-1').change(function(){
        if($(this).prop('checked')){
            $('#Payments-1').prop('disabled', true);
            $('#Paypal-1').prop('disabled', true);
            $('#Delivery-1').prop('disabled', true);
        } else {
            $('#Payments-1').prop('disabled', false);
            $('#Paypal-1').prop('disabled', false);
            $('#Delivery-1').prop('disabled', false);
        }
    });
});
