<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ACUA-PETS</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
	    <div class="container">
		<h1 class="display-4">
			<center>
				 <font color="violet" face="Comic Sans MS,Arial,Verdana">
				 	¡Bienvenid@s! 
				 </font>
			</center>
		</h1>
		<hr>
			





		</div>
	</div>
</body>
</html>


<?php 
		include "footer.php";
	} else {
		header("location:../inicio.php");
	}
?>