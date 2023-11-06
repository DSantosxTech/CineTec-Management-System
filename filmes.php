<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

$sql = "SELECT * FROM filmes";

if (isset($_GET["codigo"])) {
    // Se um código for fornecido, filtre os resultados para obter apenas o filme com o código especificado.
    $sql .= " WHERE id = :codigo";
}

$comando = $banco->prepare($sql);

if (isset($_GET["codigo"])) {
    // Se um código for fornecido, vincule o valor do código à consulta.
    $comando->bindParam(":codigo", $_GET["codigo"]);
}

$comando->execute();

$registros = $comando->fetchAll();

// Converte os resultados em um formato JSON e os imprime.
echo json_encode($registros);
?>