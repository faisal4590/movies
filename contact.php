<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/2/2019
 * Time: 12:00 PM
 */
include 'navbar.php';
?>
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <div class="inner-agile-w3l-part-head">
            <h3 class="w3l-inner-h-title">Contact</h3>
            <p class="w3ls_head_para">Contact us by using the form below</p>
        </div>
        <div class="w3_mail_grids">
            <form action="#" method="post">
                <div class="col-md-6 w3_agile_mail_grid">
										<span class="input input--ichiro">
											<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " required="">
											<label class="input__label input__label--ichiro" for="input-25">
												<span class="input__label-content input__label-content--ichiro">Your Name</span>
											</label>
										</span>
                    <span class="input input--ichiro">
											<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="">
											<label class="input__label input__label--ichiro" for="input-26">
												<span class="input__label-content input__label-content--ichiro">Your Email</span>
											</label>
										</span>
                    <span class="input input--ichiro">
											<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="">
											<label class="input__label input__label--ichiro" for="input-27">
												<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
											</label>
										</span>

                </div>
                <div class="col-md-6 w3_agile_mail_grid two">
                    <textarea name="Message" placeholder="Your Message" required=""></textarea>
                    <input type="submit" value="Submit">
                </div>
                <div class="clearfix"> </div>
            </form>
            <div class="agileits-get-us">
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Dhaka Cantonment</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>  +880 01521201537</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">faisal@gmail.com</a></li>
                </ul>

            </div>

        </div>
    </div>
    <div class=" map">
        <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ3aQ2AUHBVTcRbhaijta5K3o&key=AIzaSyBTRD0OTIECsxAaAMZKgvoP4ZDGJU18hX8"></iframe>
    </div>
</div>
<!--//content-inner-section-->

<?php
include 'footer.php';
?>