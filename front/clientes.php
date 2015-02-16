<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

		
			<div class="contenido">
				<h3 class="cab c-cli">Clientes</h3>
				<table width="100%" border="0" border="none" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<div class="cont-u-foto">
								<img src="img/foto-perfil-twistos.jpg">
								<div class="fb-foto"></div>
							</div>
						</td>
						<td>Twistos</td>
						<td>03</td>
						<td>02</td>
						<td>01/01/2010</td>
						<td>Activo</td>
						<td><a class="u-elim" href=""></a></td>
					</tr>
					<tr>
						<td>
							<div class="cont-u-foto">
								<img src="img/foto-perfil-la-araucana.jpg">
								<div class="fb-foto"></div>
							</div>
						</td>
						<td>La Araucana</td>
						<td>03</td>
						<td>02</td>
						<td>01/01/2010</td>
						<td>Activo</td>
						<td><a class="u-elim" href=""></a></td>
					</tr>
					<tr>
						<td>
							<div class="cont-u-foto">
								<img src="img/foto-perfil-dafiti.jpg">
								<div class="fb-foto"></div>
							</div>
						</td>
						<td>Dafiti</td>
						<td>03</td>
						<td>02</td>
						<td>01/01/2010</td>
						<td>Activo</td>
						<td><a class="u-elim" href=""></a></td>
					</tr>
					<tr>
						<td>
							<div class="cont-u-foto">
								<img src="img/foto-perfil-dafiti.jpg">
								<div class="fb-foto"></div>
							</div>
						</td>
						<td>Dafiti</td>
						<td>03</td>
						<td>02</td>
						<td>01/01/2010</td>
						<td>Activo</td>
						<td><a class="u-elim" href=""></a></td>
					</tr>
				</table>
				<div class="btns">
					<a class="btn-crear" href="crear-cliente.php">Crear</a>
				</div>
				
			</div><!-- /contenido - - -->
			
		</div><!-- Contenedor -->
		<div class="clearfix"></div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>