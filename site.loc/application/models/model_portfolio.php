<?php

class Model_Portfolio extends Model {

    public function get_data() {

        define("SITE", "http://localhost");
        define("DBHOST", "localhost");
        define("DBUSER", "root");
        define("DBPASS", "1111");
        define("DBNAME", "gallery");
        $db = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
        mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");

        
            
            $query = "SELECT id, comment, img FROM photos WHERE (id <= 100 ) AND (id >= 1) ";
            $res = mysqli_query($db, $query);
            $images = array();
            while ($row = mysqli_fetch_assoc($res)) {
                $images[$row['id']] = $row;
            }
  
       

        return $images;
    }

}
