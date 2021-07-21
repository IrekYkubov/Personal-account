$('#addNews').click(function() {
    var title = $('#title').val();
    var intro = $('#intro').val();
    var text = $('#text').val();

    $.ajax({
        url: '../action/addNews.php',
        type: 'POST',
        cache: false,
        data: {
            'title': title,
            'intro': intro,
            'text': text
        },
        dataType: 'html',
        success: function(data) {
            if (data == 'Готово') {
                $('#addNews').text('Новость дабавлена');
                $('#errorBlock').hide();
            } else {
                $('#errorBlock').show();
                $('#errorBlock').text(data);
            }
        }

    });
});