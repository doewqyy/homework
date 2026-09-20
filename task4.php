<?php
$discount = 50;

function applyDiscount($price) {
    global $discount;
    $finalPrise = $price - $discount;
    return $finalPrise;
}
 echo applyDiscount(500);
 ?>
