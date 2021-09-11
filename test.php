<?php
require 'src\faster.php';

use Dashzu\Faster\F;

$arr = new stdClass();
$arr->f1 = new stdClass();
$arr->f1->f2 = new stdClass();
$arr->f1->f2->f3 = 'qwerty';

$x = F::chainCall($arr, 'f1','f2','f3');
if($x !== null){
    print_r($x);
} else{
    echo "NULL ^_^";
}