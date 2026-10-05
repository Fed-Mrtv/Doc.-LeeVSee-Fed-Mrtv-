<?php
function makeCoffee($type, $sugar = 0) {
    return "Ваш кофе; $type, сахара: $sugar ложек";
}

echo makeCoffee("эспрессо") . "<br>;";
echo makeCoffee("капучино", 2) . "<br>";