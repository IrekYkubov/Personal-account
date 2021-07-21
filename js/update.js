$('#updateNews').click(function() {
    var title = $('#title').val();
    var intro = $('#intro').val();
    var text = $('#text').val();
    var id = $('#id').val();

    $.ajax({
        url: '../action/updateNews.php',
        type: 'POST',
        cache: false,
        data: {
            'title': title,
            'intro': intro,
            'text': text,
            'id': id
        },
        dataType: 'html',
        success: function(data) {
            if (data == 'Готово') {
                $('#updateNews').text('Новость изменена');
                $('#errorBlock').hide();
            } else {
                $('#errorBlock').show();
                $('#errorBlock').text(data);
            }
        }

    });
});