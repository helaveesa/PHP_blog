<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">     
    </head>
    <body>
        <?php
            $artic = file_get_contents ('txt/'.$_GET["id"].'.html');
            echo $artic;


    ?>
    </body>
</html>
