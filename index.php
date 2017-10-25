<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="style.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="validation.js"></script>
        <?php include 'animation.php' ?>
    </head>
    <body>
        <div id="container">
            <?php include 'Header.php' ?>
            <div id="content">   
                <!--                <div id="crop">
                                    <img style="width: 100%; height: 800px" src="images/1.jpg"  alt="">
                                </div>-->
                <script>
                    <?php include 'slider.js' ?>
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

                <!--                    <div class="slider">                        
                                        <img style=" height: 800px" src="images/4.jpg" alt="">
                                        <img style=" height: 800px" src="images/5.jpg" alt="">
                                        <img style=" height: 800px" src="images/6.jpg" alt="">
                                        <img style=" height: 800px" src="images/7.jpg" alt="">
                                    </div>
                                    <div class="prev"></div>
                                    <div class="next"></div>-->

            </div>   
        </div>
        <div id="clear">

        </div>
        <?php include 'Footer.php' ?>

    </div>

</body>
</html>