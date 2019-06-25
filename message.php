<?php
error_reporting(0);
include('session.php');
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$result = $db->query("select * from user where email='$login_session'");
while ($row = $result->fetch_assoc()) {
    $u_id           = $row['id'];
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
function multiexplode($delimiters, $string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Berk Cetinsaya">

    <title>CDIS</title>

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
                    <li>
                        <a href="profile.php"><?php echo $first_name . " " . $last_name ?></a>
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
                <h1 class="page-header">Messages
                    <small><?php echo $first_name . " " . $last_name ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a style="color:#800000;" href="index.php">Home</a>
                    </li>
                    <li class="active">Messages</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="profile.php" class="list-group-item"><?php echo $first_name . " " . $last_name ?></a>
                    <?php if ($type != 1) { ?>
                        <a href="search.php" class="list-group-item">Search</a>
                    <?php } ?>
                    <a style="background-color:#800000;" href="message.php" class="list-group-item active">Messages</a>
                </div>
            </div>

            <!-- Content Column -->
            <div id="content" class="col-md-9">
                <?php if ($type == 2) {
                    ?>
                    <h2>Message</h2>
                    <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group">
                            <label class="control-label col-xs-4 col-sm-3 col-md-3 col-lg-3">Hospital:</label>
                            <div class="col-xs-8 col-sm-7 col-md-6 col-lg-7">
                                <select class="form-control" name="Hospital">
                                    <option selected>UAMS</option>;
                                    <option>Baptist Health</option>;
                                    <option>Arkansas Children Hospital</option>
                                </select>
                            </div>
                        </div>
                        <br/>
                        <h3>History
                            <small>Select a data from your symptomps history</small></h3>
                        <div class="form-group">

                            <div style="height:260px;overflow:auto;" class="col-xs-12 col-sm-12 col-lg-12">
                                <table class="table table-striped">
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM history where u_id = $u_id";
                                        if (!$result = $db->query($sql)) {
                                            die('There was an error running the query [' . $db->error . ']');
                                        }
                                        $hist_s_id = array();
                                        $hist_time = array();
                                        $hist_id   = array();
                                        while ($row = $result->fetch_assoc()) {
                                            $hist_id[]   = $row['id'];
                                            $hist_s_id[] = $row['s_id'];
                                            $hist_time[] = $row['time'];
                                        }

                                        $result->free();
                                        $hii = 0;
                                        $hi1 = sizeof($hist_s_id) - 1;

                                        rsort($hist_id);

                                        rsort($hist_time);

                                        krsort($hist_s_id);

                                        foreach ($hist_id as $symp) {
                                            echo $symp;
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $hii + 1;
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<label><input type=\"radio\" name=\"hist_radio[]\" value=\"$symp\"> $hist_time[$hii] </label>";
                                            echo "</td>";
                                            echo '<td >';
                                            echo $hist_s_id[$hi1];
                                            echo "</td>";
                                            echo "</tr>";
                                            $hii++;
                                            $hi1--;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-3 col-sm-offset-5 col-lg-offset-5 col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input style="background-color:#800000;" type="submit" name="hist" class="btn btn-primary" value="Submit">
                                <!-- <input type="submit" name="delete" class="btn btn-default" value="Delete"> -->
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['hist'])) {
                        if (!empty($_POST['hist_radio'])) {
                            $hospit = $_POST['Hospital'];

                            $r_id = implode(',', $_POST['hist_radio']);
                            $sql = "INSERT  INTO `contact` (`id`, `u_id`, `hospital`, `r_id`, `time`) VALUES (NULL, '{$u_id}', '{$hospit}','{$r_id}',NULL)";
                            if ($db->query($sql)) {
                                //echo "New Record has id ".$db->insert_id;
                                echo '<script type="text/javascript">';
                                echo 'alert("Your record was sent successfully");';
                                echo 'window.location.href = "message.php";';
                                echo '</script>';
                            } else {
                                echo "<p>MySQL error no {$db->errno} : {$db->error}</p>";
                                exit();
                            }
                        } else {
                            echo '<script type="text/javascript">';
                            echo 'alert("You should select a data from list");';
                            echo 'window.location.href = "message.php";';
                            echo '</script>';
                        }
                    } else if (isset($_POST['delete'])) {
                        if (!empty($_POST['hist_radio'])) {
                            $sql = "DELETE FROM contact WHERE r_id = $symp";
                            if ($db->query($sql)) { } else {
                                echo "<p>MySQL error no {$db->errno} : {$db->error}</p>";
                                exit();
                            }
                            $sql = "DELETE FROM `history` WHERE `id` = $symp";
                            if ($db->query($sql)) {
                                //echo "New Record has id ".$db->insert_id;
                                echo '<script type="text/javascript">';
                                echo 'alert("Your record was deleted");';
                                echo 'window.location.href = "message.php";';
                                echo '</script>';
                            } else {
                                echo "<p>MySQL error no {$db->errno} : {$db->error}</p>";
                                exit();
                            }
                        } else {
                            echo '<script type="text/javascript">';
                            echo 'alert("You should select a data from list");';
                            echo 'window.location.href = "message.php";';
                            echo '</script>';
                        }
                    }
                } else {
                    if (!isset($_POST['cont'])) {
                        ?>
                        <h2>Message</h2>
                        <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div style="height:300px;overflow:auto;" class="col-xs-12 col-sm-12 col-lg-12">
                                <table class="table table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Timestamp</th>
                                        <th>User ID</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM contact where hospital = '$phyhosp'";
                                        if (!$result = $db->query($sql)) {
                                            die('There was an error running the query [' . $db->error . ']');
                                        }
                                        $cont_u_id = array();
                                        $cont_time = array();
                                        $cont_id   = array();
                                        $r_id      = array();
                                        while ($row = $result->fetch_assoc()) {
                                            $cont_id[]   = $row['id'];
                                            $cont_u_id[] = $row['u_id'];
                                            $r_id[]      = $row['r_id'];
                                            $cont_time[] = $row['time'];
                                        }
                                        $result->free();
                                        $hii = 0;

                                        foreach ($cont_id as $symp) {
                                            echo "<tr>";
                                            echo "<td class='col-xs-1 col-sm-1 col-md-1 col-lg-1'>";
                                            echo $hii + 1;
                                            echo "</td>";
                                            echo "<td class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>";
                                            echo "<label><input type=\"radio\" name=\"cont_radio[]\" value=\"$symp\"> $cont_time[$hii] </label>";
                                            echo "</td>";
                                            echo "<td class='col-xs-4 col-sm-4 col-md-4 col-lg-2'>";
                                            echo $cont_u_id[$hii];
                                            echo "</td>";
                                            echo "</tr>";
                                            $hii++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-sm-offset-5 col-lg-offset-5 col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <input style="background-color:#800000;" type="submit" name="cont" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                    </form>
                <?php } else {
                if (!empty($_POST['cont_radio'])) {
                    $sql = "SELECT * FROM user where id in ( SELECT u_id from contact where hospital= '{$phyhosp}' and id = " . implode(',', $_POST['cont_radio']) . " ) ";
                    if (!$result = $db->query($sql)) {
                        die('There was an error running the query [' . $db->error . ']');
                    }

                    while ($row = $result->fetch_assoc()) {
                        $email1[]         = $row['email'];
                        $u_id1[]          = $row['id'];
                        $user_fname[]     = $row['first_name'];
                        $user_lname[]     = $row['last_name'];
                        $user_day[]       = $row['date_of_birth'];
                        $address1[]       = $row['address'];
                        $gender1[]        = $row['gender'];
                    }

                    $result->free();
                    $user_name = $user_fname[0] . " " . $user_lname[0];
                    $sql = "SELECT * FROM history where id in ( SELECT r_id from contact where id = " . implode(',', $_POST['cont_radio']) . " ) ";
                    if (!$result = $db->query($sql)) {
                        die('There was an error running the query [' . $db->error . ']');
                    }
                    while ($row = $result->fetch_assoc()) {
                        $s_id[]         = $row['s_id'];
                    }
                    $result->free();

                    ?>
                        <form class="form-horizontal" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>User ID:</label>
                                    <label><input type='radio' name='idd' value='<?php echo $u_id1[0]; ?>' checked=""> <?php echo $u_id1[0]; ?></label>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Patient Name:</label>
                                    <p class="form-control-static"> <?php echo $user_name; ?> </p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>E-mail:</label>
                                    <p class="form-control-static"> <?php echo $email1[0]; ?> </p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Date of Birth:</label>
                                    <p class="form-control-static"> <?php echo $user_day[0]; ?> </p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Gender:</label>
                                    <p class="form-control-static"> <?php echo ucfirst($gender1[0]); ?> </p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Address:</label>
                                    <p class="form-control-static"> <?php echo $address1[0]; ?> </p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Symptoms:</label>
                                    <p class="form-control-static"> <?php echo $s_id[0]; ?> </p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Prescription:</label>
                                    <textarea rows="10" cols="100" class="form-control" name="mes" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>

                            <!-- <div id="success"></div> -->
                            <!-- For success/fail messages -->
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-sm-offset-5 col-lg-offset-5 col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <input style="background-color:#800000;" name="send" type="submit" class="btn btn-primary" value="Submit">

                                </div>
                            </div>
                        </form>

                    <?php

                } else {
                    echo '<script type="text/javascript">';
                    echo 'alert("You should select a data from list");';
                    echo 'window.location.href = "message.php";';
                    echo '</script>';
                }
            }
            if (isset($_POST['send'])) {
                $mess = $_POST['mes'];
                $idd = $_POST['idd'];
                $sql = "UPDATE `contact` SET `prescription`= '{$mess}' WHERE hospital='{$phyhosp}' and u_id='{$idd}'";
                if ($db->query($sql)) {
                    echo '<script type="text/javascript">';
                    echo 'alert("Your record was sent successfully");';
                    //echo 'window.location.href = "message.php";';
                    echo '</script>';
                } else {
                    echo "<p>MySQL error no {$db->errno} : {$db->error}</p>";
                    exit();
                }
            }
            ?>

            <?php
        }
        $db->close();

        ?>
            <hr>
        </div>
        <!-- /.row -->
        <!-- Footer -->
        <footer align="center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CDIS <?php echo date('Y'); ?></p>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>