<?php
 require_once('../conexao.php');
 
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointer</title>
    <link rel="stylesheet" href="../styles/style_funcionario.css">
    <link rel="shortcut icon" href="../asserts/images/P.png" type="image/x-icon">
</head>

<body>
    <header>
        <nav>
            <img src="../asserts/images/logo_pointer.png" alt="logo">
            <input type="button" value="Logoff" onclick="logoff()">
        </nav>
    </header>
    <section>
        <article id="frame">
            <form>
                <form action="" method="get" id="conteiner_btn">

                    <input type="hidden" id="id_user"  name="id_user" value="<?php echo  $_SESSION['login_usuario'] ?>" required>

                    <img src="../asserts/images/logo_E.png" alt="Foto" id="usuario_img">
                    <input type="button" value="Bater Ponto" id="bater_ponto">
                    <input type="button" value="Historico" id="btn_modal">
                </form>
                <aside id="conteiner_table">

                    <!-- Conteudo virá por ajax -->              
  
                </aside>
                <div id="mensagem">
                    <!-- Mensagem de Ponto Batido com Sucesso, virá por ajax -->
                </div>  
            </form>
        </article>
    </section>
    <dialog>
        <header>
            <input type="button" value="Fecha" id="btn_close">
    
        </header>
        
        <div id="dados_historico" class="dados_historico">
                    <!-- Conteudo virá por ajax -->
        </div>   
        
    </dialog>
    <script src="../scripts/core.min.js"></script>

    <script src="../scripts/script_funcionario.js"></script>
    <script src="../scripts/ajax_func.js"></script>
    <script src="../scripts/registrar_ponto.js"></script>

</body>

</html>