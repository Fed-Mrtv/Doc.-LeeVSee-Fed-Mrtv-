<?php
function processComment(\$comment) {
    $cleanComment = trim($comment):
    if (strlen(\$cleanComment) < 5) {
        return "Комментарий слишком короткий";
    } else {
        return "Комментарий принят";
    }
}

echo processComment("Привет") . "<br>";
echo processComment("Hi") . "<br>";
echo processComment("   короткий    ") . "<br>";