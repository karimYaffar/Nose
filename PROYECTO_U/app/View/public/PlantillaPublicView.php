<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../Compra/Estilo.css"> -->
    
    
    
</head>

<header class="main-header">
    <div class="container container--flex">
        <div class="main-header__container">
        <!-- Titulo --><h1 class="__title">ELIXIR</h1>
            
        
            <nav class="main-nav" id="main-nav">
                <ul class="menu" id="__menu">
                <li class="menu__item"><a href="http://localhost/PHP/PROYECTO_U/?C=DefaultController&M=index" class="menu__link">Inicio</a></li>
                    <li class="menu__item"><a href="http://localhost/PHP/PROYECTO_U/?C=ControllerNosotros&M=index" class="menu__link">Nosotros</a></li>
                    <li class="menu__item"><a href="http://localhost/PHP/PROYECTO_U/?C=ControllerPoliticas&M=index" class="menu__link">Politicas</a></li>
                    <li class="menu__item"><a href="http://localhost/PHP/PROYECTO_U/?C=ControllerContacto&M=index" class="menu__link">Contacto</a></li>
                    <li class="singup"><a href="http://localhost/PHP/PROYECTO_U/?C=UserController&M=CallFormLogin" class="menu__link">Login</a></li>
                    <li class="login"><a href="http://localhost/PHP/PROYECTO_U/?C=UserController&M=CallFormAdd" class="menu__link">Sing up </a></li>
                </ul>
            </nav>
        </div>
        
        <div class="main-header__container_">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>   
            <a href="http://localhost/PHP/PROYECTO_U/?C=ControllerTienda&M=index" class="main-header__btn">Tienda<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></a>
            
           
        </div>
    </div>
</header>
<?php
include_once ($vista);
?>
<!-- <footer>
        <p>Derechos de Autor &copy; 2023 | ELIXIR </p>
        <nav>
            <ul>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Política de Privacidad</a></li>
                <li><a href="#">Contactanos</a></li>
            </ul>
        </nav>
    </footer> -->

</html>


