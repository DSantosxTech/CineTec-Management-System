<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if (isset($_REQUEST["cpf"]) && isset($_REQUEST["nome"]) && isset($_REQUEST["email"]) && isset($_REQUEST["telefone"])) {

    $cpf = $_REQUEST["cpf"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $telefone = $_REQUEST["telefone"];

    $sql = "UPDATE usuarios SET nome = :nome, email = :email, telefone = :telefone WHERE cpf = :cpf";

    try {
        $comando = $banco->prepare($sql);
        $comando->bindParam(":nome", $nome);
        $comando->bindParam(":email", $email);
        $comando->bindParam(":telefone", $telefone);
        $comando->bindParam(":cpf", $cpf);
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
