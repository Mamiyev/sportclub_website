$(document).ready(function () {
    var sign = $('.signIn');
    var signBlock = $('.sign-block');
    var signBlock_active = $('.sign-block_active');
    var exit = $('.exit');

    sign.click(function(){
        signBlock.toggleClass('sign-block_active');
    });

    exit.click(function(){
        signBlock.removeClass('sign-block_active');
    });


});


