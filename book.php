﻿<!DOCTYPE html>
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
                <div id="pagehead" >

                    <a>ЗАПИСАТЬСЯ</a>   

                </div>
                <div id ="evening">

                    <a class="show-btn" href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display = 'block';
                            document.getElementById('fade').style.display = 'block'"><img style="width: 15%; height: 15%"  src="images/evening.jpg"  ></a>
                        <?php include 'Form.php' ?>

                </div>
                <div id="clear">

                </div>
                <?php include 'Footer.php' ?>

            </div>
    </body>
</html>
