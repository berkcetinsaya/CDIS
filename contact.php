<?php
include('login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CDIS | Cancer and Disease Identification System">
    <meta name="author" content="Berk Cetinsaya">

    <title>Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Navigation -->
    <nav style="background-color:#800000" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CDIS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION['login_user'])) {
                        ?>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a href="logout.php">Sign Out</a>
                        </li>
                    <?php
                } else {
                    ?>
                        <li>
                            <a href="signup.php">Sign Up</a>
                        </li>
                        <li>
                            <a href="signin.php">Sign In</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    <?php
                }
                ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>CDIS</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a style="color:#800000;" href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=34.722341, -92.338817&amp;spn=34.722341, -92.338817&amp;t=m&amp;z=13&amp;output=embed"></iframe> -->
                <iframe width="100%" height="400px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJL_aUdFik0ocRvB5dKX0wEsE&key=AIzaSyDU0mSkSi2kp0QssEkCqVOTNlDmNdr3xEM" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    2801 S University Ave<br>Little Rock, AR 72204<br>
                </p>
                <p><i class="fa fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (501) 569-3000</p>
                <p><i class="fa fa-envelope-o"></i>
                    <abbr title="Email">E</abbr>: <a style="color:#800000;" href="mailto:info@youcanask.xyz">info@youcanask.xyz</a>
                </p>
                <p><i class="fa fa-clock-o"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/cdis.ualr/" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/cdisualr" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/cancer-and-disease-identification-system" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        <!-- Footer -->
        <footer align="center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CDIS <?php echo date('Y'); ?></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>