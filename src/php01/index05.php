<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for($count = 1; $count <= 50; $count++){
    if ($count % 15 === 0 ){
        echo $FizzBuzz . "<br />";
    } elseif($count % 3 === 0 ){
        echo $Fizz . "<br />";
    } elseif($count % 5 === 0 ){
        echo $Buzz . "<br />";
    } else {
        echo $count . "<br />";
    }
}

for($a = 1; $a <=5; $a++){
    for($b = 1; $b <=5; $b++) {
        echo "●";
    }
    echo "<br />";
}
?>