<?php
$count = 0;
while ($count <= 100) {

    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}

$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
    }
    echo $i;
    $i++;
}

$nume = 0;
do {
    echo "num = $nume" . '<br />';
    $nume++;
} while ($nume < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($h = 1; $h <= 50; $h++) {
    if ($h % 15 == 0) {
        echo $FizzBuzz . '<br />';
    } else if ($h % 3 == 0) {
        echo $Fizz . '<br />';
    } else if ($h % 5 == 0) {
        echo $Buzz . '<br />';
    } else {
        echo $h . '<br />';
    }
}
for ($k = 1; $k < 6; $k++){
    for ($l = 1; $l < 6; $l++) {
        echo "●";
    }
    echo "<br />";
}