<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenaCria</title>
    <link rel="stylesheet" href="css/reset.css">
    <!-- Animação -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- ANIMATE.CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--meu css-->
    <link rel="stylesheet" href="css/style.css">
</head >


<body>
    <!-- INICIO DO CABEÇALHO -->
    <header>
        <?php require_once('conteudo/topo.php') ?>
    </header>
    <main>
        <!-- Banner -->
        <?php require_once('conteudo/banner.php') ?>

        <!-- Parte de baixo do banner -->
        <?php require_once('conteudo/bannerFooter.php') ?>

        <!-- Sobre -->
        <?php require_once('conteudo/sobre.php') ?>

        <!-- servico -->
        <!-- <?php require_once('conteudo/servico.php') ?> -->

        <!-- Novidade -->
        <?php require_once('conteudo/novidade.php') ?>

        <!-- footer -->
        <?php require_once('conteudo/footer.php') ?>
    </main>

    <!-- Jquery - Script para trabalhar com animações -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- Animação banner -->
    <script type="text/javascript" src="js/slick.min.js"></script>

    <script src="https://kit.fontawesome.com/89bd08d7e0.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>