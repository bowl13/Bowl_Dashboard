<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

			<div class="contenido">
				<h3 class="cab c-cli">Crear Clientes</h3>
				<div class="contenido-crear">
					<form class="editando" action="" method="">

						<div class="izq">
							<div class="cont-f-perfil">
								<div class="foto-perfil">
									<img class="" src="" alt="">
								</div>
								<input type="button" value="Subir">
								<input type="button" value="Borrar">
							</div>

							<p>Nombre</p>
							<input type="text" placeholder="Nombre">

							<p>Mail</p>
							<input type="text" placeholder="Mail">
						</div><!-- /izq - - - - - - - - - -->
						<div class="der">
							<p>Asociar usuario</p>
							<div class="el-select">
								<select name="usuario">
									<option value="seleccionar">Seleccionar</option>
									<option value="pedro">Pedro</option>
									<option value="javier">Javier</option>
									<option value="felipe">Felipe</option>
									<option value="macarena">Macarena</option>
								</select>
							</div>

							<p>Asociar campaña</p>
							<div class="el-select">
								<select name="campana">
									<option value="5">Seleccionar</option>
									<option value="1">Mailing</option>
									<option value="2">Mochila</option>
									<option value="3">Tour</option>
									<option value="4">Macarena</option>
								</select>
							</div>

							<p>Teléfono</p>
							<input type="text" placeholder="Teléfono">
						</div><!-- /der - - - - - - - - - - -->

						<input class="borrar" type="button" value="Cancelar">
						<input type="submit" value="Guardar">
					</form>
				</div><!-- /contenido-user - - -->
			</div><!-- /contenido - - -->
			
		</div><!-- Contenedor -->
		<div class="clearfix"></div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>