<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if (isset($_REQUEST["cpf"]) && isset($_REQUEST["nome"]) && isset($_REQUEST["email"]) && isset($_REQUEST["telefone"])) {
    $cpf = $_REQUEST["cpf"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $telefone = $_REQUEST["telefone"];

    $sql = "SELECT * FROM usuarios WHERE cpf = :cpf";
    $comando = $banco->prepare($sql);
    $comando->bindParam(":cpf", $cpf);
    $comando->execute();

    if ($comando->fetch()) {
        $mensagem = "Já existe um usuário com esse CPF!";
        echo json_encode(array("mensagem" => $mensagem));
    } else {
        $sql = "INSERT INTO usuarios (cpf, nome, email, telefone) VALUES (:cpf, :nome, :email, :telefone)";

        try {
            $comando = $banco->prepare($sql);
            $comando->bindParam(":cpf", $cpf);
            $comando->bindParam(":nome", $nome);
            $comando->bindParam(":email", $email);
            $comando->bindParam(":telefone", $telefone);
            $comando->execute();

            $mensagem = "Registro inserido com sucesso!";
        } catch (PDOException $e) {
            $mensagem = "Erro ao inserir o registro: " . $e->getMessage();
        }

        echo json_encode(array("mensagem" => $mensagem));
    }
} else {
    $mensagem = "Os dados não foram informados!";
    echo json_encode(array("mensagem" => $mensagem));
}
?>
