$(document).ready(function () {

    $("#entrar").click(function () {
        if ($("#email").val() === "" || $("#senha").val() === "") {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Por favor, preencha todos os campos!"
            });
            return;
        }

        var letras = $('#senha').val().length;
        console.log(letras);
        if (letras < 6) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "A senha deve ter no mínimo 6 caracteres!"
            });
            return;
        }

        $.ajax({
            url: "../api/login",
            type: "POST",
            data: {
                email: $("#email").val(),
                senha: $("#senha").val()
            },
            success: function (response) {
                if (response.erro == 'n') {
                    alert(response.token);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: response.message
                    });
                    return;
                }
            },
            error: function () {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Ocorreu um erro ao tentar fazer login."
                });
            }
        });
    });
});

