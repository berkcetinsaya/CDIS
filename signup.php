<?php include('db_conn.php');
include('login.php');
if (isset($_SESSION['login_user'])) {
    header("location: profile.php");
}
?>
<!DOCTYPE html>

<html lang="en">

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

    <title>Sign Up</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <?php
    if (!isset($_POST['submit'])) {
        ?>
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
                    <h1>Sign Up</h1>
                    <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
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
                            <label class="control-label col-xs-3" for="firstName">First Name:</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" for="lastName">Last Name:</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
                            <div class="col-xs-9">
                                <input type="text" onkeypress="return isNumber(event)" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Date of Birth:</label>
                            <div class="col-xs-3">
                                <select class="form-control" name="Month">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        if ($i == date("m"))
                                            echo "<option selected>$i</option>";
                                        else
                                            echo "<option>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control" name="Date">
                                    <?php
                                    for ($i = 1; $i <= 31; $i++) {
                                        if ($i == date("d"))
                                            echo "<option selected>$i</option>";
                                        else
                                            echo "<option>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control" name="Year">
                                    <?php

                                    for ($i = date("Y"); $i >= 1900; $i--) {
                                        if ($i == date("Y"))
                                            echo "<option selected>$i</option>";
                                        else
                                            echo "<option>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" for="postalAddress">Address:</label>
                            <div class="col-xs-9">
                                <textarea rows="3" class="form-control" name="postalAddress" id="postalAddress" placeholder="Postal Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3" for="ZipCode">Zip Code:</label>
                            <div class="col-xs-9">
                                <input type="text" onkeypress="return isNumber(event)" class="form-control" name="ZipCode" id="ZipCode" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Gender:</label>
                            <div class="col-xs-2">
                                <label class="radio-inline">
                                    <input type="radio" name="genderRadios" checked="" value="male"> Male
                                </label>
                            </div>
                            <div class="col-xs-2">
                                <label class="radio-inline">
                                    <input type="radio" name="genderRadios" value="female"> Female
                                </label>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-3 col-xs-3">
                                <div class="g-recaptcha" data-sitekey="YOURKEY"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-3 col-xs-9">
                                <input style="background-color:#800000;" type="submit" name="submit" class="btn btn-primary" value="Submit">
                                <input type="reset" class="btn btn-default" value="Reset">
                            </div>
                        </div>
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

        <?php
    } else {
        $captcha = $_POST['g-recaptcha-response'];
        if (!$captcha) {
            $error = "Please check the captcha form";
        } else {
            $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($db->connect_errno > 0) {
                die('Unable to connect to database [' . $db->connect_error . ']');
            }
            $email      = $_POST['inputEmail'];
            $password   = md5($_POST['inputPassword']);
            $first_name = $_POST['firstName'];
            $last_name  = $_POST['lastName'];
            $phone      = $_POST['phoneNumber'];
            $date       = $_POST['Year'] . "-" . $_POST['Month'] . "-" . $_POST['Date'];
            $address    = $_POST['postalAddress'];
            $zip        = $_POST['ZipCode'];
            $address    = $address . ", " . $zip;
            $gender     = $_POST['genderRadios'];
            $exists     = 0;
            $error      = '';
            $fields = array('inputEmail', 'inputEmail', 'firstName', 'lastName', 'phoneNumber', 'postalAddress', 'ZipCode', 'genderRadios');
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $exists = 4;
            }
            foreach ($fields as $fieldname) { //Loop trough each field
                if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
                    $exists = 1;
                }
            }
            $result = $db->query("SELECT email from user WHERE email = '{$email}' LIMIT 1");
            if ($result->num_rows == 1) $exists = 3;

            if ($exists == 4) {
                echo '<script type="text/javascript">';
                echo 'alert("Email is invalid!");';
                echo 'window.location.href = "signup.php";';
                echo '</script>';
            } else if ($exists == 1) {
                echo '<script type="text/javascript">';
                echo 'alert("Fields can not be empty!");';
                echo 'window.location.href = "signup.php";';
                echo '</script>';
            } else if ($exists == 3) {
                echo '<script type="text/javascript">';
                echo 'alert("Email already exists!");';
                echo 'window.location.href = "signup.php";';
                echo '</script>';
            } else {
                $sql = "INSERT  INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `phone`, `date_of_birth`, `address`, `gender`, `type`) 
                            VALUES (NULL, '{$email}', '{$password}', '{$first_name}', '{$last_name}', '{$phone}', '{$date}', '{$address}', '{$gender}', 2)";
                if ($db->query($sql)) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Registered Successfully");';
                    echo 'window.location.href = "signin.php";';
                    echo '</script>';
                } else {
                    echo "<p>MySQL error no {$db->errno} : {$db->error}</p>";
                    exit();
                }
            }
            $db->close();
        }
    }
    ?>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script>
            function isNumber(evt) {
                evt = (evt) ? evt : window.event;
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
        </script>

</body>

</html>