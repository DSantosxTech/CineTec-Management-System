<?php
if (isset($_POST["codigo"])) {
    // Conexão com o banco de dados - Substitua pelas suas configurações
    $pdo = new PDO("mysql:host=seu_servidor;dbname=cinema", "root", "usbw");

    // Dados do formulário
    $codigo = $_POST["codigo"];
    $titulo = $_POST["titulo"];
    $classificacao = $_POST["classificacao"];
    $duracao = $_POST["duracao"];
    $genero = $_POST["genero"];
    $sinopse = $_POST["sinopse"];

    // Consulta SQL para atualizar os dados do filme
    $sql = "UPDATE filmes SET
        titulo = :titulo,
        classificacao = :classificacao,
        duracao = :duracao,
        genero = :genero,
        sinopse = :sinopse
        WHERE id = :codigo";

    try {
        // Prepara a consulta SQL
        $stmt = $pdo->prepare($sql);

        // Executa a consulta, substituindo os marcadores de posição pelos valores
        $stmt->execute([
            ':titulo' => $titulo,
            ':classificacao' => $classificacao,
            ':duracao' => $duracao,
            ':genero' => $genero,
            ':sinopse' => $sinopse,
            ':codigo' => $codigo
        ]);

        $mensagem = "Registro alterado com sucesso!";
    } catch (PDOException $e) {
        $mensagem = "Erro ao alterar o registro: " . $e->getMessage();
    }

    // Verifique se uma nova imagem foi enviada
    if (isset($_FILES["fil_foto"]) && $_FILES["fil_foto"]["error"] == 0) {
        $arquivo_foto = "fotos/" . basename($_FILES["fil_foto"]["name"]) . "_" . date("YmdHis") . rand(0, 100);

        if (move_uploaded_file($_FILES["fil_foto"]["tmp_name"], $arquivo_foto)) {
            // Atualize o nome da imagem no banco de dados
            $sql = "UPDATE filmes SET foto_url = :foto_url WHERE id = :codigo";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':foto_url' => $arquivo_foto,
                ':codigo' => $codigo
            ]);
        }
    }
}
?>