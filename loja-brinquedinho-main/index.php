
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Replit - Login</title>
    <link href="style2.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="cabecalho_principal">
        <div class="cabecalho_divisor">
        </div>
        <div class="cabecalho_divisor">
        </div>
        <div class="cabecalho_divisor">
            <div class="cabecalho_fundoicone">
                <img class="cabecalho_icone" src="Icones/busca.svg">
            </div>
            <input class="cabecalho_busca" placeholder="Encontre o que procura aqui :)">
            <div class="cabecalho_fundoicone">
                <img class="cabecalho_icone" src="Icones/carrinho.svg">
            </div>
            <div class="cabecalho_fundoicone">
                <img class="cabecalho_icone" src="Icones/usuario.svg">
            </div>
        </div>
    </header>
    <main class="mainn">
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="POST">
        <label for="">Usuário:</label><br>
        <input type="text" name="usuario"><br>
        <label for="">Senha:</label><br>
        <input type="text" name="senha"><br><br>
        <input type="submit" value="Login">
    </form>
        </div>
        <div class="categorias_display">
            <!-- Your existing content goes here -->
        </div>
    </main>
    <footer class="footerr">

    </footer>

    <script type="module" src="script.js"></script>

</body>

</html>
