$(document).ready(function() {
    $('#comment-form').submit(function(event) {
        event.preventDefault();
        conn.send('Hello World!');
        $(this).unbind('submit').submit();
    })
});