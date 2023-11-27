<!DOCTYPE html>
<html>
<body>
 
<?php
    session_start(); 
    session_unset(); 
   session_destroy();
  if(isset($_SESSION['user']))
  {  
    

  }
	else{
		echo"byyyy";
	}

  header('Location: login.php');
	exit();	
?>
 
</body>
</html>