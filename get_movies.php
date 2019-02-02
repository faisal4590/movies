<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/2/2019
 * Time: 12:51 PM
 */

include 'connection/connection.php';


$sql = "SELECT * FROM movies.films WHERE films.name LIKE '%" . $_GET['search'] . "%'";

$array = $db->query($sql);

foreach ($array as $key)
{

    ?>
    <div id="movie">
        <a href="details.php?id=<?php echo $key['id'];?>" style="text-decoration: none; color:white; padding: 10px;">
            <img width="50" height="50" class="img img-circle" style="margin-bottom: 5px;" src="image/movies/<?php echo $key['photo']; ?>" id="pic" alt="">
            <span id="searchMovieName"><?php echo $key['name']; ?></span>
        </a>

    </div>
    <?php

}