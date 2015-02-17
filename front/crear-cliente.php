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
								<span class="btn-file">Subir<input type="file" value="Subir"></span>
								<input type="button" value="Borrar">
							</div>

							<p>Nombre</p>
							<input type="text" placeholder="Nombre">

							<p>Mail</p>
							<input type="text" placeholder="Mail">
						</div><!-- /izq - - - - - - - - - -->
						<div class="der">
							<p>Asociar usuario</p>
							<select id="mul" multiple="multiple">
								<option value="1">uno</option>
								<option value="2">dos</option>
								<option value="3">tres</option>
							</select>
							
						</div><!-- /der - - - - - - - - - - -->
						<div class="clearfix"></div>
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