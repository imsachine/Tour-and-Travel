<?php

include 'admin/connection.php';

$uid = $_POST['uid'];
$upw = $_POST['password'];

	$qry3 = "SELECT *from signup where user_id='$uid' and password = '$upw'";
	$result3 = mysqli_fetch_row(mysqli_query($conn,$qry3));
	if($uid == $result3[3] and $upw == $result3[4])	
	{   
		session_start();
	   $_SESSION['user']=$uid;
		header('Location: index.php');
		exit();
			
	}
	else
	{
		session_start();
		// echo"dsfjksdfh";
		 $_SESSION['msg']='not valid id and password';
		 header('Location: login.php');
			exit();	
	}
?>