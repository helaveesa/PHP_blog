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
                    $lists = file_get_contents ("list");
                    $array = explode ("\n", $lists);
                    //print_r ($array);
                    echo "\n";
                    echo "\n";
                    foreach ($array as $val){
                        $k = explode (" >>> ", $val);
                        //echo '<b>id:'.$k[0].'.</b> — '.$k[1].'<br />';
                        echo '<a href="./article.php?id='.$k[0].'"> '.$k[1].' </a><br />';
                       // print_r ($k);
                        //echo "<br />";



                    }
    ?>
    </body>
</html>
