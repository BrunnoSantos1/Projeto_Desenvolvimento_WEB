<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointer</title>
    <link rel="shortcut icon" href="asserts/images/P.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <nav id="nav_conteiner">
            <img src="asserts/images/logo_pointer.png" alt="LOGO" id="logo_site">
        </nav>
    </header>
    <section>
        <div id="conteiner">
            <form action="autenticar.php" method="post">
                <img src="asserts/images/logo_E.png" alt="Logo_empresa" id="logo_empresa">
                <input class="elementos" type="text" name="usuario" placeholder="Usuario">
                <input class="elementos" type="password" name="senha" placeholder="Senha">
                <!-- <input id="btn_login" type="button" value="Entrar"> -->

                <button type="submit" id="btn_login" >Entrar</button>

            </form>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="funcionarios/listar.php"></script>

</body>

</html>