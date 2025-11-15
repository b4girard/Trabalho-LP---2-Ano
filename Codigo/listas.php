<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Listas</title>
</head>
<body>
    <h1>Minhas Listas</h1>

    <a href="criar_lista.php">Criar Lista</a>
    <hr>

    <?php
    $_SESSION['ID_usuario']
    $sql = "SELECT * FROM lista WHERE ID_usuario = $idUsuario ORDER BY Data_criacao DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <li>
                <strong>" . htmlspecialchars($row['Nome_lista']) . "</strong> - " . htmlspecialchars($row['Descricao']) . "
                <a href='excluir_lista.php?id=" . $row['ID_lista'] . "' onclick=\"return confirm('Tem certeza que deseja excluir esta lista?')\">[Excluir]</a>
            </li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Você ainda não tem listas criadas.</p>";
    }

    $conn->close();
    ?>
</body>
</html>