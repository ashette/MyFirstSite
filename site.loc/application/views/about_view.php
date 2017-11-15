<div id="content">   


    <div class="about">

        <img  src="../../images/about.jpg" alt="">

        <div id="pagehead" >

            <a>ОБО МНЕ</a>   

        </div>

        <h3>
            <?php
          
            $fd = fopen('info.txt', 'r') or die("не удалось открыть файл");
            while (!feof($fd)) {
                $str = htmlentities(fgets($fd));
                echo $str;
            }
            fclose($fd);
            ?>
        </h3>




    </div>