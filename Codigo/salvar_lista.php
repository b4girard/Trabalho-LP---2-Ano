<?php
include "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_lista'];
    $descricao = $_POST['descricao'];
    $_SESSION['ID_usuario']

    $stmt = $conn->prepare("INSERT INTO lista (ID_usuario, Nome_lista, Descricao) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $idUsuario, $nome, $descricao);

    if ($stmt->execute()) {
        header("Location:listas.php");
        exit;
    } else {
        echo "Erro ao criar lista: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header("listas.php");
    exit;
}
?>