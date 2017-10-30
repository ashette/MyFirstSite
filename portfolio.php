<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <?php
        require_once './config.php';

        function get_images_db() {
            global $db;
            $query = "SELECT id, comment, img FROM photos  ORDER BY ord";
            $res = mysqli_query($db, $query);
            $images = array();
            while ($row = mysqli_fetch_assoc($res)) {
                $images[$row['id']] = $row;
            }
            return $images;
        }

        $dir = 'localhost/Gallery/';
        $images = get_images_db();
        var_dump($images);
        ?>
        <title>сайт</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="lightbox.css">

        <?php include 'animation.php' ?>
    </head>
    <body>
        <div id="container">
            <?php include 'Header.php' ?>     

            <div id="content">   
                <div id="pagehead" >

                    <a>ПОРТФОЛИО</a>                  

                </div>
                <div class="wrapper">

                    <div class="gallery">
                        <?php for ($j = 1; $j < 4; $j++):
                            echo '<img style=" width: 40%; height: 40%" class="front" src="Gallery/' . $images[$j]['img'] .'" alt="">';
                              
                        endfor;
                        ?>
                            
                            <div class="item">
                                <div>

                                        <span class="back">Фото <?= $j ?></span>
                                    </a>
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