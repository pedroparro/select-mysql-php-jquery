//select db Primeira opção
/*$( document ).ready(function() {
    $.post('./controllers/ControllerSelect.php', function(data) {
        //substitui valor no id = "conteudo"
        $("#data").html(data);
    });
});*/

//select DB Segunda opção
$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "./controllers/ControllerSelect.php",
        dataType: "html",
        success: function (data) {
            $("#data").html(data);

        }
    });
});