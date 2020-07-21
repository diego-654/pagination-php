<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * 5;
$nextPage = $page + 1;
$prevPage = $page - 1;

require 'conexion.php';				

$items = mysql_query("select * from paginacion limit 5 offset $offset") or die(mysql_error());


?>

