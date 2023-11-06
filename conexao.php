<?php
try {
    $banco = new PDO(
        'mysql:host=localhost:3307;dbname=cinema',
        'root',
        'usbw',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo "Banco de dados não disponível";
}
?>