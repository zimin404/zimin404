<?php
require "simple_html_dom.php";

$site = 'http://code.mu/';

//$page = 'http://code.mu/ru/markup/book/prime/';
$page = 'http://code.mu/ru/javascript/book/supreme/regular/curly-braces/';

$content = file_get_html($page);

echo $content;
?>