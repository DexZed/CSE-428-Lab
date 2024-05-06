$(document).ready(function () {
    $('#btn').click(function () {
        $.post("model2.php", { my_limit: “1” }, function (data, status) {
            $('#test').html(data);
        });
    });
});
