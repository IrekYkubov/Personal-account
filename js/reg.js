$('#regUser').click(function() {
    var name = $('#username').val();
    var login = $('#login').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var password2 = $('#password2').val();

    $.ajax({
        url: '../action/registration.php',
        type: 'POST',
        cache: false,
        data: {
            'username': name,
            'login': login,
            'email': email,
            'password': password,
            'password2': password2
        },
        dataType: 'html',
        success: function(data) {
            if (data == 'Готово') {
                $('#regUser').text('Все готово');
                $('#errorBlock').hide();
                window.location.replace("http://cabinet/auth");
            } else {
                $('#errorBlock').show();
                $('#errorBlock').text(data);
            }
        }

    });
});