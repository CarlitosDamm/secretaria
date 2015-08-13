<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>| Secretaria General UJED |</title>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	    <link href="<?=base_url()?>includes/css/estilo.css" rel="stylesheet">
	    <link href="<?=base_url()?>includes/iconos.css" rel="stylesheet">

	    
	</head>
<body>
	<div class="container">
		<header>	
			<div class="menu">
				<p>Secretaria General</p> <span class="icon-menu"></span>
			</div>
			<nav>
				<ul>
					<?
						switch ($tipo) {
							case 0:
								?><li><a href='<?=base_url()?>index.php/Admin/inicio'><span class='icon-home'></span>Inicio </a></li><?
							break;
							case 1:
								echo '<li><a href="inicio"><span class="icon-home"></span>Inicio </a></li>';
							break;
							case 2:
								echo '<li><a href="inicio"><span class="icon-home"></span>Inicio </a></li>';
							break;
							
							default:
								# code...
							break;
						}
					?>
					<li><a href="<?=base_url()?>index.php/Admin/agenda"><span class="icon-calendar"></span>Agenda </a></li>
					<li><a href="<?=base_url()?>index.php/Admin/documentos"><span class="icon-upload"></span>Documentos </a></li>
				</ul>
			</nav>
		</header>