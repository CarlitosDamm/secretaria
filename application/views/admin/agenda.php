<?
	$evento = array(
		'Name' => 'Evento', 
		'id' => 'Evento',
		'required' => 'required'
	);

	$lugar = array(
		'Name' => 'Lugar', 
		'id' => 'Lugar',
		'required' => 'required'
	);
	$fecha = array(
		'Name' => 'FechaE', 
		'id' => 'FechaE',
		'required' => 'required'
	);
	$hora = array(
		'Name' => 'Hora',
		'type' => 'time', 
		'id' => 'Hora',
		'required' => 'required'
	);
	$evidencia = array(
		'name'	=> 'Evidencia', 
		'id'	=> 'Evidencia',
		'value'	=> set_value('Evidencia'),
		'type' 	=> 'file'
	);
	$boton = array(
		'id' => 'boton', 
		'name' => 'boton', 
		'type' => 'submit', 
		'value' => 'Agendar', 
		'class' => 'boton bm'
	);
	$botonEven = array(
		'id' => 'botonEven', 
		'name' => 'Even', 
		'type' => 'submit', 
		'value' => 'Buscar', 
		'class' => 'boton bm'
	);
	$buscarEven = array(
		'name' => 'buscarEven', 
		'id' => 'buscarEven', 
		'placeholder' => 'Seleccionar Fecha'
	);
?>

<div class="row">
	<section>
		<article>
			<h4>Agendar Evento<span class="masEven"> + </span></h4>			
			<?=form_open_multipart('admin/agenda')?>
				<table class="tableE">
					<tr><th>Nombre: </th></tr>
					<tr><td><?=form_input($evento)?></td></tr>
					<tr><th>Lugar: </th></tr>
					<tr><td><?=form_input($lugar)?></td></tr>
					<tr><th>Fecha: </th></tr>
					<tr><td><?=form_input($fecha)?></td></tr>
					<tr><th>Hora: </th></tr>
					<tr><td><?=form_input($hora)?></td></tr>
					<tr><th>Documento: </th></tr>
					<tr><td><?=form_input($evidencia)?></td></tr>
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
			<?=form_open('Admin/buscarEven')?>
			<table class="tableEA">
				<tr>
					<td><?=form_input($buscarEven)?></td><td><?=form_submit($botonEven)?></td>
				</tr>
			</table>
			<?=form_close()?>
		</article>
	</section>
</div>
<div class="row">
	<section>
		<?
		if($agenda->num_rows() > 0){

			foreach($agenda->result() as $row){

						echo "<article class='mitad margen'>";
							echo "<table class='tablaAgenda'>";
								echo "<tr><th>Fecha: </th><td>".$row->Fecha."</td></tr>";
								echo "<tr><th>Hora: </th><td>".$row->Hora."</td></tr>";
								echo "<tr><th>Evento: </th><td>".$row->Evento."</td></tr>";
								echo "<tr><th>Lugar: </th><td>".$row->Lugar."</td></tr>";
								if($row->Evidencia!='Sin evidencia'){

									echo "<tr><td colspan='2'><center><a class='verDoc' target='_blank' href='".base_url()."includes/docs/".$row->Evidencia."'>Ver Doc</a></center></td></tr>";

								}

							echo "</table>";
						echo "</article>";
			}
		}else{
			echo "No hay eventos hoy";
		}
		?>
		
	</section>
</div>
