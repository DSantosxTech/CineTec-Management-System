<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if (isset($_GET["id"])) { // Corrigi o nome do parâmetro
    $codigo = $_GET["id"];

    $sql = "DELETE FROM sessoes WHERE id = :codigo";

    try {
        $comando = $banco->prepare($sql);
        $comando->bindParam(":codigo", $codigo);
        $comando->execute();
        $mensagem = "Registro excluído com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erro ao excluir o registro: " . $e->getMessage();
    }
} else {
    $mensagem = "Os dados não foram informados!";
}

echo json_encode(array("mensagem" => $mensagem));
?>
