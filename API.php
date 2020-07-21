<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * 5;
$nextPage = $page + 1;
$prevPage = $page - 1;

require 'conexion.php';				

$query = mysql_query("select * from paginacion limit 5 offset $offset") or die(mysql_error());

$items = [];

while($item=mysql_fetch_object($query)){
	array_push($items, $item);
}
http_response_code(200);
echo json_encode($items);
?>