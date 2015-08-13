<?
	$hora = array(
		'Name' => 'Hora', 
		'id' => 'Hora'
	);

	$fecha = array(
		'Name' => 'Fecha', 
		'id' => 'Fecha'
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
?>

<div class="row">
	<section>
		<article>
			<h4>Registro de Documentos</h4>
			<?=form_open()?>
				<table class="tableM">
					<tr><th>Hora: </th></tr>
					<tr><td><?=form_input($hora)?></td></tr>
					<tr><th>Fecha: </th></tr>
					<tr><td><?=form_input($fecha)?></td></tr>
					<tr><th>Tramite: </th></tr>
					<tr><td><?=form_input($tramite)?></td></tr>
					<tr><th>Observacion: </th></tr>
					<tr><td><?=form_input($onservacion)?></td></tr>
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