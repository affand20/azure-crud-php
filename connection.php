<?php

// $server = 'trydevserver.database.windows.net';
// $username = 'trydev';
// $password = 'Try_dev98';
// $dbname = 'trydevwebapp';

// try {
//     $conn = new PDO("sqlsrv:server = $server; Database = $dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $e) {
//     print("Error connecting to SQL Server.");
//     die(print_r($e));
// }

$host = 'trydevmysql.mysql.database.azure.com';
$username = 'trydev@trydevmysql';
$password = 'Try_dev98';
$dbname = 'submission1';

$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $dbname, 3306);
if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


?>