<!DOCTYPE html>

<html lang="es">
<head>
	<title>Paginacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="contenedor" >
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
				<?php
					require_once "pagination.php";

					while($item=mysql_fetch_object($items)):
				?>
				<li class="item"><?= $item->ID . ". " . $item->lista ?></li> 
				<?php endwhile;?>
			</ul>
		</section>

		<section class="paginacion">
			<ul>
				<li class=""><a id="prev" class="link disable" href="javascript:void(0)">&laquo;</a></li>
				<li class=""><a id="1" class="link active" href="javascript:void(0)">1</a></li>
				<li class=""><a id="2" class="link" href="javascript:void(0)" >2</a></li>
				<li class=""><a id="3" class="link" href="javascript:void(0)">3</a></li>
				<li class=""><a id="4" class="link" href="javascript:void(0)">4</a></li>
				<li class=""><a id="next" class="link" href="javascript:void(0)">&raquo;</a></li>
			</ul>
		</section>
	</div>
<script type="text/javascript" src="app.js"></script>
</body>
</html>