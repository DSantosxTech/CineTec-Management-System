<?php
header("Content-Type: application/json; charset=UTF-8");
include_once "conexao.php";

if (isset($_POST["codigo"])) {
    $filme_id = $_POST["codigo"]; // Corrigi o nome da variável
    $sala = $_POST["sala"];
    $data = $_POST["data"];
    $hora = $_POST["hora"]; // Corrigi o nome da variável

    $sql = "SELECT * FROM sessoes WHERE sala = :sala AND data = :data AND hora = :hora";
    $comando = $banco->prepare($sql);
    $comando->bindParam(":sala", $sala);
    $comando->bindParam(":data", $data);
    $comando->bindParam(":hora", $hora);
    $comando->execute();

    if ($comando->fetch()) {
        echo json_encode(array("message" => "Já existe uma sessão com essa sala, data e hora!"));
    } else {
        $sql = "INSERT INTO sessoes (filme_id, sala, data, hora) VALUES (:filme_id, :sala, :data, :hora)";

        try {
            $comando = $banco->prepare($sql);
            $comando->bindParam(":filme_id", $filme_id);
            $comando->bindParam(":sala", $sala);
            $comando->bindParam(":data", $data);
            $comando->bindParam(":hora", $hora);
            $comando->execute();
            echo json_encode(array("message" => "Registro inserido com sucesso!"));
        } catch (PDOException $e) {
            echo json_encode(array("message" => "Erro ao inserir o registro: " . $e->getMessage()));
        }
    }
} else {
    echo json_encode(array("message" => "Dados insuficientes. Verifique o seu pedido."));
}
?>
