<?php

$regions = array(
    'Московская область' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская область' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    'Свердловская область' => array('Екатеринбург', 'Ревда', 'Артемовкий', 'Ирбит')
);

foreach ($regions as $key => $value)
{
    if (is_array($value)) {
        foreach ($value as $new_key => $new_value) {
            echo $new_value;
        }
    }
}