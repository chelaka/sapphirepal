
$(document).ready(function () {

//to change logos on homepage if checkbox is checked
    var ckbox = $('#navcheck');
    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            // $(".social-icons ul li").css("color","#ff3f3f");
            $("#home-logo").attr("src","images/assets/main-logo-white.png");
        } else {
            // $(".social-icons ul li").css("color","#3b3b3b");
            $("#home-logo").attr("src","images/assets/main-logo.png");
        }
    });



        // This button will increment the value
        $('.qtyplus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
    				console.log("+");
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If is not undefined
            if (!isNaN(currentVal)) {
                // Increment
                $('input[name='+fieldName+']').val(currentVal + 1);
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(0);
            }
        });
        // This button will decrement the value till 0
        $(".qtyminus").click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            fieldName = $(this).attr('field');
            // Get its current value
            var currentVal = parseInt($('input[name='+fieldName+']').val());
            // If it isn't undefined or its greater than 0
            if (!isNaN(currentVal) && currentVal > 0) {
                // Decrement one
                $('input[name='+fieldName+']').val(currentVal - 1);
            } else {
                // Otherwise put a 0 there
                $('input[name='+fieldName+']').val(0);
            }
        });

});
