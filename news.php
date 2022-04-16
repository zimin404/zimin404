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

                $title = $content->find('.topic-body__titles')[0]->plaintext;

                $text='';

                foreach($content->find('.topic-body__content-text') as $paragraph){
                    $text .= "<p>$paragraph->plaintext</p>";
                }


                if($content->find('.picture__image')){
                    $img_url = $content->find('.picture__image')[0]->src;
                    file_put_contents(pathinfo($img_url)['filename'].".jpg", file_get_contents($img_url));
                }

                die();
            }
        }
    ?>
    </ol>
</body>
</html>