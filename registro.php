<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.css">

 <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css"  href="2.css">
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">



<body>
	<font color="white">
	<div class="container">
		<h5 class="text-center">
			<font color="#FFFF00"><b>Registrate Aqui</b></font>
		</h5>
		</body>
		<hr>
		
			</body>
				<font color="#FFF5EE">
			 
				<form id="frmRegistro" method="POST" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
					<h6>
				<center>
					<label>Nombre Personal</label>
					<input type="text" name="nombre" id="nombre" class="form-control" required="">
					<br>
					<label>Fecha de Nacimiento</label>
					<input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="" readonly="">
					<br>
					<label>Nombre de Usuario</label>
					<input type="text" name="usuario" id="usuario" class="form-control" required="">
					<br>
					<label>Email</label>
					<input type="email" name="correo" id="correo" class="form-control" required="">
					
					<br>
					<label>Contraeña</label>
					<input type="password" name="password" id="password" class="form-control" required="">

				</center>
			</h6>
		</font>
				<br>
					<div class="row">
						<div class="col-sm-6 text-left">
							<a href="index.php" class="btn btn-primary">Atrás</a>
						</div>

						<div class="col-sm-6 text-right">
								<button class="btn btn-warning">Registrar</a>
						</div>
					</div>
				</form>
			</div>

	
		</div>
	</div>

	<script src="librerias/js/jquery-3.5.1.min.js"></script>
	<script src="librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
	<script src="librerias/sweetalert.min.js"></script>

	<script type="text/javascript">
		$(function(){
			var fechaA = new Date();
			var yyyy = fechaA.getFullYear();

			$("#fechaNacimiento").datepicker({

				changeMonth: true,
				changeYear: true,
				yearRange: '1950:' + yyyy,
				dateFormat: "dd-mm-yy"
			});
		});
	

		function agregarUsuarioNuevo() {
			$.ajax({
				method: "POST",
				data: $('#frmRegistro').serialize(),
				url: "procesos/usuario/registro/agregarUsuario.php",
				success:function(respuesta){
					console.log(respuesta);
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						swal("Existe un Error al Ingresar - Intentelo mas tarde");
					}else if (respuesta == 2) {
						swal("Este Usuario ya existe, Ingrese uno nuevo ");
					}else {
						$('#frmRegistro')[0].reset();
						swal("Se Agrego con Exito!! :D");
					}
				}
			});

			return false;
		}
	</script>
</body>
</html>
