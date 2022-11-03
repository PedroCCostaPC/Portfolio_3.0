<?php 
    require_once("data/skills.php");
    require_once("data/cursos.php");
    require_once("data/projetos.php");
    require_once("data/trampos.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Cesar Costa</title>

    <!-- ICONE -->
    <link rel="icon" type="img/png" href="assets/img/icon.png" >

    <!-- AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- LIB -->
    <link rel="stylesheet" href="assets/lib/slick/slick.css">

    <!-- FONTES -->
    <link rel="stylesheet" href="assets/fonts/font.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/desktop.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/animeBoxCursos.css">

</head>
<body id="inicio">

    
    
    <!-- ******************* HEADER ******************* -->
    <header class="container">

        <div id="paiHeader">

            <div id="nav">
                <div id="logo">
                    <a href="#inicio">PEDRO <span>CESAR</span></a>
                </div>
                
                <div id="botNav">
                    <button>
                        <hr><hr id="hr"><hr>
                    </button>
                </div>
            </div>

            <nav class="anime-nav-dark">
                <div class="anime-nav-box">
                    <ul>
                        <li><a id="nav-1" class="pag" href="#inicio"><i class="fa-sharp fa-solid fa-house-chimney"></i> Início</a></li>
                        <li><a id="nav-2" href="#skills">Skills</a></li>
                        <li><a id="nav-3" href="#cursos">Cursos</a></li>
                        <li><a id="nav-4" href="#projetos">Projetos</a></li>
                        <li><a id="nav-5" href="#trampos">Trampos</a></li>
                    </ul>
                </div>
            </nav>
        </div> <!-- Fim Div #paiHeader -->

    </header>


    <!-- ******************* SLIDE ******************* -->
    <section id="slide" class="container">

        <div id="sobre">
            
            <div id="profissao">
                <h1>Desenvolvedor</h1>
                <a href="https://github.com/PedroCCostaPC" target="blanck"><i class="fa-brands fa-github"></i></a>
            </div>

            <div id="contatos">

                <!-- Telefone -->
                <div class="contato">
                    <div class="col1">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>

                    <div class="col2">
                        <p>Telefone</p>
                        <p>(11) 93010-2315</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="contato">
                    <div class="col1">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="col2">
                        <p>E-Mail</p>
                        <p>pedro.ccosta@hotmail.com</p>
                    </div>
                </div>

                <!-- Localização -->
                <div class="contato">
                    <div class="col1">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div class="col2">
                        <p>Localização</p>
                        <p>São Paulo</p>
                    </div>
                </div>

            </div> <!-- Fim Div #contatos -->

        </div> <!-- Fim Div #sobre -->

    </section>


    <!-- ******************* SKILLS ******************* -->
    <section class="container">

        <div id="skills">

            <div class="titulo">
                <h1>Skills</h1>
                <hr>
            </div>

            <div class="row">

                <?php foreach($skills as $skill): ?>

                    <div class="col">
                        <div class="col1">
                            <img src="assets/img/<?= $skill['img'] ?>" alt="<?= $skill['titulo'] ?>">
                        </div>

                        <div class="col2">
                            <h2><?= $skill['titulo'] ?></h2>
                            <p>
                                <?= $skill['descricao'] ?>
                            </p>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div> <!-- Fim Div .row -->

        </div>

    </section>


    <!-- ******************* CURSOS ******************* -->
    <section class="container">

        <div id="cursos">

            <div class="titulo">
                <h1>Cursos</h1>
                <hr>
            </div>

            <div id="sitacao">
                <div class="concluido sit">
                    <p><i class="fa-solid fa-bookmark"></i> Barra Verde = Concluído</p>
                </div>

                <div class="cursando sit">
                    <p><i class="fa-solid fa-bookmark"></i> Barra Azul = Cursando</p>
                </div>

                <div class="fila sit">
                    <p><i class="fa-solid fa-bookmark"></i> Barra Roxa = Fila</p>
                </div>

                <div class="inconpleto sit">
                    <p><i class="fa-solid fa-bookmark"></i> Barra Vermelha = Incompleto</p>
                </div>
            </div>

            <!-- CAROUSEL -->
            <div class="carousel">

                <?php foreach($cursos as $curso): ?>
                    <div class="curso">
                        <img src="assets/img/cursos/<?= $curso['img'] ?>" alt="<?= $curso['nome'] ?>">
                        <div class="curso-descricao curso-<?= $curso['status'] ?>">
                            <h2><?= $curso['nome'] ?></h2>
                            <p><?= $curso['descricao'] ?></p>

                            <div class="button">
                                <button class="<?= $curso['id'] ?>">Veja Mais</button>
                            </div>
                            
                        </div>
                    </div>
                <?php endforeach; ?>

            </div> <!-- Fim Div .carousel -->

        </div> <!-- Fim Div #cursos -->

    </section>

    <?php require_once("cursosDetalhes.html"); ?>

    <!-- ******************* PROJETOS ******************* -->
    <section class="container">
        <div id="projetos">

            <div class="titulo">
                <h1>Projetos</h1>
                <hr>
            </div>

            <div class="row">

                <?php foreach($projetos as $projeto): ?>
                    <div class="col">
                        <img src="assets/img/projetos/<?= $projeto['img'] ?>" alt="<?= $projeto['nome'] ?>">
                        <p><?= $projeto['descricao'] ?></p>

                        <a target="blanck" href="<?= $projeto['link'] ?>">Ir para projeto</a>

                        <a target="blanck" href="<?= $projeto['git'] ?>">
                            <i class="fa-brands fa-github"></i> Código no GitHub
                        </a>
                        
                    </div>
                <?php endforeach; ?>

            </div>

        </div> <!-- Fim Div #projetos -->
    </section>


    <!-- ******************* TRAMPOS ******************* -->
    <section class="container">
        <div id="trampos">
            <div class="titulo">
                <h1>Trampos</h1>
                <hr>
            </div>


            <div class="row">

                <?php foreach($trampos as $trampo): ?>
                    <div class="col">
                        <img src="assets/img/trampos/<?= $trampo['img'] ?>" alt="<?= $trampo['nome'] ?>">

                        <h2><span>Cargo</span> <?= $trampo['cargo'] ?></h2>

                        <p>
                            <?= $trampo['descricao'] ?>
                        </p>
                    </div>
                <?php endforeach; ?>

            </div>


        </div> <!-- Fim Div #trampos -->
    </section>



    <!-- ******************* FOOTER ******************* -->
    <section>
        <div id="footer">
            <div id="footerBox">

                <div class="col-1">
                    <div class="row">
                        <p><i class="fa-brands fa-whatsapp"></i> Telefone</p>
                        <p>(11) 93010-2315</p>
                    </div>

                    <div class="row">
                        <p><i class="fa-solid fa-envelope"></i> E-Mail</p>
                        <p>pedro.ccosta@hotmail.com</p>
                    </div>

                    <div class="row">
                        <p><i class="fa-solid fa-location-dot"></i> Localização</p>
                        <p>São Paulo - SP</p>
                    </div>

                    <div class="row">
                        <p>Utilizado no projeto</p>
                        <p class="linguagem-utilizadas">
                            <i class="fa-brands fa-html5"></i> 
                            <i class="fa-brands fa-css3-alt"></i> 
                            <i class="fa-brands fa-php"></i> 
                            <i class="fa-brands fa-js"></i>
                        </p>
                    </div>

                    <div class="row">
                        <p>Portfólio 3.0</p>
                    </div>

                    <div class="row">
                        <a target="blanck" href="https://github.com/PedroCCostaPC/Portfolio_3.0" ><i class="fa-brands fa-github"></i> Link do projeto </a>
                    </div>

                </div>

                <div class="col-2">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <p>Site desenvolvido para portfólio e estudo - 2022 - Pedro Cesar Costa</p>
                </div>
            </div>
        </div>
    </section>


    <!-- JQUERY -->
    <script src="assets/lib/jquery/jquery.js"></script>
    <!-- CARROUSEL SLICK -->
    <script src="assets/lib/slick/slick.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src="assets/js/layout.js"></script>

</body>
</html>
