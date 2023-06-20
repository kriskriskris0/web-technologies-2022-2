<?php

//1-2
define('DIR_IMG', './gallery_img', false);

function renderTemplate($page, $arrImg = [], $arrHtml = []) {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

function logging() {
    $day = date('G:i:s d:m:Y');
}

function renderArr() {
    $arr = [];
    $scanDir = scandir(DIR_IMG);
    for ($i = 0; $i < count($scanDir); $i++) {
        if (strlen($scanDir[$i]) > 2) {
            $scanDirImg = scanDir(DIR_IMG . "/" . $scanDir[$i]);
            for ($j = 0; $j < count($scanDirImg); $j++) {
                if (strlen($scanDirImg[$j]) > 2) {
                    $arr[$i - 2][$j - 2] = DIR_IMG . "/" . $scanDir[$i] . "/" . $scanDirImg[$j];
                }
            }
        }
    }

    return $arr;
}

$arrImg = renderArr();

$gallery = renderTemplate('gallery', $arrImg);

$arrHtml = array($gallery);

echo renderTemplate('main', $arrImg, $arrHtml);

//3

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_FILES as $key => $file) switch ($key) {
        case 'image':
            if ($file['type'] === 'image/jpeg' || $file['type'] === 'image/jpg') {
                $image = imagecreatefromjpeg($file['tmp_name']);
                $img = imagescale($image, 400, 400);
                imagejpeg($img, $file['tmp_name']);
            } elseif ($file['type'] === 'image/png') {
                $image = imagecreatefrompng($file['tmp_name']);
                $img = imagescale($image, 400, 400);
                imagepng($img, $file['tmp_name']);
            } else {
                echo 'Неподдерживаемый тип файла.';
            }

            $maxSize = 5 * 1024 * 1024;
            $fileSize = $file['size'];
            $errorMessage = '';

            while ($maxSize < $fileSize) {
                $errorMessage = 'Файл слишком большой. Максимальный размер: 5 МБ.';
                break;
            }

            if (!empty($errorMessage)) {
                echo $errorMessage;
                exit;
            }

            $uploadPath = DIR_IMG . '/big/' . $file['name'];
            $thumbnailPath = DIR_IMG . '/small/' . $file['name'];

            if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                copy($uploadPath, $thumbnailPath);
            } else {
                echo 'Ошибка при загрузке файла.';
            }

        default:
            echo 'Файл не найден.';
            break;
    }
}
?>

    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
    <div class="add">
        <form method="post" enctype="multipart/form-data">
            <input id="file" type="file" name="myFile" accept="image/jpg, image/jpeg">
            <input id="submit" type="submit" value="Загрузить">
        </form>
    </div>
    </body>

    </html>
<?php




