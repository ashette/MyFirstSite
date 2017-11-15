<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/media_style.css">  
        <script src="http://code.jquery.com/jquery.min.js"></script>
        <script src="../../js/pikachoose-min.js"></script>
        <script src="js/animation.js"></script>
        <script src="js/script.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/slider.js"></script>
    <head>
    <body>
        <div id="container">
            <div id="header">
                <div id="logo">
                    <h2><a href="/main">ANASTASIA SHULGA</a></h2>    
                </div> 
                <div id="a">
                    <a> MAKE-UP ARTIST</a>
                </div>
            </div>       

            <div id="menu" class="menu">

                <div class="menu__icon">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul>
                    <li>  <a href="/main"  title="">Главная</a> </li>
                    <li> <a href="/portfolio"  title="">Портфолио</a </li>
                    <li> <a href="/about"  title="">Обо мне</a></li>
                    <li>  <a href="/book"  title="">Записаться</a></li>
                    <li>  <a href="/contacts"  title="">Контакты</a></li>
                </ul>
            </div>
            <?php include 'application/views/'.$content_view; ?>
        </div>
    </body>

    <div id="footer">
        <div id ="rights">
            <a>All rights reserved. 2017</a>
        </div>
    </div>
    
    <html>