<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class DataBase {
    public $db = null;

    public function __construct(){
        $this->db = new PDO('mysql:host=artemzimin.ru; dbname=admin_ruble_back',
            'admin_rubleback',
            'p@ssw0rDh3Ll0');
        $this->db->query('SET NAMES utf8');
        $current_data = date("Y-m-d H:s:i");
    }

    public function __desctruct(){
        $this->db = null;
    }
}

class InserData extends DataBase {
//    public function getData(){
//        $data = $this->db->query("SELECT * FROM wp_posts");
//        $dataObj = $data->fetchAll();
//        return $dataObj;
//    }

    public function inserPost(){
        $current_data = date("Y-m-d H:s:i");
        $sql = "INSERT INTO wp_posts 
                                    (
                                    post_author,
                                    post_date,
                                    post_date_gmt,
                                     
                                    )
                                    VALUES
                                   (
                                    1,
                                    1,
                                    '$current_data',
                                    
                                   )";
    }
}

$data = new InserData();

?>
</body>
</html>