<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
   
    
    
</head>
<body>
<div id="home" class="navbar-fixed">
    <nav class="grey darken-3">
        <div class="nav-wrapper container">
          <a id="logo" href="#!" class="brand-logo">MineConstruction</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#">Home</a></li>
            <li><a href="#">Curiosidades</a></li>
            <li><a href="#">Fotos</a></li>
            <li><a href="#">Redes Sociais</a></li>
          </ul>
        </div>
    </nav>
    </div>
    <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Home</a></li>
        <li><a href="#">Curiosidades</a></li>
        <li><a href="#">Fotos</a></li>
        <li><a href="#">Redes Sociais</a></li>
    </ul>

    <div id="header">
        <div id="wrap">
            <h1>MineConstruction</h1>
            <div id="info">
                <p>O MineConstruction é um site que contém diveras construções magníficas realizadas dentro do jogo Minecraft. Você ainda não sabe o que é Minecraft ?</p>
                <a href="https://www.minecraft.net/pt-br/" id="custom-botao">Saiba mais sobre o Minecraft</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
    <script>$(".button-collapse").sideNav()</script>