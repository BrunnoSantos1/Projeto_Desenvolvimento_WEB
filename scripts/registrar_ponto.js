
//AJAX PARA INSERÇÃO DO PONTO
$(document).ready(function(){
    var pag = "ponto";
    $('#bater_ponto').click(function(event){
        event.preventDefault();
        
        $.ajax({
            url: pag + "/inserir.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(mensagem){

                $('#mensagem').removeClass()

                if(mensagem = 'Ponto Cadastrado com Sucesso!!'){
                    

                }else{
                    
                    $('#mensagem').addClass('mensagem-erro')
                }
                
                $('#mensagem').text(mensagem)


            },
            
        })
    })
})