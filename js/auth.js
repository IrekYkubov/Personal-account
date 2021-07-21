$('#authUser').click(function() {
    var login = $('#login').val();
    var password = $('#password').val();

    $.ajax({
        url: '../action/authorization.php',
        type: 'POST',
        cache: false,
        data: {
            'login': login,
            'password': password,
        },
        dataType: 'html',
        success: function(data) {
            if (data == 'Готово') {
                $('#authUser').text('Готово');
                $('#errorBlock').hide();
                document.location.reload(true);
            } else {
                $('#errorBlock').show();
                $('#errorBlock').text(data);
            }
        }

    });
});