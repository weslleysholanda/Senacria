<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contatos</title>
</head>
<body>
    <header>
        <?php require_once('conteudo/topo.php') ?>
    </header>
    
    <style>
       
    </style>
</head>
<body>
    <div class="contato">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58529.47470376562!2d-46.46705372387277!3d-23.529187153314485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1721586241543!5m2!1spt-BR!2sbr" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <form>
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome completo" require> 
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu email" require>
                <label for="phone">Celular</label>
                <input type="tel"  name="phone" placeholder="Digite seu telefone" require>
                <label for="subject">Assunto</label>
                <textarea name="mensagem" rows="4" placeholder="Digite sua mensagem" require></textarea>
                <button type="submit" value="Enviar">Enviar</button>
            </form>
        </div>
    </div>
    <!-- footer -->
    <?php require_once('conteudo/footer.php') ?>
    
  <!-- Jquery - Script para trabalhar com animações -->
  <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- Animação banner -->
    <script type="text/javascript" src="js/slick.min.js"></script>

    <script src="https://kit.fontawesome.com/89bd08d7e0.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>