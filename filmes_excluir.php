<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php"; // Inclui o arquivo de conexão com o banco de dados

if (isset($_REQUEST["codigo"])) {
    $codigo = $_REQUEST["codigo"]; // Obtém o código a ser excluído

    $sql = "DELETE FROM filmes
        WHERE id = ?"; // Consulta SQL para excluir o registro com base no código

    try {
        $comando = $banco->prepare($sql); // Prepara a consulta SQL
        $comando->execute(array($codigo)); // Executa a consulta, passando o código como parâmetro
        $mensagem = "Registro excluído com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erro ao excluir o registro: " . $e->getMessage(); // Em caso de erro, captura a mensagem de erro
    }
} else {
    $mensagem = "Os dados não foram informados!"; // Se o código não foi informado, exibe uma mensagem de erro
}

echo json_encode(array("mensagem" => $mensagem)); // Retorna a mensagem de resultado em formato JSON
?>