<?
	if($eventos -> num_rows() > 0){?>
		<h1>Agenda del Dia <?=$contador?></h1>
		<?foreach($eventos -> result() as $row){?>
			<table class="tablaAgenda">
					<tr>
						<th>Evento:</th><td><?=$row->Evento?></td>
					</tr>
					<tr>
						<th>Lugar:</th><td><?=$row->Lugar?></td>
					</tr>
					<tr>
						<th>Hora: </th><td><?=$row->Hora?></td>
					</tr>
			</table>
		<?}
	}else{?>
		<h4>No hay eventos para el <?=$contador?></h4>
	<?}
?>