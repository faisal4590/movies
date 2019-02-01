<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 1:34 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Admin</title>


</head>
<body>



<!--code for carousel starts here-->

<div id="carousel-example-generic" class="carousel slide my-carousel scrollAnimWholeCarousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../images/1.jpg" alt="..." class="center-block" style="height: 600px; width: 100%;">
            <div class="carousel-caption">
Avengers
</div>
        </div>
        <div class="item">
            <img src="../images/2.jpg" alt="..." class="center-block" style="height: 600px;width: 100%;">
            <div class="carousel-caption">
Me before you
</div>
        </div>

        <div class="item">
            <img src="../images/3.jpg" alt="..." class="center-block" style="height: 600px;width: 100%;">
            <div class="carousel-caption">
Blade
</div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!--code for carousel ends here-->


</body>
</html>