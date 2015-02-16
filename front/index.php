<?php
//llado al header - - - - -
include 'inc/cabecera.php';
?>

	<div id="ingreso">
		<form action="" method="">
			<p>Usuario</p>
			<div class="log"><i class="fa fa-user"></i></div>
			<input type="text" name="firstname">

			<p>Contraseña</p>
			<div class="log"><i class="fa fa-lock"></i></div>
			<input type="text" name="lastname">
			
			<p class="validar">El usuario o contraseña no coincide</p>
			<input type="checkbox" name="recordar" value="recordar">
			<p class="recordar">Recordar</p>
			<input type="submit" value="Entrar">
		</form>
	</div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>