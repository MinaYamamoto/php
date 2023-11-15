<?php
$people = array(
    "persion1" => "Taro",
    "persion2" => "jiro",
    "persion3" => "Saburo");
var_dump($people);
echo $people["persion1"];
foreach($people as $person => $name) {
    print $person . "は" . "$name" . "です" . "<br />";
}

$people2 = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29 ,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
    ];

    echo $people2[0]["age"];

    $people3 = array("Taro" , "Jiro" , "Saburo");
    foreach($people3 as $person) {
        echo $person;
        echo "<br />";
    }

    $people4 = [
        [ "Taro", 25 , "men"],
        [ "Jiro", 20 , "men"],
        [ "Hanako", 16 , "women"]
        ];

        foreach($people4 as $person) {
            echo $person[0] . '(' .$person[1] . '歳' . $person[2] , ')';
            echo '<br />';
        }
