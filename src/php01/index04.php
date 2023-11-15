<?php
$people = "Saburo";
$a = 7;

switch($people) {
    case "Taro":
    echo "太郎です  。";
    break;
    case "Jiro":
    echo "次郎です。";
    break;
    case "Saburo":
    echo "三郎です。";
    break;
}

$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;