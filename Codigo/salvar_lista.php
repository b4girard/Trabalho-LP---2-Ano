<?php
require_once "iniciar_sessao.php";
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_lista'];
    $descricao = $_POST['descricao'];

    $sql = $conn->prepare("INSERT INTO lista (ID_usuario, Nome_lista, Descricao) VALUES (?, ?, ?)");
    $sql->bind_param("iss", $idUsuario, $nome, $descricao);

    if ($stmt->execute()) {
        header("Location: listas.php");
        exit;
    } else {
        echo "Erro ao criar lista: " . $conn->error;
    }

    $sql->close();
    $conn->close();
} else {
    header("Location: listas.php");
    exit;
}

?>