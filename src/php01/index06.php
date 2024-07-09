<?php
function outputHaru ($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputHaru (3);

function outputHallu()
{
    echo "Hello world";
}
outputHallu();

function text ($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$value = text (2, 4);
echo $value;

$value2 = text (3, 5);
echo $value2;
echo '<br />';


//自分の回答
function test ($score1, $score2, $score3)
{
    $testvalue = $score1 + $score2 + $score3;
    return $testvalue;
}

$testtotal = test (10, 20, 30);

if ($testtotal > 210) {
    echo "合計点は" . $testtotal . "なので合格です";
}
if ($testtotal <= 210) {
    echo "合計点は" . $testtotal . "なので不合格です";
}
echo '<br />';

//正しい解答
function exam ($score1, $score2, $score3)
{
    $examtotal = $score1 + $score2 + $score3;
    if ($examtotal > 210) {
        echo "合計点は" . $examtotal . "点なので合格！";
    } else {
        echo "合計点は" . $examtotal . "点なので不合格・・・";
    }
}
echo exam (80, 60, 90);
echo '<br />';

function getSquareArea ($base, $height)
{
    return $base * $height;    
}
function getTriangleArea ($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea ($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea (5,5) . "\n";
echo getTriangleArea (7,8) . "\n";
echo getTrapezoidArea (4,5,4) . "\n";
