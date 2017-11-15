<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/media_style.css">  
        <script src="http://code.jquery.com/jquery.min.js"></script>
        <script src="js/pikachoose-min.js"></script>
        <script src="js/animation.js"></script>
        <script>
            $(document).ready(
                    function () {
                        $("#pikame").PikaChoose();
                    });
        </script>
        <?php
        require_once 'controller/config.php';

        function get_images_db() {
            global $db;
            $query = "SELECT id, comment, img FROM photos WHERE (id <= 100 ) AND (id >= 1) ";
            $res = mysqli_query($db, $query);
            $images = array();
            while ($row = mysqli_fetch_assoc($res)) {
                $images[$row['id']] = $row;
            }
            return $images;
        }

        $dir = 'localhost/Gallery/';
        $images = get_images_db();
        ?>
        <title>сайт</title>

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
                        <ul id = "pikame">
                            <?php
                            for ($j = 1; $j <= count($images); $j++):
                                echo '<li><img src="Gallery/' . $images[$j]['img'] . '" > <span>'. $images[$j]['comment'] .' </span> </li>';
                            endfor;
                            ?>
                        </ul>
                    </div>

                </div>
                <div id="clear">

                </div>

                <?php include 'Footer.php' ?>

            </div>

    </body>
</html>