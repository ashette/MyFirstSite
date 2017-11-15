<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <script src="http://code.jquery.com/jquery.min.js"></script>
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/media_style.css"> 
        <script src="animation.js"></script>
    </head>
    <body>
        <div id="container">
            <?php include 'Header.php' ?>     

            <div id="content">   


                <div class="about">

                    <img   src="images/about.jpg" alt="">

                    <div id="pagehead" >

                        <a>ОБО МНЕ</a>   

                    </div>

                    <h3>
                        <?php
                        $fd = fopen("info.txt", 'r') or die("не удалось открыть файл");
                        while (!feof($fd)) {
                            $str = htmlentities(fgets($fd));
                            echo $str;
                        }
                        fclose($fd);
                        ?>
                    </h3>




                </div >


                <div id="clear">

                </div>
                <?php include 'Footer.php' ?>

            </div>
    </body>
</html>
