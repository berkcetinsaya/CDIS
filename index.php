<?php
include('login.php');
error_reporting(0);
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$result = $db->query("select * from user where email='$_SESSION[login_user]'");
while ($row = $result->fetch_assoc()) {
    $email          = $row['email'];
    $first_name     = $row['first_name'];
    $last_name      = $row['last_name'];
    $date_of_birth  = $row['date_of_birth'];
    $address        = $row['address'];
    $gender         = $row['gender'];
    $type           = $row['type'];
    $phyhosp        = $row['hospital'];
}
$result->free();
$sql = "SELECT * FROM `symptoms` ORDER BY `count` DESC LIMIT 5";
if (!$result = $db->query($sql)) {
    die('There was an error running the query [' . $db->error . ']');
}
$sgname = array();
$sgcount = array();
while ($row = $result->fetch_assoc()) {
    $sgname[] = $row['name'];
    $sgcount[] = $row['count'];
}
$result->free();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CDIS | Cancer and Disease Identification System">
    <meta name="author" content="Berk Cetinsaya">
    <title>CDIS | Cancer and Disease Identification System</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


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
                        <li>
                            <a href="http://localhost:3000">CDISBooK</a>
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
                        <li>
                            <a href="http://localhost:3000">CDISBooK</a>
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
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('5IJrgb.png');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Blue.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('Sunset.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('X-Ray-sl.png');"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    Cancer and Disease Identification System
                </h1>
            </div>
            <?php
            if (!isset($_SESSION['login_user'])) {
                ?>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-arrow-circle-o-right"></i>Sign In</h4>
                        </div>
                        <div class="panel-body">
                            <p>If you have already an account, please click below.</p>
                            <a href="signin.php" class="btn btn-default btn-block">Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i>Contact Information</h4>
                        </div>
                        <div class="panel-body">
                            <p>If you want to contact us, please click below.</p>
                            <a href="contact.php" class="btn btn-default btn-block">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>


            <!-- Call to Action Section -->
            <div class="well">
                <div class="row">

                    <div class="col-md-offset-4 col-md-4">
                        <a class="btn btn-lg btn-default btn-block" href="signup.php">Sign Up</a>
                    </div>
                </div>
            </div>
        <?php
    } else {
        ?>
            <div id="content" class="col-md-9">

                <div class="panel panel-default text-center col-md-offset-2 col-md-12 col-lg-12 col-lg-offset-2">
                    <div class="panel-heading">
                        The most popular 5 symptoms in US
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body ">
                        <div id="graph" style="height: 250px;"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>

            <?php
        }
        ?>
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
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script>

        <?php
        if (isset($_SESSION['login_user'])) {

            echo " <script>
    

    new Morris.Bar({
          element: 'graph',
          data: [
            {x: '" . $sgname[0] . "', y: " . $sgcount[0] . "},
            {x: '" . $sgname[1] . "', y: " . $sgcount[1] . "},
            {x: '" . $sgname[2] . "', y: " . $sgcount[2] . "},
            {x: '" . $sgname[3] . "', y: " . $sgcount[3] . "},
            {x: '" . $sgname[4] . "', y: " . $sgcount[4] . "}
          ],
          xkey: 'x',
          ykeys: ['y'],
          labels: ['Occurrences'],
          hideHover: 'auto',
          resize: 'false',
          barColors: function(row, series, type) {
          if(series.key == 'y')
          {
            if(row.y < 5)
              return \"maroon\";
            else
              return \"maroon\";  
          }
          else
          {
            return \"green\";
          }
        }
        });
    </script>
    ";
        } ?>
</body>

</html>