
$(document).ready(function () {

//to change logos on homepage if checkbox is checked
    var ckbox = $('#navcheck');
    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            $(".social-icons ul li").css("color","#ff3f3f");
            $("#home-logo").attr("src","images/assets/main-logo-white.png");
        } else {
            $(".social-icons ul li").css("color","#3b3b3b");
            $("#home-logo").attr("src","images/assets/main-logo.png");
        }
    });

});
