<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php include 'animation.php' ?>
    </head>
    <body>
        <div id="container">
            <?php include 'Header.php' ?>     

            <div id="content">   


                <div class="about">

                    <img style=" width: 40%; height: 40%" src="images/about.jpg" alt="">

                    <div id="pagehead" >

                        <a>ОБО МНЕ</a>   

                    </div>

                    <h3>
                        <?php
                        $str = htmlentities(file_get_contents("info.php"));
                        echo $str;
                        ?>
                    </h3>




                </div >


                <div id="clear">

                </div>
                <?php include 'Footer.php' ?>

            </div>
    </body>
</html>
