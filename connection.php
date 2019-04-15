<?php

$server = 'trydevserver.database.windows.net';
$username = 'trydev';
$password = 'Try_dev98';
$dbname = 'trydevwebapp';

try {
    $conn = new PDO("sqlsrv:server = $server; Database = $dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


?>