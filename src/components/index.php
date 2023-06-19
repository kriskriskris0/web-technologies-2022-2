<?php


//1 задание

$a = -2;
$b = 5;

if ($a >= 0 and $b >= 0) {
    echo $a - $b . ' - разность';
}
elseif ($a < 0 and $b < 0) {
    echo $a * $b . ' - произведение';
}
else {
    echo $a + $b . ' - сумма';
}


// задание 2

$a = rand(0, 15);
echo "<br><br>";

echo "От а до 15: ";
while ($a <= 15) {
    switch ($a) {
        default:
            echo $a . " ";
            $a++;
            break;
    }
}


//3
echo "<br>";

function sum($a, $b) {
    return $a + $b;
}
function dif($a, $b) {
    return $a - $b;
}
function mul($a, $b) {
    return $a * $b;
}
function div($a, $b) {
    return $a / $b;
}

$a = sum(5,6);
$b = mul(33,66);
$c = dif(66,33);
$d = div(100,1);

echo $a . "\n";
echo $b . "\n";
echo $c . "\n";
echo $d . "\n";


//4
echo "<br>";

function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case '+' :
            return sum($a, $b);
        case '-' :
            return dif($a, $b);
        case '*' :
            return mul($a, $b);
        case '/' :
            return div($a, $b);
    }
}

echo mathOperation(5,5,'add') . "\n";

//5
echo "<br>";
$thisYear = date('Y ') . 'год';

?>
    <!DOCTYPE html>
    <html lang='ru'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <title></title>
    </head>
    <body>
    <div>
        <p><?= $thisYear?></p>
    </div>
    </body>
    </html>
<?php

//6

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    return $val * power($val, $pow - 1);
}
echo power(12, 3);