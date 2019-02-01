<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 10:43 AM
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'movies');
$dbHost = DB_HOST;
$dbUser = DB_USER;
$dbPassword = DB_PASS;
$dbName = DB_NAME;

$db = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else
{
    $db->select_db('movies');
    //echo 'Connection successful';
}


?>