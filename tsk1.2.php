<?php
function getGreeting(\&name) {
    return "Привет, \&name!";
}

echo getGreeting ("Анна") . "<br>";
echo getGreeting ("Борис") . "<br>";
echo getGreeting ("Виктор") . "<br>";