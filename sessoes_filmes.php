<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

function carregarSessoes($filmId = null) {
    global $banco;

    $sql = "SELECT sessoes.*, filmes.titulo AS nome_filme FROM sessoes
        LEFT JOIN filmes ON sessoes.filme_id = filmes.id";

    if ($filmId) {
        $sql .= " WHERE sessoes.filme_id = :filmId";
    }

    $comando = $banco->prepare($sql);

    if ($filmId) {
        $comando->bindParam(":filmId", $filmId);
    }

    $comando->execute();

    $registros = $comando->fetchAll();

    echo json_encode($registros);
}

if (isset($_GET["codigo"])) {
    $codigo = $_GET["codigo"];
    carregarSessoes($codigo);
} else {
    carregarSessoes(); // Chame a função sem parâmetro para carregar todas as sessões.
}
?>
