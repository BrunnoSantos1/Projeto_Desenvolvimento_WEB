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
            <form action="" method="get" id="conteiner_btn">
                <img src="../asserts/images/logo_E.png" alt="Foto" id="usuario_img">
                <input type="button" value="Bater Ponto">
                <input type="button" value="Cadastrar Funcionarios" class="btn_modal" onclick="modal('cadastro')">
                <input type="button" value="Historico" class="btn_modal" onclick="modal('historico')">
                <input type="button" value="Mostrar Historico dos Funcionarios" class="btn_modal" onclick="modal()"
                    id="btn_func">
            </form>
            <aside id="conteiner_table">
                <table>
                    <tr>
                        <th>Nome:</th>
                        <th id="Dado_1"></th>
                    </tr>
                    <tr>
                        <th>CPF:</th>
                        <th id="Dado_2"></th>
                    </tr>
                    <tr>
                        <th>Estado Civil:</th>
                        <th id="Dado_3"></th>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <th id="Dado_4"></th>
                    </tr>
                    <tr>
                        <th>Telefone:</th>
                        <th id="Dado_5"></th>
                    </tr>
                    <tr>
                        <th>Sexo:</th>
                        <th id="Dado_6"></th>
                    </tr>
                    <tr>
                        <th>Nascimento:</th>
                        <th id="Dado_7"></th>
                    </tr>
                </table>
            </aside>
        </article>
    </section>
    <dialog id="modal_historico">
        <header>
            <input type="button" value="Fecha" class="btn_close" onclick="fecha(1)">
        </header>

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
    </dialog>

    <dialog id="modal_cadastro" >
        <input type="button" value="Fecha" class="btn_close" onclick="fecha()">
        <section id="frame_cadastro">
            <h1>Cadastrar Funcionário!</h1>
            <form action="" method="post" id="form_cadastro">
                <input type="text" placeholder="Nome" name="" class="cadastro_bar">
                <input type="text" placeholder="Cargo" name="" class="cadastro_bar">
                <input type="text" placeholder="CPF" name="" class="cadastro_bar">
                <input type="text" placeholder="Estado Civil" name="" class="cadastro_bar">
                <input type="text" placeholder="Email" name="" class="cadastro_bar">
                <input type="text" placeholder="Telefone" name="" class="cadastro_bar">
                <input type="text" placeholder="Sexo" name="" class="cadastro_bar">
                <input type="text" placeholder="Nascimento" name="" class="cadastro_bar">
                <input type="button" value="Cadastrar" id="btn_cadastrar">
            </form>
        </section>
    </dialog>
    <script src="../scripts/script_gestor.js"></script>

</body>

</html>