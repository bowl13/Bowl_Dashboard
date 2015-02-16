<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

		
			<div class="contenido">
				<h3 class="cab c-camp">Campañas</h3>
				<div class="contenido-user">
					<div class="cuadro">
						<img src="img/foto-perfil-la-araucana.jpg" alt="Cliente">
					</div>
					<div class="cuadro">
						<p class="tit">Campañas</p>
						<p class="num">03</p>
					</div>
					<div class="cuadro">
						<p class="tit">Usuarios</p>
						<p class="num">02</p>
					</div>
					<div class="cuadro">
						<p class="tit">Estado</p>
						<p class="txt">Activo</p>
					</div>

					<h1>Mailing de créditos</h1>
					<h2>La Araucana</h2>

					<p class="atri"><span>Desde:</span> Ene 05, 2015</p>
					<p class="atri"><span>Hasta:</span> Feb 28, 2015</p>
					<p class="atri"><span>Registrado el:</span> 01/01/2010</p>
					<p class="atri"><span>Descripción:</span> ewf efwgthyrt  lknreoin oibr oiriernver pirnvrepiovre pirver preivrjvre erivhriepjge pesjbepobe bpienioerpnber prnbpreob.</p>

					<div class="asociado">
						<p class="atri-asoci">Usuarios:</p>
						<p class="btns-asoci">
							<a class="nom-user" href="#">Emailing</a>
							<a class="nom-user" href="#">Mochilas</a>
							<a class="nom-user" href="#">Mochilas</a>
							<a class="nom-user" href="#">Mochilas</a>
							<a class="nom-user" href="#">Mochilas</a>
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

							<p>Mail</p>
							<input type="text" placeholder="Mail">


							<p>Estado</p>
							<div class="check">
								<input type="checkbox" name="recordar" value="recordar"> <p class="activo">Activo</p>
							</div>
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