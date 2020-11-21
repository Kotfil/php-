<?php 

$e = 22;//integer
$a = 15.4;//float
$b = 'письмо входящее'; // string
$c = false; //bool
$d = null; //null

$arr1 = array(100, 'письмо', true);

$arr2 = [
    'кошелек' => 500, 
    'конверт' => 'курсовая работа',
    'чехол для телефона' => false,
    'вава' => ['meshok','kartowka',]
];
$obj = new stdClass;

var_dump ($arr2);
//  
// var_dump ($a);
// var_dump ($b);
// var_dump (isset($c));
// var_dump (isset($d));
?>