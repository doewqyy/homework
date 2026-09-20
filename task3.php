<?php
function makeCoffe($type, $sugar = 0) {
    return "Ваш кофе ". $type. ", сахара: ". $sugar . " количество ";
}
 echo makeCoffe("Латте", 2 ) ;
 echo makeCoffe("Латте", 0 ) ;
 ?>
