<?php
include('login.php');
if (isset($_SESSION['login_user'])) {
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        h1 {
            font-size: 9px;
            margin: 30px 0;
            padding: 0 200px 15px 0;
            border-bottom: 1px solid #E5E5E5;
        }

        .bs-example {
            margin: 20px;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CDIS | Cancer and Disease Identification System">
    <meta name="author" content="Berk Cetinsaya">
    <title>Sign In</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
    <!-- Navigation -->
    <nav style="background-color:#800000;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>
                    <li>
                        <a href="signin.php">Sign In</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="bs-example">
                <h1>Sign In</h1>
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="inputEmail">Email:</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" for="inputPassword">Password:</label>
                        <div class="col-xs-9">
                            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-3">
                            <div class="g-recaptcha" data-sitekey="YOURKEY"></div><br />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input style="background-color:#800000;" type="submit" name="signin" class="btn btn-primary" value="Sign In">
                        </div>
                    </div>
                    <span>
                        <?php echo '<div id="spa">';
                        echo $error;
                        echo '</div>'; ?>
                    </span>
                </form>
            </div>
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

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>