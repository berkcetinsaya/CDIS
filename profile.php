<?php
include('db_conn.php');
error_reporting(0);
include('session.php');
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$result = $db->query("select * from user where email='$login_session'");
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CDIS | Cancer and Disease Identification System">
    <meta name="author" content="Berk Cetinsaya">

    <title>Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <a href="profile.php"><?php echo $first_name . " " . $last_name ?></a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Sign Out</a>
                    </li>


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
                <h1 class="page-header">Profile
                    <small><?php echo $first_name . " " . $last_name ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a style="color:#800000;" href="index.php">Home</a>
                    </li>
                    <li class="active">Profile</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a style="background-color:#800000;" href="profile.php" class="list-group-item active"><?php echo $first_name . " " . $last_name ?></a>
                    <?php if ($type != 1) { ?>
                        <a href="search.php" class="list-group-item">Search</a>
                    <?php } ?>
                    <a href="message.php" class="list-group-item">Messages</a>
                </div>
            </div>
            <!-- Content Column -->
            <div id="content" class="col-md-9">

                <h2>Personal Information</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">Email:</th>
                            <td class="col-xs-9"><?php echo $email ?></td>
                        </tr>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">First Name:</th>
                            <td class="col-xs-9"><?php echo ucfirst($first_name) ?></td>
                        </tr>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">Last Name:</th>
                            <td class="col-xs-9"><?php echo ucfirst($last_name) ?></td>
                        </tr>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">Date of Birth:</th>
                            <td class="col-xs-9"><?php echo $date_of_birth ?></td>
                        </tr>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">Address:</th>
                            <td class="col-xs-9"><?php echo $address ?></td>
                        </tr>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">Gender:</th>
                            <td class="col-xs-9"><?php echo ucfirst($gender) ?></td>
                        </tr>
                        <tr>
                            <th class="control-label col-xs-3" scope="row">Account Type:</th>
                            <td class="col-xs-9"><?php if ($type == 2) echo "Patient";
                                                    else echo "Physician"; ?></td>
                        </tr>
                        <?php if ($type == 1) { ?>
                            <tr>
                                <th class="control-label col-xs-3" scope="row">Hospital:</th>
                                <td class="col-xs-9"><?php echo ucfirst($phyhosp) ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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