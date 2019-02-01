<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 3:19 PM
 */

include 'mainBanner.php';
?>

<div class="container">
    <div class="row">
        <form method="post" action="process/processAddMovieName.php" enctype="multipart/form-data">
            <div class="h1 alert-info text-center">
                Add movie name
            </div>

            <div class="form-group">
                <div>
                    <input type="text" name="addMovieName" class="form-control" placeholder="add movie name" required>
                </div>

                <div class="h1 alert-info text-center">
                    Add description
                </div>

                <div class="form-group">
                    <div>
                        <textarea name="addMovieDescription" class="form-control"></textarea>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add release date
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="date" name="addReleaseDate" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add rating
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="number" name="addRating" class="form-control" placeholder="add rating(1 to 5)" min="1" max="5" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add ticket price
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="number" name="addTicketPrice" class="form-control" placeholder="add ticket price" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add country
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="text" name="addCountry" placeholder="add country" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add genre
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="text" name="addGenre" placeholder="add genre" class="form-control" required>
                        </div>
                    </div>

                    <div class="h1 alert-info text-center">
                        Add photo
                    </div>

                    <div class="form-group">
                        <div>
                            <input type="file" class="filestyle" name="addPhoto">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-success" value="Submit" name="submitAddMovie">
                    </div>

        </form>


    </div>

</div>