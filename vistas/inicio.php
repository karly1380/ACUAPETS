<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<center>
  <h1>holaaaaaaaaaaaaaa</h1>




</center>
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>