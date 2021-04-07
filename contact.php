<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TPK - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">

    <script src="js/jquery-1.10.2.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {

        $("#contact").click(function () {

            var fname = $("#fname").val();
            var email = $("#email").val();
            var message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "sendmsg.php",
                data: "fname=" + fname + "&email=" + email + "&message=" + message,
                success: function (html) {
                    if (html == 'true') {
                        $("#add_err2").html('<div class="alert alert-success"><strong>Message Sent!</strong></div>');

                    } else if (html == "fname_long") {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Name</strong> can\'t exceed 50 characters</div>');

                    } else if (html == "fname_short") {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Name</strong> can\'t be less than 2 characters</div>');

                    } else if (html == 'email_long') {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> can\'t exceed 50 characters</div>');

                    } else if (html == 'email_short') {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> can\'t be less than 2 characters</div>');

                    } else if (html == 'eformat') {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Email</strong> format incorrect.</div>');

                    } else if (html == 'message_long') {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Message</strong> can\'t exceed 500 characters</div>');

                    } else if (html == 'message_short') {
                        $("#add_err2").html('<div class="alert alert-danger"><strong>Message</strong> can\'t be less than 2 characters</div>');

                    } else {

                        $("#add_err2").html('<div class="alert alert-danger"><strong>Error</strong> processing request.</div>');

                    }
                },
                beforeSend: function () {
                    $("#add_err2").html('<div class="alert alert-warning">Loading....</div>');
                }
            });
            return false;
        });
    });
    </script>
</head>

<body>


    <?php require_once "nav.php"; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>The Perfect Kitchen</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72195.7188143146!2d75.82723720323992!3d22.6845706894669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd28e9aea0ab%3A0x11b3ecc038262318!2sLady%20Care!5e1!3m2!1sen!2sin!4v1617776158246!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-4">
                    <p><strong>Phone:</strong> <a href="tel:+91-94250-55808">+91-94250-55808</a>
                    </p>
                    <p><strong>Email:</strong> <a href="mailto:info@theprefectkitchen.com">info@theprefectkitchen.com</a>
                    </p>
                    <p><strong>Plus Code:</strong> PV35+PH Indore, Madhya Pradesh</p>
                    <p><strong>Address:</strong> <a href="https://goo.gl/maps/2Va9cwuDZ45X5fqR8" target="_blank">207, Palsikar Colony, Indore, Madhya Pradesh 452001, India</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="500" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="contact" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

<?php require_once "footer.php"; ?>

    <!-- JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>

</html>
