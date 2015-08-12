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
	}else{

		$fecha_modificada=explode('-',$contador);
		switch ($fecha_modificada[1]) {
			case '01':
				$mes='Enero';
				break;
			case '02':
				$mes='Febrero';
				break;
			case '03':
				$mes='Marzo';
				break;
			case '04':
				$mes='Abril';
				break;
			case '05':
				$mes='Mayo';
				break;
			case '06':
				$mes='Junio';
				break;
			case '07':
				$mes='Julio';
				break;
			case '08':
				$mes='Agosto';
				break;
			case '09':
				$mes='Septiembre';
				break;
			case '10':
				$mes='Octubre';
				break;
			case '11':
				$mes='Noviembre';
				break;
			case '12':
				$mes='Diciembre';
				break;
		}
		?>
		<h4>No hay eventos para el <?=$fecha_modificada[2]?> de <?=$mes?> del <?=$fecha_modificada[0]?></h4>
	<?}
?>