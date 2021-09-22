<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuarios</title>

  <style>
    img{
      width: 10%;
    }
    body {
      background: url(img/plantas.jpg)  ; 
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      height: 100vh;
    }
  </style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="librerias/jquery-ui-1.12.1/jquery-ui.css">
</head>


<body>
	<br>
	<font color="white">
	<div class="container">
		<h1 class="text-center">
			<font color="white">Registro de Usuarios</font></h1>
			</body>
		<hr>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
			</body>
				
				<font color="#FFF5EE">
				<form id="frmRegistro" method="POST" onsubmit="return agregarUsuarioNuevo()" autocomplete="off">
					<h5>
				<center>
					<label><b>Nombre Personal</b></label>
					<input type="text" name="nombre" id="nombre" class="form-control" required="">
					<br>
					<label><b>Fecha de Nacimiento</b></label>
					<input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="" readonly="">
					<br>
					<label><b>Nombre de Usuario</b></label>
					<input type="text" name="usuario" id="usuario" class="form-control" required="">
					<br>
					<label><b>Email</b></label>
					<input type="email" name="correo" id="correo" class="form-control" required="">
					
					<br>
					<label><b>Contraeña</b></label>
					<input type="password" name="password" id="password" class="form-control" required="">

				</center>
			</h5>
		</font>
				<br>
					<div class="row">
						<div class="col-sm-6 text-left">
							<a href="index.php" class="btn btn-primary">Atrás</a>
						</div>

						<div class="col-sm-6 text-right">
								<button class="btn btn-success">Registrar</a>
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
				yearRange: '1990:' + yyyy,
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
						swal("Existe un Error al Ingresar, Intentelo despues :(");
					}else if (respuesta == 2) {
						swal("Este Usuario ya existe, ingrese otro :S");
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
