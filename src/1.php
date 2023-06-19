<?php

function printNumbers()
{
    $i = 0;
    do {

        if ($i == 0) {
            $i = "- это ноль.";
        }
        else {
            $i = $i % 2 == 0 ? "- чётное число" : "- нечётное число";
        }
        echo '<br>';
        $i++;
    } while ($i <= 10);
}

printNumbers();