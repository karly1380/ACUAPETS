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
				 Contactanos
				 </font>
			</center>
		</h1>
		<hr>
        <br>

       <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.761347042381!2d-99.12103048255614!3d19.24923000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce014b9a64d0c7%3A0x4370f89fca74f386!2sLos%20Arcos%20De%20Santiago%20Tepalcatlalpa!5e0!3m2!1ses-419!2smx!4v1623958475845!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <br>
        <br>


        
        <div align="center">
        <p>
        <h4>
            ¡¡ Siguenos en nuestras redes sociales !!
            <br>
            <br>
            <hr style="height:3px; color: violet; background-color: violet;" />
            <br>
            <font color="#CC2EFA">
            WhatsApp: 55-23-32-40-37
            <br>
            <br>
            Correo: acua_pets@gmail.com
            <br>
            <br>
            Faceboock: ACUA-PETS@mascotas y accesorios
            <br>
            <br>
            Instagram: #ACUA-PETS
        </font>
        </h4>
        </p>

             </div> 
           </div>
         </div>
       </div>
    </div>
  </div>
</div>

     <script src="librerias/jquery-3.5.1.min.js "></script>
     <script src="librerias/popper.min.js"></script>
     <script src="librerias/bootstrap.min.js"></script>










			
</body>
</html>

<?php 
		include "footer.php";
	} else {
		header("location:../index.php");
	}
?>
