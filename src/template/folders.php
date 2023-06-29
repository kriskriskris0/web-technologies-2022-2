<?php
function getHtml($elements, $parent = null) {
    $html = '';
    foreach ($elements as $item) {
        if ($item["parentId"] == $parent) {
            $html .= '<div class="list-item list-item_open" data-parent>' .
                '<div class="list-item__inner">' .
                '<img class="list-item__arrow" src="img/chevron-down.png" alt="chevron-down" data-open>' .
                '<img class="list-item__folder" src="img/folder.png" alt="folder">' .
                '<span>' . $item["name"] . '</span>' .
                '</div>';

            $childHtml = getHtml($elements, $item["id"]);
            if (!empty($childHtml)) {
                $html .= '<div class="list-item__items">' . $childHtml . '</div>';
            }

            $html .= '</div>';
        }
    }

    return $html;
}

echo '<div class="list-items" id="list-items">';
echo getHtml($folders);
echo '</div>';
?>
