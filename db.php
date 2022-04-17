<!doctype html>
<html lang="ru"+>
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

    public function addThumbnail($title_img, $post_parent){
        $sql = "INSERT INTO wp_posts 
                                    (
                                    post_author,
                                    post_date,
                                    post_date_gmt,
                                    post_content,
                                    post_title,
                                    post_excerpt,
                                    post_status,
                                    comment_status,
                                    ping_status,
                                    post_password,
                                    post_name,
                                    to_ping,
                                    pinged,
                                    post_modified,
                                    post_modified_gmt,
                                    post_content_filtered,
                                    post_parent,
                                    guid,
                                    menu_order,
                                    post_type,
                                    post_mime_type,
                                    comment_count
                                    )
                                    VALUES
                                   (
                                    '1',
                                    '$current_data',
                                    '$current_data',
                                    '$title_img',
                                    '',
                                    '',
                                    'publish',
                                    'closed',
                                    'open',
                                    '',
                                    '$title_img',
                                    '',
                                    '',
                                    '$current_data',
                                    '$current_data',
                                    '',
                                    '$post_parent',
                                    'https://rubleback.ru/alias',
                                    '0',
                                    'attachment',
                                    'image/jpeg',
                                    '0'
                                   )";
    }

    public function inserPost(){
        $current_data = date("Y-m-d H:s:i");
        $sql = "INSERT INTO wp_posts 
                                    (
                                    post_author,
                                    post_date,
                                    post_date_gmt,
                                    post_content,
                                    post_title,
                                    post_excerpt,
                                    post_status,
                                    comment_status,
                                    ping_status,
                                    post_password,
                                    post_name,
                                    to_ping,
                                    pinged,
                                    post_modified,
                                    post_modified_gmt,
                                    post_content_filtered,
                                    guid,
                                    menu_order,
                                    post_type,
                                    post_mime_type,
                                    comment_count
                                    )
                                    VALUES
                                   (
                                    '1',
                                    '$current_data',
                                    '$current_data',
                                    'title',
                                    'content',
                                    '',
                                    'publish',
                                    'closed',
                                    'open',
                                    '',
                                    'alias',
                                    '',
                                    '',
                                    '$current_data',
                                    '$current_data',
                                    '',
                                    'https://rubleback.ru/alias',
                                    '0',
                                    'post',
                                    '',
                                    '0'
                                   )";
    }
}

$data = new InserData();
$data->inserPost();
?>
</body>
</html>