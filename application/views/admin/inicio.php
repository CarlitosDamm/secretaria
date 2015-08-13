<?php
	
?>

<div class="row">
	<div class="full centrado">
		<input type="text" class="buscar" id="Fecha" placeholder="Buscar Fecha">
		<input type="submit" class="boton" id="boton" value="Buscar" >
	</div>
</div>
<div class="row">
	<div class="fechaPHP" id='fechaPHP'>	
	</div>
</div>
<div class="row">
	<div class="full">
		<section>
			<article class="tabla" id="agendaDia">
				<?if($agenda -> num_rows() > 0 ){
					foreach($agenda -> result() as $row){?>
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
					<h4><?=$fecha?></h4>
				<?}?>
				
			</article>
			<article class="tabla">
				<h1>Documentos del Dia</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis consequatur, modi unde labore officia eum, doloremque consequuntur, architecto facilis esse nemo nulla velit. Quo similique, non quis eius quibusdam quam?</p>	
			</article>
		</section>
	</div>
</div>