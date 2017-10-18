<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="style.css">  
        <script type="text/javascript" src="jquery-1.6.4.min.js"></script>
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
                <script type="text/javascript" src="slider.js">
                </script> 
                <div class="slider-box"> 

                    <div class="slider">                        
                        <img style=" height: 800px" src="images/4.jpg" alt="">
                        <img style=" height: 800px" src="images/5.jpg" alt="">
                        <img style=" height: 800px" src="images/6.jpg" alt="">
                        <img style=" height: 800px" src="images/7.jpg" alt="">
                    </div>
                    <div class="prev"></div>
                    <div class="next"></div>
                </div>
            </div>   
        </div>
        <div id="clear">

        </div>
        <?php include 'Footer.php' ?>

    </div>

</body>
</html>