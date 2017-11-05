<!DOCTYPE html>
<html>
    <head>       
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <script src="http://code.jquery.com/jquery.min.js"></script>
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="media_style.css"> 
           <script src="animation.js"></script>
    </head>
    <body>
        <div id="container">
            <?php include 'Header.php' ?>     

            <div id="content">   
                <div id="pagehead" >

                    <a>ОФОРМИТЬ ЗАПИСЬ</a>   

                </div>       
                

                    <?php include 'Form.php'?>;
                       

                
                <div id="clear">

                </div>
                <?php include 'Footer.php' ?>

            </div>
    </body>
</html>
