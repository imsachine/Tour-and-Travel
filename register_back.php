<?php
include 'admin/connection.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$uid=$_POST['uid'];
$password=$_POST['password'];

$sql="INSERT INTO signup(name,mobile,user_id, password) VALUES('$name','$mobile','$uid','$password')";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result){
		echo "data added";
}
else{
	echo "not added";
}
}
	// header('Location: counselor.php');
exit;
?>