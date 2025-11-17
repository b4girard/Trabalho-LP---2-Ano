<?php require_once "iniciar_sessao.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Lista</title>
</head>
<body>
    <div >
    <h2>Criar Nova Lista</h2>

    <form method="POST" action="salvar_lista.php">
        <div>
            <label for="nome_lista" >Nome da Lista</label>
            <input type="text" id="nome_lista" name="nome_lista" required>
        </div>
        <div>
            <label for="descricao" >Descrição</label>
            <textarea  name="descricao" rows="3"></textarea>
        </div>
        <button type="submit" >Criar Lista</button>
        <a href="listas.php" >Cancelar</a>
    </form>
</div>

</body>
</html>