<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 11:04 AM
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>

</head>
<body>
<?php
include 'navbar.php';
?>



<!-- Login modal starts-->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Login</h4>
                <div class="login-form">
                    <form action="process/processLogin.php" method="post" enctype="multipart/form-data">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="tp">
                            <input type="submit" value="LOGIN NOW">
                        </div>
                        <div class="forgot-grid">
                            <div class="log-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                            </div>
                            <div class="forgot">
                                <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login modal ends-->


<!-- Register modal starts -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Register</h4>
                <div class="login-form">
                    <form action="process/processRegister.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <input type="password" name="confirm_password" placeholder="Confirm Password" required="">
                        <div class="signin-rit">
													<span class="agree-checkbox">
														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a
                                                                    class="w3layouts-t" href="#"
                                                                    target="_blank">Terms of Use</a> and <a
                                                                    class="w3layouts-t" href="#"
                                                                    target="_blank">Privacy Policy</a></label>
													</span>
                        </div>
                        <div class="tp">
                            <input type="submit" value="REGISTER NOW">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register modal ends -->

<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <!--/agileinfo_tabs-->
        <div class="agileinfo_tabs">
            <!--/tab-section-->
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>All movies</li>


                </ul>
                <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                <div class="col-md-5 video_agile_player">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="f2Z65fobH2I" id="video"><img src="images/1.jpg" alt=""
                                                                                    style="height: 500px;"  class="img-responsive"/>
                                        </div>
                                    </div>


                                    <div class="player-text">
                                        <p class="fexi_header">Avengers Infinity War</p>
                                        <p class="fexi_header_para"><span
                                                    class="conjuring_w3">Story Line<label>:</label></span>
                                            The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful
                                            Thanos before his blitz of devastation and ruin puts an end to the universe.

                                            A film by Christopher Markus (screenplay by), Stephen McFeely (screenplay by)</p>
                                        <p class="fexi_header_para"><span>Release On<label>:</label></span>Sep 29, 2018
                                        </p>
                                        <p class="fexi_header_para">
                                            <span>Genres<label>:</label> </span>
                                            <a href="#">Drama</a> |
                                            <a href="#">Adventure</a> |
                                            <a href="#">Family</a>
                                        </p>
                                        <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                        </p>
                                    </div>
                                </div>


                                <div class="col-md-7 wthree_agile-movies_list " >
                                <?php
                                $query = "SELECT * FROM movies.films";
                                $result = mysqli_query($db, $query) or die('cant connect to query');
                                while($row = mysqli_fetch_array($result))
                                {
                                    $releaseDate = DateTime::createFromFormat("Y-m-d", $row['release_date']);
                                    echo '
                                   
                                    <div class="w3l-movie-gride-agile" style="height: 400px;">
                                        <a href="details.php?id='. $row['id'].'" class="hvr-sweep-to-bottom"><img style="height: 200px;"
                                                                                                src="images/' . $row['photo']. '"
                                                                                               title="Movies Pro"
                                                                                               class="img-responsive"
                                                                                               alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o"
                                                                            aria-hidden="true"></i>
                                            </div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home" style="height: 150px;">
                                            <div class="w3l-movie-text">
                                                <h6><a href="details.php?id='. $row['id'].'">' . $row['name']. '</a></h6>
                                            </div>
                                            <div class="mid-2 agile_mid_2_home">
                                                <p>' . $releaseDate->format("Y"). '</p>
                                                
                                             <div class="block-stars">
                                                ';
                                    $rating = $row['rating'];

                                    for ($i = 0; $i <$rating ;$i++)
                                    {
                                        echo '
                                        
                                                    <ul class="w3l-ratings" style="display: inline">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                           aria-hidden="true"></i></a></li>
                                                        </li>
                                                    </ul>
                                               
                                        ';
                                    }


                                    echo '
                                </div>
                                
                                
                                      <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>


                               
                                    ';
                                }
                                ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cleafix"></div>
                        </div>


                    </div>





                </div>
            </div>

        </div>

    </div>
</div>
<!--//content-inner-section-->

<?php
include 'footer.php';
?>
</body>
</html>
