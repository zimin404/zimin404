<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Open+Sans&family=Roboto&display=swap');

  * {
    margin: 0;
    padding: 0;
  }

  body {
    font-size: 9px;
    font-family: 'Roboto', sans-serif;
  }

  table:first-child {
    display: none;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    background: #DAFEFF;
  }

  table tr td {
    height: auto !important;
    width: 200px !important;
    border: 1px solid black;
    font-size: 26px !important;
  }
  
  table:nth-child(7) {
      display: none;
  }
  
  table tr td p:nth-child(3) {
      /*border-top: 1px solid black;*/
  }
  
  table tr td:nth-child(1) {
    background: #fff;
    color: black;
    padding: 0;
    font-size: 14px;
    height: 30px !important;
    display: none;
  }

  table tr:first-child {
    background: #C2FFAE;
    text-align: center;
    font-size: 18px;
  }

  table tr:first-child td {
      height: 30px !important
  }

  table tr td {
    padding: 4px;
    text-align: center;
    font-size: 26px !important;
    font-weight: bold;
    width: 30%;
    display: block;
    float: left;
    height: 200px !important;
  }

  h1 {
      font-size: 36px;
      text-align: center;
      background-color: #2f6899;
      color: white;
      padding: 15px 0;
  }
  h1 a {
      text-decoration: none;
      color: white;
  }
  </style>
  <?php
    require "simple_html_dom.php";

    $site = file_get_html('https://cbcol.mskobr.ru/elektronnye_servisy/blog/');
    $link = $site->find('.kris-blogitem-all a')[0];
    $url  = $link->href;

    $url = 'https://cbcol.mskobr.ru/elektronnye_servisy/blog/uchchast/raspisanie-na-11-aprelya-2022-goda/';

    $table = file_get_html($url);

    $postdata = $table->find('.kris-post-item-txt')[0];

    echo "<h1>$link</h1>";
    echo $postdata;
    ?>
  <script>
  let par = document.querySelectorAll('p');
  par.forEach(function(el, ix) {
    let datael = el.innerHTML;
    if (el.innerHTML == '&nbsp;') {
      el.remove();
    }
  })
  </script>
  
  <script>
    window.setInterval('refresh()', 500000); 	// Call a function every 10000 milliseconds (OR 10 seconds).

    // Refresh or reload page.
    function refresh() {
        window .location.reload();
    }
</script>
</body>

</html>