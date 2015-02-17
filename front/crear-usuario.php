	<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>
			<div class="contenido">
				<h3 class="cab c-user">Crear Usuario</h3>
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
							<p>Apellido</p>
							<input type="text" placeholder="Apellido">
							<p>Mail</p>
							<input type="text" placeholder="Mail">

							<p>Estado</p>
							<div class="check">
								<input type="checkbox" name="recordar" value="recordar"> <p class="activo">Activo</p>
							</div>
						</div><!-- /izq - - - - - - - - - -->
						<div class="der">
							<!-- e
							<p>Asociar Usuario</p>
							<div class="el-select">
								<select name="usuario">
									<option value="seleccionar">Seleccionar</option>
									<option value="pedro">Pedro</option>
									<option value="javier">Javier</option>
									<option value="felipe">Felipe</option>
									<option value="macarena">Macarena</option>
								</select>
							</div>

							<p>Asociar Campaña</p>
							<div class="el-select">
								<select name="campana">
									<option value="5">Seleccionar</option>
									<option value="1">Mailing</option>
									<option value="2">Mochila</option>
									<option value="3">Tour</option>
									<option value="4">Macarena</option>
								</select>
							</div>
							-->
							<p>Contraseña</p>
							<input type="password" placeholder="Contraseña">
							<p>Repetir</p>
							<input type="password" placeholder="Repetir">

							<p>Tipo de usuario</p>
							<div class="el-select">
								<select name="usuario">
									<option value="seleccionar">Seleccione</option>
									<option value="pedro">Pedro</option>
									<option value="javier">Javier</option>
									<option value="felipe">Felipe</option>
									<option value="macarena">Macarena</option>
								</select>
							</div>

							<p>Multiple</p>
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

				</div><!-- /contenido-crear - - -->
			</div><!-- /contenido - - -->
			
		</div><!-- Contenedor -->
		<div class="clearfix"></div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>