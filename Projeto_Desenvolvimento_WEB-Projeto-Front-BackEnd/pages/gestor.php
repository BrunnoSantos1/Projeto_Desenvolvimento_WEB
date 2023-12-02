<?php
 require_once('../conexao.php');
 
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointer</title>
    <link rel="stylesheet" href="../styles/style_gestor.css">
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
                    <input type="button" value="Bater Ponto"  id="bater_ponto">
                    <input type="button" value="Cadastrar Funcionarios" class="btn_modal"  onclick="modal('cadastro')">
                    <input type="button" value="Historico" class="btn_modal" id="btn_modal" onclick="modal('historico')">
                    <input type="button" value="Mostrar Historico dos Funcionarios" class="btn_modal"  id="btn_modal_hist_func" onclick="modal()"  id="btn_func">
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
    <dialog id="modal_historico">
        <header>
            <input type="button" value="Fecha" class="btn_close" onclick="fecha(1)">
        </header>
        
        <div id="dados_historico">
                <!-- Conteudo virá por ajax -->
        </div>   
    </dialog>

    <dialog id="modal_funcionario">
        <nav>
            <form action="" method="get">
                <input type="text" placeholder="Nome" name="" class="bar_table">
                <input type="text" placeholder="Cargo" name="" class="bar_table">
                <input type="text" placeholder="Email" name="" class="bar_table">
                <input type="button" value="Buscar">
            </form>
            <input type="button" value="Fecha" class="btn_close" onclick="fecha(2)">
        </nav>
        <div id="dados_historico_funcionarios">
                <!-- Conteudo virá por ajax -->
        </div>         
    </dialog>

    <dialog id="modal_cadastro" >
        <input type="button" value="Fecha" class="btn_close" onclick="fecha()">
        <section id="frame_cadastro">
            <div id="mensagem-cadastro">
                <!-- Mensagem de Cadastradocom Sucesso, virá por ajax -->
            </div>               
            <h1>Cadastrar Funcionário!</h1>
            <form action="" method="post" id="form_cadastro">
                <input type="text" placeholder="Nome" id="nome" name="nome" class="cadastro_bar">
                <input type="text" placeholder="Cargo" id="cargo"  name="cargo" class="cadastro_bar">
                <input type="text" placeholder="CPF" id="cpf"  name="cpf" class="cadastro_bar">
                <input type="text" placeholder="Estado Civil" id="estado_civil"  name="estado_civil" class="cadastro_bar">
                <input type="text" placeholder="Email" id="email"  name="email" class="cadastro_bar">
                <input type="text" placeholder="Telefone" id="telefone"  name="telefone" class="cadastro_bar">
                <input type="text" placeholder="Sexo" id="sexo"  name="sexo" class="cadastro_bar">
                <input type="text" placeholder="Nascimento" id="nascimento"  name="nascimento" class="cadastro_bar">
                <input type="button" value="Cadastrar"  id="btn_cadastrar">
                
            </form>
         
        </section>
    </dialog>
    <script src="../scripts/core.min.js"></script>
    <script src="../scripts/script_gestor.js"></script>
    <script src="../scripts/ajax_gestor.js"></script>
    <script src="../scripts/registrar_ponto.js"></script>    
    <script src="../scripts/cadastrar_func.js"></script>    

</body>

</html>