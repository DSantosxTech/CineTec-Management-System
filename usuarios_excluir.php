<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if (isset($_REQUEST["cpf"])) {

    $cpf = $_REQUEST["cpf"];

    $sql = "DELETE FROM sessoes WHERE cpf = :cpf";

    try {
        $comando = $banco->prepare($sql);
        $comando->bindParam(":cpf", $cpf);
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
