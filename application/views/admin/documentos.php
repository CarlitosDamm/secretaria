<?
	$hora = array(
		'Name' => 'Hora', 
		'id' => 'Hora'
	);

	$fecha = array(
		'Name' => 'FechaD', 
		'id' => 'FechaD'
	);
	$tramite = array(
		'Name' => 'Tramite', 
		'id' => 'tags'
	);
	$observacion = array(
		'Name' => 'Observacion', 
		'id' => 'Observacion'
	);
	$quien = array(
		'Name' => 'Quien', 
		'id' => 'Quien'
	);

	$folio = array(
		'Name' => 'Folio', 
		'id' => 'Folio',
		'placeholder' => 'Folio'
	);

	$doc = array(
		'name'	=> 'Doc', 
		'id'	=> 'Doc',
		'value'	=> set_value('Doc'),
		'type' 	=> 'file'
	);
	$boton = array(
		'id' => 'boton', 
		'name' => 'boton', 
		'type' => 'submit', 
		'value' => 'Agregar', 
		'class' => 'boton bm'
	);

	$botonDocs = array(
		'id' => 'botonDocs', 
		'name' => 'Docs', 
		'type' => 'submit', 
		'value' => 'Buscar', 
		'class' => 'boton bm'
	);

	$buscarDocs = array(
			'name' => 'buscarDocs', 
			'id' => 'buscarDocs', 
			'type' => 'text', 
			'placeholder' => 'Buscar Folio'

	);
?>

<div class="row">
	<section>
		<article>
			<h4>Registro de Documentos <span class="masDocs"> + </span></h4>			
			<?=form_open_multipart('admin/documentos')?>
				<table class="tableM">
					<tr><th>Folio: </th></tr>
					<tr><td><?=form_input($folio)?></td></tr>
					<tr><th>Hora: </th></tr>
					<tr><td><?=form_input($hora)?></td></tr>
					<tr><th>Fecha: </th></tr>
					<tr><td><?=form_input($fecha)?></td></tr>
					<tr><th>Tramite: </th></tr>
					<tr><td><?=form_input($tramite)?></td></tr>
					<tr><th>Observacion: </th></tr>
					<tr><td><?=form_input($observacion)?></td></tr>
					<tr><th>Quien Envia: </th></tr>
					<tr><td><?=form_input($quien)?></td></tr>
					<tr><th>Documento: </th></tr>
					<tr><td><?=form_input($doc)?></td></tr>
					<tr><td><?=form_submit($boton)?></td></tr>
				</table>
			<?=form_close()?>
		</article>
	</section>
</div>
<div class="row">
	<div id="Docs"></div>
	<section>
		<article>
			<?=form_open('Admin/buscarDocs')?>
			<table class="tableMA">
				<tr>
					<td><?=form_input($buscarDocs)?></td><td><?=form_submit($botonDocs)?></td>
				</tr>
			</table>
				
			<?=form_close()?>
		</article>
	</section>
</div>
<div class="row">
	<div class="full">
		<section>
			<?php
				if($docs -> num_rows() > 0){
					foreach($docs -> result() as $row){
						echo "<article class='mitad margen'>";
							echo "<table class='tablaAgenda'>";
								echo "<tr><th>Folio: </th><td>".$row->Folio."</td></tr>";
								echo "<tr><th>Fecha: </th><td>".$row->Fecha."</td></tr>";
								echo "<tr><th>Hora: </th><td>".$row->Hora."</td></tr>";
								echo "<tr><th>Tramite: </th><td>".$row->Tramite."</td></tr>";
								echo "<tr><th>Observacion: </th><td>".$row->Observacion."</td></tr>";
								echo "<tr><td colspan='2'><center><a class='verDoc' target='_blank' href='".base_url()."includes/docs/".$row->Doc."'>Ver Doc</a></center></td></tr>";
							echo "</table>";
						echo "</article>";
					}
				}else{
					echo "No hay docs";
				}
			?>
		</section>
	</div>
</div>