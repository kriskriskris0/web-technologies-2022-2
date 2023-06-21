<?php
include '../config/config.php';

$url_array = explode('/', $_SERVER['REQUEST_URI']);

$action = isset($url_array[3]) ? $url_array[3] : '';

if ($url_array[2] == "") {
    $page = 'index';
} else {
    $page = $url_array[2];
}

$params = prepareParams($page,$action);

echo render($page, $params);


echo render($page, $params);