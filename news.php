<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php
        require "simple_html_dom.php";
        $lenta =  'https://lenta.ru/';
        $site = file_get_html('https://lenta.ru/rubrics/economics/');

        $links = $site->find('._longgrid');

        foreach($links as $link){
            $content = file_get_html($lenta.$link->href);
            if($content){
                if($content->find('.picture__image')){
                    //$content->find('.picture__image')[0]->src
                }
            }
        }
    ?>
    </ol>
</body>
</html>