<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

			<div class="contenido">
				<h3 class="cab c-user">Usuarios</h3>
				<!-- <table width="100%" border="0" border="none" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<div class="cont-u-foto">
								<img src="img/foto-perfil-josefa.jpg">
								<div class="fb-foto"></div>
							</div>
						</td>
						<td><p>Marcela Contreras</p></td>
						<td><p>Admin</p></td>
						<td><p>pedroto@gmail.com</p></td>
						<td><p>Bowl</p></td>
						<td><p>01/01/2010</p></td>
						<td><p>Activo</p></td>
						<td><a class="u-elim" href=""></a></td>
					</tr>
				</table> -->

				<a class="usuarios" href="#">
					<div class="u-foto">
						<div class="cont-u-foto">
							<img src="img/foto-perfil-josefa.jpg">
							<div class="fb-foto"></div>
						</div>
					</div>
					<div class="u-nom">Marcela Contreras</div>
					<div class="u-tipo">Admin</div>
					<div class="u-mail">pedroto@gmail.com</div>
					<div class="u-cli">Bowl</div>
					<div class="u-reg">01/01/2010</div>
					<div class="u-estado">Activo</div>
					<!-- <div class="u-elim"><a class="u-elim" href=""></a></div> -->
				</a>

				<div class="btns">
					<a class="btn-crear" href="crear-usuario.php">Crear</a>
				</div>
			</div><!-- /contenido - - -->
			
		</div><!-- Contenedor -->
		<div class="clearfix"></div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>