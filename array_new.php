<?
echo '$a = 5';
echo "\n";
$a = '5';
var_dump($a);
echo "\n";
echo "\n";
echo '$a[0] = 5; $a[1] = 43';
echo "\n";
$a = array();
$a[0] = '5'; 
$a[1] = 43;
var_dump($a);
echo "\n";
var_dump($a[1]);
?>