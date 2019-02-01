<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/2/2019
 * Time: 12:05 AM
 */
include 'navbar.php';

$_GET['id'];

?>

<?php
$query = "SELECT * FROM movies.films where films.id = " . $_GET['id'];
$result = mysqli_query($db, $query) or die('cant connect to query');
$row = mysqli_fetch_array($result);
?>

    <div class="w3_content_agilleinfo_inner" style="margin-left: 350px;">
        <div class="agile_featured_movies">
            <div class="inner-agile-w3l-part-head">
                <h3 class="w3l-inner-h-title text-center" style="margin-right:250px;"><?php echo $row['name']; ?></h3>
                <p class="w3ls_head_para" style="margin-right:250px;"><?php echo $row['description']; ?></p>
            </div>
            <div class="latest-news-agile-info">
                <div class="col-md-8 latest-news-agile-left-content">
                    <div class="single video_agile_player">

                        <div class="video-grid-single-page-agileits">
                            <div data-video="f2Z65fobH2I" id="video"><img
                                        src="image/movies/<?php echo $row['photo']; ?>" alt=""
                                        class="img-responsive" style="height: 450px;"/></div>
                        </div>

                    </div>


                    <div class="response">
                        <h4>Comments</h4>
                        <div class="media response-info">

                            <div class="media-body response-text-right">

                                    <?php

                                    $query = "select * from movies.comments where movie_id =" . $_GET['id'];
                                    $result = mysqli_query($db, $query) or die('cant connect to query');
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        echo '<p  style="font-style: italic">'. "\""  . $row['comment'] . "\""
                                        .
                                            '
                                      </p>
                                                <ul>
                                                    <li>'. $row['comment_date'] . '
                                                    </li>
                                                    </li>
                                                </ul>
                                        
                                            '

                                        ;
                                    }


                                    ?>




                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>


                    <div class="all-comments-info">
                        <h5>LEAVE A COMMENT</h5>
                        <div class="agile-info-wthree-box">
                            <form method="post" action="process/processComment.php?movieID=<?php echo $_GET['id']; ?>"
                                  enctype="multipart/form-data">

                                <div class="col-md-12 form-info">

                                    <?php
                                    if (isset($_SESSION['status']))
                                    {
                                        echo ' <textarea name="comment"  placeholder="Message" required=""></textarea>';
                                    }
                                    else
                                    {
                                        echo ' <textarea  disabled placeholder="please login to comment" required=""></textarea>';
                                    }
                                    ?>

                                    <input type="submit" value="SEND">
                                </div>
                                <div class="clearfix"></div>


                            </form>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!--//content-inner-section-->


<?php
include 'footer.php';