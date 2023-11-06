<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

$sql = "SELECT * FROM usuarios";

$comando = $banco->prepare($sql);
$comando->execute();

$registros = $comando->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($registros);
?>