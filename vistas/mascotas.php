<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		include "header.php";
?>


<<!DOCTYPE html>
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
				 	Mascotas Domesticas
				 </font>
				 <hr>
			</center>
		</h1>
<center>




 
          <a class="btn btn-primary btn-lg" href="contacto.php" role="button">Contacto</a>
          </p>
          </center>

</body>
</html>



	<?php 
	include "footer.php";
	?>

	<?php
} else {
	header("location:../index.php");
}
?>


