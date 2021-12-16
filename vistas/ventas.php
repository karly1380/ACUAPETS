<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Ventas</title>
	<?php require_once "menu.php"; ?>
</head>
<body>
	 
   

	<div class="container">
		<center>
		 <h1>Venta de Productos</h1>
		</center>
		<br>
		<br>
		
		 <div class="row">
		 	<div class="col-sm-12">


<center>
<button type="button" class="btn btn-primary btn-lg" id="ventaProductosBtn">Vender Producto</button>

<button type="button" class="btn btn-warning btn-lg" id="ventasHechasBtn">Ventas Hechas</button>
</center>

	<br>
		 	
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="ventaProductos"></div>
		 		<div id="ventasHechas"></div>
		 	</div>
		 </div>
	</div>
</body>
</html>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#ventaProductosBtn').click(function(){
				esconderSeccionVenta();
				$('#ventaProductos').load('ventas/ventasDeProductos.php');
				$('#ventaProductos').show();
			});
			$('#ventasHechasBtn').click(function(){
				esconderSeccionVenta();
				$('#ventasHechas').load('ventas/ventasyReportes.php');
				$('#ventasHechas').show();
			});
		});

		function esconderSeccionVenta(){
			$('#ventaProductos').hide();
			$('#ventasHechas').hide();
		}

	</script>

<?php 
	}else{
		header("location:../index.php");
	}
 ?>