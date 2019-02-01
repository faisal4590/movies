<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/2/2019
 * Time: 1:25 AM
 */
require '../connection/connection.php';
$_GET['movieID'];

$comment = $_POST['comment'];

if (isset($_POST))
{
    $query = "insert into movies.comments(movie_id, comment, comment_date) values(?,?,?)";
    $statement = $db->prepare($query);
    $statement->bind_param("sss", $_GET['movieID'], $comment, date("Y-m-d"));
    $statement->execute();
    $statement->close();
    $db->close();
    header("location: ../index.php?ok=1");
}