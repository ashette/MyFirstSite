﻿<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/media_style.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/validation.js"></script>
            <script src="js/animation.js"></script>
    </head>
    <body>
        <div id="container">
            <?php include 'Header.php' ?>
            <div id="content">            
                <script>
                    <?php include 'js/slider.js' ?>
                </script> 
                <div id="block-for-slider">
                    <div id="viewport">
                        <ul id="slidewrapper">
                            <li class="slide"><img src="images/4.jpg" alt="1" class="slide-img"></li>
                            <li class="slide"><img src="images/5.jpg" alt="2" class="slide-img"></li>
                            <li class="slide"><img src="images/6.jpg" alt="3" class="slide-img"></li>
                            <li class="slide"><img src="images/7.jpg" alt="4" class="slide-img"></li>
                        </ul>

                        <div id="prev-next-btns">
                            <div id="prev-btn"></div>
                            <div id="next-btn"></div>
                        </div>

                        <ul id="nav-btns">
                            <li class="slide-nav-btn"></li>
                            <li class="slide-nav-btn"></li>
                            <li class="slide-nav-btn"></li>
                            <li class="slide-nav-btn"></li>
                        </ul>
                    </div>
                </div>
            </div>   
        </div>
        <div id="clear">

        </div>
        <?php include 'Footer.php' ?>

    </div>

</body>
</html>