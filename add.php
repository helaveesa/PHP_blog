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
        <form action="#" method="post" name="blog">
            <p><b>Ваше имя:</b><br>
            <input type="text" size="40">
            <p><b>Заполните поля ниже:</b><Br>
            <input type="" name="title" value="Введите заголовок"> Заголовок<Br>
            <textarea name="content" cols="40" rows="3" value=""></textarea> Текст</p>
            <p><input type="submit" value="Отправить">
        </form>
    <?php
    print_r($_POST);
    if ($_POST["title"] != "" && $_POST["content"] != "") {
                echo $_POST["title"];
                echo $_POST["content"];
                echo "\n";
                if (!file_exists("list")) {
                    file_put_contents("list", "1 >>> ".$_POST["title"]);
                    file_put_contents ('txt/1.html', $_POST["content"]);
                }
                else {
                    $string = file_get_contents("list");
                    $array = explode("\n", $string);
                    $last = end ($array);
                    echo "\n";
                    echo "\n";
                    echo '$array: ';
                    print_r ($array);
                    $a = explode( " >>> ", $last);
                    echo "\n";
                    echo "\n";
                    echo '$last: ';
                    print_r ($last);
                    echo "\n";
                    echo "\n";
                    echo '$a: ';
                    print_r ($a);
                    $b = $a[0] + 1; 
                    file_put_contents("list", "\n".$b.' >>> '.$_POST["title"], FILE_APPEND);
                    file_put_contents ('txt/'.$b.'.html', $_POST["content"]);
                    print_r ("list", "\n".$b.' >>> '.$_POST["title"]);
                    $lists = file_get_contents ("list");
                    echo $lists;
                    $dir = "txt";
                    if (is_dir ($dir)) {   
                        echo $dir.' - директория существует;<br>'; 
                        $files = scandir($dir); 
                           print_r($files);                                                 
                            for ($i=0; $i < sizeof($files); $i++) 
                            echo '-файл: '.$files[$i].';<br>';              
                    } 
                    else echo $dir.' -такой директории нет;<br>';                   
                    }
                    foreach ($dir as &$b) {
                    $b = $b  $_POST["content"];
                    echo "$b <br />\n";
                    }
        }
        else {
            echo "Введите данные";
        }
    ?>
    </body>
</html>
