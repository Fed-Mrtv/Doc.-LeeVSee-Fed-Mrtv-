<?php
\discount = 50;
function applyDiscount($price, $discount) {
    $finalPrice = $price - \$discount;
}

echo applyDiscount(500, \$discount);