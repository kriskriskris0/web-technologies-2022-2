<?php
function getDb() {
    static $db = null;
    if (is_null($db)) {
        $db = new mysqli(HOST, USER, PASS, DB);
        if ($db->connect_errno) {
            die("Could not connect: " . $db->connect_error);
        }
    }
    return $db;
}

function getAssocResult($sql, $params = array()) {
    $stmt = getDb()->prepare($sql);
    if ($stmt === false) {
        die("Error in query: " . getDb()->error);
    }

    if (!empty($params)) {
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $array_result = [];

    while ($row = $result->fetch_assoc()) {
        $array_result[] = $row;
    }

    $stmt->close();

    return $array_result;
}

function getOneResult($sql, $params = array()) {
    $stmt = getDb()->prepare($sql);
    if ($stmt === false) {
        die("Error in query: " . getDb()->error);
    }

    if (!empty($params)) {
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $stmt->close();

    return $row;
}

function executeSql($sql, $params = array()) {
    $stmt = getDb()->prepare($sql);
    if ($stmt === false) {
        die("Error in query: " . getDb()->error);
    }

    if (!empty($params)) {
        $types = str_repeat('s', count($params));
        $stmt->bind_param($types, ...$params);
    }

    $stmt->execute();
    $affected_rows = $stmt->affected_rows;

    $stmt->close();

    return $affected_rows;
}
?>

