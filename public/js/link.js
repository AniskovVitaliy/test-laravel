$(document).ready(function() {
    function loadRecentLinks() {
        $.get('/recent', function(data) {
            $('#recent-links').empty();
            data.forEach(function(link) {
                $('#recent-links').append('<li>' + link.original_url + ' : ' + link.shortened_url + '</li>');
            });
        });
    }

    loadRecentLinks();

    $('#create-link-form').submit(function(event) {
        event.preventDefault();
        $.post('/create-shortened-url', $(this).serialize(), function(data) {
            $('#result').html('Сокращенная ссылка: <a href="' + data.shortened_url + '">' + data.shortened_url + '</a>');
            loadRecentLinks();
        });
    });
});
