<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style-home.css">
</head>
<body>
    <div class="container">
        <header id="topo">
            <div id="logo">
                <img src="img/img-login.png" alt="">
            </div>
            <nav id="menu">
                <a href="#">Home</a>
                <input type="search" class="buscar" id="buscar" placeholder="O que você esta buscando?">

            </nav>
            <div id="perfil">
                <a href="#">
                <i class="fa-solid fa-user"></i>
                </a>
            </div>
        </header>
        <section id="conteudo">
            <h1>E X P L O R E</h1>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-1.png" alt="">
                    <div class="text">C R O C H Ê</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-2.png" alt="">
                    <div class="text">C E R Â M I C A</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-3.png" alt="">
                    <div class="text">B I S C U I T</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-4.png" alt="">
                    <div class="text">B I J U T E R I A S</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-5.png" alt="">
                    <div class="text">B O R D A D O S</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-6.png" alt="">
                    <div class="text">P I N T U R A S</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-7.png" alt="">
                    <div class="text">R E C I C L A G E M</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-8.png" alt="">
                    <div class="text">A R G I L A</div>
                </div>
            </a>
            <a href="#">
                <div class="image-conteudo">
                    <img src="img/img-9.png" alt="">
                    <div class="text">G E S S O</div>
                </div>
            </a>
        </section>

        <footer id="rodape">
            <p>Todos os direitos reservados - <?=date('Y')?></p>
        </footer>
    </div>
</body>
</html>