<?php
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TPK - Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

    <?php require_once "nav.php"; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Kitchen <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-border" src="https://thecozycook.com/wp-content/uploads/2019/05/BEST-Cheesy-Homemade-Garlic-Bread-Recipe-2.jpg" alt="">
                    <h2>Cheese Garlic Toast
                        <br>
                        <small>March 14, 2021</small>
                    </h2>
                    <p>A quick cheese garlic bread toast under 20 mins. You can make this with any kind of bread you have. We went ahead using a whole meal loaf. This is a very simple garlic bread recipe and you can spice it up with own ideas like using chili flakes, crushed pepper or even with fresh herbs or dried herbs.</p>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#cgtmodal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-border" src="https://images.herzindagi.info/image/2019/Sep/crispy-corn-recipe-main.jpg" alt="">
                    <h2>Crispy Corn
                        <br>
                        <small>March 6, 2021</small>
                    </h2>
                    <p>Crispy corn is a snack made by frying corn kernels and then flavoring with spice powders. There are a few different ways crispy corn is made in restaurants and fast food centers. You may find crispy corn coated with thin to extremely thick layer made using cornflour.</p>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#ccornmodal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="https://thechutneylife.com/wp-content/uploads/2020/05/Chili-Paneer-2-The-Chutney-Life-4-1.jpg" alt="">
                    <h2>Chilli Paneer
                        <br>
                        <small>Jan 22, 2021</small>
                    </h2>
                    <p>Chilli Paneer is one of the favorite dishes from Indian Chinese cuisine. In a typical Chilli Paneer recipe, the fried paneer cubes are tossed in a sweet, sour, spicy sauce. The paneer cubes can be coated with flours or batter coated and deep fried. The dry version of chilli paneer is served as a starter or appetizer snack. The gravy version is had with steamed rice or noodles. The semi-dry version can be had as an appetizer.</p>
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#cpanmodal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Modals -->
    <div id="cgtmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cheese Garlic Toast</h4>
                </div>
                <div class="modal-body">
                    <p>Full recipe</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="ccornmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crispy Corn</h4>
                </div>
                <div class="modal-body">
                    <p>Full recipe</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="cpanmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chilli Paneer</h4>
                </div>
                <div class="modal-body">
                    <p>Full recipe</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php require_once "footer.php"; ?>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
<?php

} else {
    header("location:login.php");
}
?>