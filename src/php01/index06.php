<?php
function score($score1 , $score2 , $score3)
{
    $total = $score1 + $score2 + $score3;
    return $total;
}

$exit = score(10 , 20 , 30);

if ($exit > 210) {
    echo "合計点は" . $exit . "なので合格です";
} else {
    echo "合計点は" . $exit . "なので不合格です";
}

function triangle($bottom , $height)
{
    $triangle = ($bottom * $height) / 2;
    return $triangle;

}

$triangleresult = triangle(10 , 2);
echo $triangleresult . "<br />";

function square($bottom , $height)
{
    $square = $bottom * $height;
    return $square;
}

$squareresult = square(10, 2);
echo $squareresult . "<br />";

function  trapezoid($top , $bottom, $height)
{
    $trapezoid = ($top + $bottom) * $height / 2;
    return $trapezoid;
}

$trapezoidresult = trapezoid(10, 20 , 30);
echo $trapezoidresult . "<br />";

function getSquare ($base , $height)
{
    return $base * $height;
}

function getTriangle($base, $height)
{
    return $base * $height / 2;
}

function getTrapezoid($top, $bottom , $height)
{
    return ($top + $bottom) * $height / 2;
}
echo getSquare(10 ,2 ) . "\n";
echo getTriangle(10 , 2). "\n";
echo getTrapezoid(10, 20, 30);