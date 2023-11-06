<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php"; // Inclui o arquivo de conexão com o banco de dados

if (isset($_POST["codigo"]) && isset($_POST["titulo"])) {
    $codigo = $_POST["codigo"];
    $titulo = $_POST["titulo"];
    $classificacao = $_POST["classificacao"];
    $duracao = $_POST["duracao"];
    $genero = $_POST["genero"];
    $sinopse = $_POST["sinopse"];

    // Upload da foto
    $arquivo_foto = "fotos/" . basename($_FILES["fil_foto"]["name"]) . "_" . date("Ydmhis") . rand(0, 100);

    if (move_uploaded_file($_FILES["fil_foto"]["tmp_name"], $arquivo_foto)) {
        // Consulta SQL para inserir um novo filme
        $sql = "INSERT INTO filmes (titulo, classificacao, duracao, sinopse, genero, foto_url) VALUES (:titulo, :classificacao, :duracao, :sinopse, :genero, :foto_url)";
        $comando = $banco->prepare($sql);
        $comando->bindParam(":titulo", $titulo);
        $comando->bindParam(":classificacao", $classificacao);
        $comando->bindParam(":duracao", $duracao);
        $comando->bindParam(":genero", $genero);
        $comando->bindParam(":sinopse", $sinopse);
        $comando->bindParam(":foto_url", $arquivo_foto);

        if ($comando->execute()) {
            $resposta = array("mensagem" => "Filme incluído com sucesso.");
        } else {
            $resposta = array("mensagem" => "Erro ao incluir o filme.");
        }
    } else {
        $resposta = array("mensagem" => "Erro ao fazer upload da foto.");
    }
} else {
    $resposta = array("mensagem" => "Os dados não foram informados.");
}

echo json_encode($resposta); // Retorna a mensagem de resultado em formato JSON
?>