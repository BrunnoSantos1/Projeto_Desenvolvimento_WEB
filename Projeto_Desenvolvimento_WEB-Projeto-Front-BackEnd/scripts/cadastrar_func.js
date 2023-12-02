
//AJAX PARA INSERÇÃO DOS NOVOS FUNCIONÁRIOS
$(document).ready(function(){
    var pag = "gestor";
    $('#btn_cadastrar').click(function(event){
        event.preventDefault();
        
        $.ajax({
            url: pag + "/inserir.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(mensagem){

                $('#mensagem-cadastro').removeClass()

                if(mensagem = 'Cadastrado com Sucesso!!'){
                                        
                    $('#nome').val('');
                    $('#cpf').val('');
                    $('#cargo').val('');
                    $('#estado_civil').val('');
                    $('#email').val('');
                    $('#telefone').val('');
                    $('#sexo').val('');
                    $('#nascimento').val('');

                }else{
                    
                    $('#mensagem-cadastro').addClass('mensagem-erro')
                }
                
                $('#mensagem-cadastro').text(mensagem)


            },
            
        })
    })
})