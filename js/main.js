/*
    Авторизация
 */

$('.login-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let username = $('input[name="username"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            username: username,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '/profile.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});



/*
    Регистрация
 */

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let username = $('input[name="username"]').val(),
        email = $('input[name="email"]').val();
        password = $('input[name="password"]').val(),


    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        data: {
            username: username,
            email: email,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});
