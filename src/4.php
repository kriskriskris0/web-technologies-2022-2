<?php
function getMenu($menuArray)
{
    $res = "";
    if (!empty($menuArray)) foreach ($menuArray as $item)
    {
        $content = is_array($item) ? "<ul>".getMenu($item)."</ul>" : $item;
        $res = $res."<li>$content</li>";
    }
    return $res;
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
<div>
    <ul>
        <?php
        $reg = array(
            "Тюменская область", array("Тюмень", "Ишим"),
            "Московская область", array("Москва", "Тула")
        );
        $menu = getMenu($reg);
        echo $menu;
        ?>
    </ul>
</div>
</body>

</html>