<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <main class="login">
            <div class="content">
            <h2>Olá, faça seu login!</h2>
            <form action="">

                <label for=""></label>
                <div class="input-wrapper input-login">
                    
                    <input type="text" name="login" id="login" placeholder="Username">
                </div>

                <label for=""></label>
                <div class="input-wrapper input-senha">
                    <input type="password" name="senha" id="senha" placeholder="Password">
                </div>

                <button class="btn btn-danger">ENTRAR</button> 

            </form>
            <footer>
                Não possui conta ainda? <a href="cadastro.php">Cadastre-se</a>
            </footer>
            </div>
            <div class="img">
                <img src="img/img-login.png" alt="">
            </div>
        </main>

        <!--
        <section id="img">
            IMG
        </section>
-->
    </div>
</body>
</html>