<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/2/2019
 * Time: 12:00 PM
 */

?>


<?php
include "navbar.php";
?>

<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <div class="inner-agile-w3l-part-head">
            <h3 class="w3l-inner-h-title">Movie List</h3>
            <p class="w3ls_head_para">List of all movies that are available.</p>
        </div>
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <div class="agile-news-table">
                        <div class="w3ls-news-result">
                            <h4>Search Results :
                                <span>
                                    <?php
                                    $query = "select * from films";
                                    $result = mysqli_query($db,$query) or die('cannot connect to query');
                                    $row = mysqli_fetch_array($result);
                                    $rowCount = mysqli_num_rows($result);

                                    ?>
                                </span>
                            </h4>
                        </div>
                        <table id="table-breakpoint">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Movie Name</th>
                                <th>Year</th>
                                <th>Ticket price</th>
                                <th>Country</th>
                                <th>Genre</th>
                                <th>Rating</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                $releaseYear =DateTime::createFromFormat("Y-m-d", $row['release_date'] );
                                echo '
                                
                                         <tr>
                                        <td>'.  $row['id']  .'</td>
                                        <td class="w3-list-img"><a href="details.php?id='.  $row['id']  .'">
                                            <img src="images/'.  $row['photo']  .'" alt=""/> <span>'.  $row['name']  .'</span></a>
                                        </td>
                                        <td>'.  $releaseYear->format("Y")  .'</td>
                                        <td>'.  $row['ticket_price']  .'</td>
                                        <td class="w3-list-info"><a href="l">'.  $row['country']  .'</a></td>
                                        <td class="w3-list-info"><a href=""> '.  $row['genre']  .'</a></td>
                                        <td>'.  $row['rating']  .'</td>
                                    </tr>

                                ';
                            }
                            ?>
                           


                           
                            </tbody>
                        </table>
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
