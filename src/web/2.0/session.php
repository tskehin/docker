<?php
	include('config.php');
	session_start();

	$user_check = $_SESSION['login_user'];

	$user_sql = mysqli_query($db,"SELECT user_name, user_id FROM User WHERE user_name = '$user_check' ");
	
	$user_row = mysqli_fetch_array($user_sql,MYSQLI_ASSOC);
	
	$login_session = $user_row['user_name'];
	$user_id = $user_row['user_id'];

	$content_sql = mysqli_query($db,"SELECT a.content_id, b.content_name FROM ContentUserRel a INNER JOIN Content b ON a.content_id = b.content_id WHERE user_id ='$user_id' ");
	$content_row = mysqli_fetch_all($content_sql,MYSQLI_ASSOC);

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>