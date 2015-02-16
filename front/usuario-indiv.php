	<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

		
			<div class="contenido">
				<h3 class="cab c-user">Usuario</h3>
				<div class="contenido-user">
					<div class="cuadro">
						<img src="img/foto-perfil-jorge.jpg" alt="">
					</div>
					<div class="cuadro">
						<p class="tit">Campañas</p>
						<p class="num">03</p>
					</div>
					<div class="cuadro">
						<p class="tit">Tipo</p>
						<p class="txt">Monitor</p>
					</div>
					<div class="cuadro">
						<p class="tit">Estado</p>
						<p class="txt">Activo</p>
					</div>

					<h1>Pedrito Contreras</h1>
					<h2>La Araucana</h2>

					<p class="atri"><span>Mail:</span> pedroto@gmail.com</p>
					<p class="atri"><span>Teléfono:</span> +569 8935 3255</p>
					<p class="atri"><span>Registrado el:</span> 01/01/2010</p>
					<div class="asociado">
						<p class="atri-asoci">Campañas:</p>
						<p class="btns-asoci">
							<a class="nom-asoci" href="#">Emailing</a>
							<a class="nom-asoci" href="#">Mochilas</a>
							<a class="nom-asoci" href="#">Mochilas</a>
							<a class="nom-asoci" href="#">Mochilas</a>
							<a class="nom-asoci" href="#">Mochilas</a>
						</p>
					</div>
					<a href="#" class="editar">Editar</a>

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
							<p>Apellido</p>
							<input type="text" placeholder="Apellido">
							<p>Seleccionar</p>
							<input type="text" placeholder="Mail">
						</div><!-- /izq - - - - - - - - - -->
						<div class="der">
							<p>Seleccionar</p>
							<div class="el-select">
								<select name="usuario">
									<option value="seleccionar">Seleccionar</option>
									<option value="pedro">Pedro</option>
									<option value="javier">Javier</option>
									<option value="felipe">Felipe</option>
									<option value="macarena">Macarena</option>
								</select>
							</div>

							<p>Seleccionar</p>
							<div class="el-select">
								<select name="campana">
									<option value="5">Seleccionar</option>
									<option value="1">Mailing</option>
									<option value="2">Mochila</option>
									<option value="3">Tour</option>
									<option value="4">Macarena</option>
								</select>
							</div>
							<p>Contraseña</p>
							<input type="text" placeholder="Contraseña">
							<p>Repetir</p>
							<input type="text" placeholder="Repetir">
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