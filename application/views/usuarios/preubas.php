<?
	if($eventos -> num_rows() > 0){?>
		<table class="tablaAgenda">
			<?foreach($eventos -> result() as $row){?>
				<tr>
					<th>Evento:</th><td><?=$row->Evento?></td>
				</tr>
				<tr>
					<th>Lugar:</th><td><?=$row->Lugar?></td>
				</tr>
				<tr>
					<th>Hora: </th><td><?=$row->Hora?></td>
				</tr>
			<?}?>
		</table>
		<?
	}
?>