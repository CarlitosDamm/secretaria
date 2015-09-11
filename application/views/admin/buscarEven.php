<div class="row">
	<section>
		<article>
			<h1>Resultados de la Busqueda</h1>
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
					echo "No hay eventos";
				}
			?>
		</section>
	</div>
</div>
<div class="row">
	
		<section>
			<article><a class="botonBack" href="<?=base_url()?>index.php/Admin/agenda"> Regresar</a></article>
		</section>
</div>
<br>