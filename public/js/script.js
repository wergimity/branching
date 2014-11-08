$(function() {
    $('[data-plugin="user-info"]').click(function(e) {
        e.preventDefault();
        var selector = $(this).data('target');
        var container = $(selector);

        container.text('Loading...');

        $.get('/ajax/user-info', function(data) {
            container.html('');

            $.each(data, function(i, el) {
                var div = $('<div>');
                var strong = $('<strong>', {'text': i + ': '});
                var label = $('<span>', {'text': el, 'class': 'label label-info'});

                div.append(strong).append(label);
                container.append(div);
            });
        });
    });
});