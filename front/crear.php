<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

		
			<div class="contenido">
				<h3 class="cab c-crear">Crear Campaña</h3>
				<div class="contenido-crear">
					<form class="editando" action="" method="">
						<div class="izq">
							<div class="cont-f-perfil">
								<div class="foto-perfil">
									<img class="" src="" alt="">
								</div>
								<span class="btn-file">Subir<input type="file" value="Subir"></span>
								<input type="button" value="Borrar">
							</div>

							<p>Nombre Campaña</p>
							<input type="text" placeholder="Nombre campaña">

							<p>Descripción</p>
							<textarea rows="4" cols="32" placeholder="Descripción"></textarea>

							<p>Estado</p>
							<div class="check">
								<input type="checkbox" name="recordar" value="recordar"> <p class="activo">Activo</p>
							</div>
						</div><!-- /izq - - - - - - - - - -->
						<div class="der">

							<p>Desde</p>
							<input type="text" placeholder="Fecha inicio">
							<p>Hasta</p>
							<input type="text" placeholder="Fecha término">


							<p>Asociar Cliente</p>
							<div class="el-select">
								<select name="cliente">
									<option value="5">Seleccionar</option>
									<option value="1">Mailing</option>
									<option value="2">Mochila</option>
									<option value="3">Tour</option>
									<option value="4">Macarena</option>
								</select>
							</div>
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
						</div><!-- /der - - - - - - - - - - -->
						<div class="clearfix"></div>
						<!-- <input class="borrar" type="button" value="Cancelar">
						<input type="submit" value="Guardar"> -->
						<a class="btn btn-borrar" href="/crear">Cancelar</a>
						<a class="btn btn-sig" href="crear-campana.php">Siguiente</a>

					</form>
				</div><!-- /contenido-user - - -->
			</div><!-- /contenido - - -->
			
		</div><!-- Contenedor -->
		<div class="clearfix"></div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>