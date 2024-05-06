// bring_suggestion
$(document).ready(function () {
    $('input').keyup(function () {
        let name = $('input').val();
        $.post("task-8.php", {suggestion: name }, function (data) {
            $('#test').html(data);
        });
    });
});
