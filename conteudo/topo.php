<?php
    function getActiveClass($nomePagina){
        $paginaAtual = basename($_SERVER['PHP_SELF']);
        return $paginaAtual === $nomePagina ? 'ativo' : '';
    }
?>

<section class="site" class="animate__animated animate__zoomIn">
        <div><img src="img/Logo.png" alt="Logo" class="logo"></div>
        <button class="abrirMenu"><i class="fa-solid fa-bars"></i></button>
        <nav>
            <button class="fecharMenu"><i class="fa-solid fa-xmark"></i></button>
            <ul>
                <li class="<?= getActiveClass('index.php') ?>"><a href="index.php">Home</a></li>
                <li class="<?= getActiveClass('servicos.php') ?>"><a href="servicos.php">Serviços</a></li>
                <li class="<?= getActiveClass('contato.php') ?>"><a href="contato.php">Contato</a></li>
            </ul>
            <div class="clearfix">
                <h3>Onde estamos</h3>
                <p>Av. Marechal Tito, 1500<br>São Paulo-SP</p>
                <a class="maps-button"href="https://www.google.com/maps/place/Av.+Marechal+Tito,+1500+-+Jardim+Helena,+São+Paulo+-+SP,+08082-000,+Brazil"target="_blank">Ver no Google Maps</a>
            </div>
        </nav> 
</section>