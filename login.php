<?php
    session_start();
    include('db_conn.php');
    $error='';
    if (isset($_POST['signin'])) {
        $captcha=$_POST['g-recaptcha-response'];
        if(!$captcha){
            $error = "Please check the captcha form";
        }
        else{
            if (empty($_POST['inputEmail']) || empty($_POST['inputPassword'])) {
                $error = "Email or Password is required";
            }
            else{
                $email=$_POST['inputEmail'];
                $password=md5($_POST['inputPassword']);
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                $email = stripslashes($email);
                $password = stripslashes($password);
                $email = $mysqli->real_escape_string($email);
                $password = $mysqli->real_escape_string($password);
                $query = $mysqli->query("select * from user where password='$password' AND email='$email'");
                $rows = mysqli_num_rows($query);
                while($row = $query->fetch_assoc()){
                    $first_name     = $row['first_name'];
                    $last_name      = $row['last_name'];
                }
                if ($rows == 1) {
                    $_SESSION['login_user']=$email;
                    header("location: profile.php");
                }
                else {
                    $error = "Email or Password is invalid";
                }
                mysqli_free_result($query);
                $mysqli->close();
            }
        }
    }
?>