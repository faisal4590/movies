<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 3:30 PM
 */
require '../../connection/connection.php';

if (!empty($_POST))
{
    $msg = array();


    if (!(strtoupper(substr($_FILES['addPhoto']['name'], -4)) == ".JPG" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -4)) == ".jpg" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -5)) == ".JPEG" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -5)) == ".jpeg" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -4)) == ".GIF" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -4)) == ".gif" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -4)) == ".png" ||
        strtoupper(substr($_FILES['addPhoto']['name'], -4)) == ".PNG"))
    {
        $msg[] = 'wrong image file  type(supported formats are .jpg, .jpeg, .gif, .png)';
    }

    if ($_FILES['alumniCoverPic']['size'] > 10048576)
    {
        $msg[] = 'Maximum allowed file size is 10MB)';
        header("location:../addMovies.php?ok=0");
        die();
    }

    if (!empty($msg))
    {
        echo '<p style="color:red;
        margin-top: 30px;
        text-align: center;
         font-size: 22px;">
    <b >Error:-</b></p>';

        foreach ($msg as $k)
        {
            echo '<li style="color:red;
            font-weight: bold;list-style: none;
            margin-bottom: 5px;
            text-align: center;">' . $k;
        }
    }
    else
    {

        $movieName = $_POST['addMovieName'];
        $movieDescription = $_POST['addMovieDescription'];
        $releaseDate  =  $_POST['addReleaseDate'];
        $rating = $_POST['addRating'];
        $ticketPrice = $_POST['addTicketPrice'];
        $country = $_POST['addCountry'];
        $genre = $_POST['addGenre'];
        $photo          = $_FILES['addPhoto']['name'];

        move_uploaded_file($_FILES['addPhoto']['tmp_name'], '../../image/movies/'
            . $_FILES['addPhoto']['name']);

        $query = "insert into movies.films(name, description, release_date, rating, ticket_price, country, genre, photo)
        values(?, ?, ?, ?, ?,?,?,?)";

        $statement = $db->prepare($query);
        $statement->bind_param("ssssssss", $movieName, $movieDescription, $releaseDate,
            $rating,$ticketPrice,$country,$genre,$photo);

        $statement->execute();
        $statement->close();
        $db->close();
        header("location: ../addMovies.php?ok=1");
    }
}
else
{
    header("location:../addMovies.php?ok=0");
}

