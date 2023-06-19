<?php
$titleText = 'Лекция 16';
$h1Text = 'Текущие данные';
$currentYear = date('Y');

function getCurrentTimeAsString() {
    $hours = date('H');
    $minutes = date('i');

    $hoursText = getHour($hours, 'час', 'часа', 'часов');
    $minutesText = getMin($minutes, 'минута', 'минуты', 'минут');

    return $hours . ' ' . $hoursText . ' ' . $minutes . ' ' . $minutesText;
}

function getHour($hour)
{
    $lastHourDigit = $hour % 10;
    if ($hour >= 5 and $hour <= 20)
    {
        return "часов";
    } elseif ($lastHourDigit == 1) {
        return 'час';
    } elseif ($lastHourDigit == 2 or $lastHourDigit == 3 or $lastHourDigit == 4) {
        return 'часа';
    }
}

function getMin($number, $form1, $form2, $form3) {
    $lastDigit = $number % 10;
    $secondLastDigit = ($number % 100) / 10;

    if ($secondLastDigit == 1) {
        return $form3;
    } elseif ($lastDigit == 1) {
        return $form1;
    } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
        return $form2;
    } else {
        return $form3;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titleText; ?></title>
</head>
<body>
<h1><?php echo $h1Text; ?></h1>
<p>Год: <?php echo $currentYear; ?></p>

<p>Время: <?php echo getCurrentTimeAsString(); ?></p>
</body>
</html>