$(function(){
    $('#cad').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroImagem"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Selecione uma imagem!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroProduto"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha o nome do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroPreco"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha o preço do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroSobre"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha sobre o produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroCategoria"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha a categoria do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroAtivo"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha o status do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }, // success
        }); // ajax
        return false;
    });
});

$(function(){
    $('#mudanca').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroImagem"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Selecione uma imagem!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroProduto"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha o nome do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroPreco"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha o preço do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroSobre"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha sobre o produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroCategoria"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha a categoria do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
                if(data == "ErroAtivo"){
                    Swal.fire({
                        title: 'Preencha todos os campos!',
                        text: 'Preencha o status do produto!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }, // success
        }); // ajax
        return false;
    });
});