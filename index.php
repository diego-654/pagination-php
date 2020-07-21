<!DOCTYPE html>

<html lang="es">
<head>
	<title>Paginacion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,300,700">
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<li class="<?php if($page==1){echo 'disable';} ?>"><a  href="<?php echo "?page=$prevPage" ?>">&laquo;</a></li>
				<li class="<?php if($page==1){echo 'active';} ?>"><a  href="?page=1">1</a></li>
				<li class="<?php if($page==2){echo 'active';} ?>"><a href="?page=2" >2</a></li>
				<li class="<?php if($page==3){echo 'active';} ?>"><a  href="?page=3">3</a></li>
				<li class="<?php if($page==4){echo 'active';} ?>"><a  href="?page=4">4</a></li>
				<li class="<?php if($page==4){echo 'disable';} ?>"><a href="<?php echo "?page=$nextPage" ?>">&raquo;</a></li>
			</ul>
		</section>
	</div>
</body>
</html>