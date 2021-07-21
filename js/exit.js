$('#exitBtn').click(function() {
    $.ajax({
        url: '../action/exit.php',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        success: function(data) {
            document.location.reload(true);
        }

    });
});