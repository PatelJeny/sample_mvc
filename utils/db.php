<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "sample_mvc";

$db = null;

function executeQuery($sql)
{
    global $db_host;
    global $db_username;
    global $db_password;
    global $db_name;
    global $db;

    $db = new mysqli($db_host, $db_username, $db_password, $db_name);
    
    if ($db->connect_error) {
        return false;
    }
    $result = $db->query($sql);
    $db->close();
    return $result;
}
