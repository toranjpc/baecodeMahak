<?php
$serverName = "localhost\\MAHAK"; //serverName\instanceName
$connectionInfo = array("Database" => "MAHAK", "UID" => "sa", "PWD" => "6070582");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "Connection established.<br />";
} else {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}
