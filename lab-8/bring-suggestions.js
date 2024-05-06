$(document).ready(function () {
    $('input').keyup(function () {
    var name = $('input').val();
    $.post("suggestion.php", {suggestion: name }, function (data, status) {
    $('#test').html(data);
    });
    });
    });
    