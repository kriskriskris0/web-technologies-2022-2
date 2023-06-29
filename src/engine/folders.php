<?php

function getFolders() {
    $sql = "SELECT id, name, parentId FROM `folders`";
    return getAssocResult($sql);
}

