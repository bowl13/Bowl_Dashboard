<?php
//llado al header y sidebar - - - - -
include 'inc/cabecera.php';?>
		<div id="contenedor">
			<?php include 'inc/lateral.php';?>

				<script>
				function allowDrop(ev) {
				    ev.preventDefault();
				}

				function drag(ev) {
				    ev.dataTransfer.setData("text", ev.target.id);
				}

				function drop(ev) {
				    ev.preventDefault();
				    var data = ev.dataTransfer.getData("text");
				    ev.target.appendChild(document.getElementById(data));
				}
				</script>
		
			<div class="contenido">
				<h3 class="cab c-crear">Crear Campaña</h3>

				<div class="arrastrar" id="cont-arr" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="modulo" id="arr1" draggable="true" ondragstart="drag(event)">
						<p class="tit-modulo">Usuarios Activos</p>
						<p class="desc-modulo">Muestra los usuarios online</p>
					</div>
					<div class="modulo" id="arr2" draggable="true" ondragstart="drag(event)">
						<p class="tit-modulo">Visitas por fuente</p>
						<p class="desc-modulo">Porcentajes de los ganadores vs perdedores</p>
					</div>
					<div class="modulo" id="arr3" draggable="true" ondragstart="drag(event)">
						<p class="tit-modulo">Cupones Ingresados</p>
						<p class="desc-modulo">Muestra La cantidad de cupones</p>
					</div>
					<div class="modulo" id="arr4" draggable="true" ondragstart="drag(event)">
						<p class="tit-modulo">Usuarios Únicos Totales</p>
						<p class="desc-modulo">Porcentajes de los ganadores vs perdedores</p>
					</div>
					<div class="modulo" id="arr5" draggable="true" ondragstart="drag(event)">
						<p class="tit-modulo">Tasa de Rebote</p>
						<p class="desc-modulo">Muestra los usuarios online</p>
					</div>
					<div class="modulo" id="arr6" draggable="true" ondragstart="drag(event)">
						<p class="tit-modulo">Usuarios Activos</p>
						<p class="desc-modulo">Muestra los usuarios online</p>
					</div>
				</div><!-- /arrastrar - - -->

				<div class="soltar" id="sol" ondrop="drop(event)" ondragover="allowDrop(event)">
					
				</div><!-- /soltar - - -->
			</div><!-- /contenido - - -->
			
		</div><!-- Contenedor -->
		<div class="clearfix"></div>
<?php
//Llamado al footer - - - - -
include 'inc/pie.php'
?>