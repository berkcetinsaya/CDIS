<?php
	session_start();
	include('db_conn.php');
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$user_check=$_SESSION['login_user'];
	$ses_sql="select email from user where email='$user_check'";
	if(!$result = $db->query($ses_sql)){
       	die('There was an error running the query [' . $db->error . ']');
    }
    while($row = $result->fetch_assoc()){
		$login_session =$row['email'];
	}
	if(!isset($login_session)){
		$db->close();
		header('Location: index.php');
	}
?>