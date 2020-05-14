$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData($obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroUser"){
                    alert("Preencha o campo de usuário!");
                }
                if(data == "ErroSenha"){
                    alert("Preencha o campo de senha!");
                }
                if(data == "FalhaLogin"){
                    alert("Usuário ou senha inválidos");
                }
                if(data == "SuccessClient"){
                    window.location.replace("view/home");
                }
                if(data == "SuccessAdm"){
                    window.location.replace("view/Administracao");
                }
            }, // Success
        }); // Ajax
        return false;
    }); // Function de dentro
}); // Function de fora