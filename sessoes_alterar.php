<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if (isset($_REQUEST["id_sessao"], $_REQUEST["sala"], $_REQUEST["data"], $_REQUEST["hora"], $_REQUEST["filme_id"])) {
    $id_sessao = $_REQUEST["id_sessao"];
    $sala = $_REQUEST["sala"];
    $data = $_REQUEST["data"];
    $hora = $_REQUEST["hora"];
    $filme_id = $_REQUEST["filme_id"];

    $sql = "UPDATE sessoes SET sala = :sala, data = :data, hora = :hora WHERE id = :id_sessao AND filme_id = :filme_id";

    try {
        $comando = $banco->prepare($sql);
        $comando->bindParam(":sala", $sala);
        $comando->bindParam(":data", $data);
        $comando->bindParam(":hora", $hora);
        $comando->bindParam(":id_sessao", $id_sessao);
        $comando->bindParam(":filme_id", $filme_id);
        $comando->execute();

        $mensagem = "Registro alterado com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erro ao alterar o registro: " . $e->getMessage();
    }
} else {
    $mensagem = "Os dados não foram informados!";
}

echo json_encode(array("mensagem" => $mensagem));
?>