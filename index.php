<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TPK - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

<?php require_once "nav.php"; ?>

<?php
if (isset($_GET["logout"])) {
    if ($_GET["logout"] == "true") { ?>

    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>You have been logged out of the system.</strong>
    </div>

<?php
    }
}
?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="https://jessica-elizabeth.net/wp-content/uploads/2019/05/Sean-Lew-1440x863.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="https://www.jfsvancouver.ca/wp-content/uploads/2018/09/Food-Bank-Story-5-e1538596042866.png" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/2/indore-india-city-skyline-fun-whimsical-series-wide-design-turnpike.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name">The Perfect Kitchen</span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By <strong>Harshita ??? Harish</strong></small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">What is <strong>The Perfect Kitchen</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The Perfect Kitchen marks the online presence of <i><b>HARSHITA-HARISH KI RASAOI</b></i>, a youtube channel started from the kitchen of middle class business woman.</p>
                    <p>We try to make uncommon dishes in the simplest way possible so that the same dish can be made in every common-man's kitchen without any chaos. We also try to recreate common dishes in the most uncommon way by giving them twists which no-one else can ever think of.</p>
                    <p>This website also contains blogs which are the transcripts of our youtube videos. It also contains some member exclusive contents and recipes which you can't find anywhere else over the internet.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Another Venture - Lady Care ????</strong>
                    </h2>
                    <hr>
                    <p><b><i>Lady Care</i></b> is a one stop solution for all the needs of a woman. Initially started as a small store for women, it now contains everything that a woman needs.</p>
                    <p>The shop also has a beauty salon where any and every kind of women grooming are done. The service rates and product costs are also reasonable making it the perfect dream place for any lady.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once "footer.php"; ?>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    })
    </script>

</body>

</html>
