<?php require_once "iniciar_sessao.php" ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #fff;
    }

    h1 {
      color: rgb(118, 152, 197);
      margin-top: 20px;
    }

    h2 {
      color: #000;
      margin-top: 20px;
    }

    a {
      display: inline-block;
      margin: 10px 0;
      font-size: 18px;
      color: #007bff;
      text-decoration: none;
    }

    .carousel {
      max-width: 600px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      position: relative;
      top: -50px;
      left: 55%;
      transform: translateX(-50%);
    }

    .carousel-item img {
      max-height: 100%;
      max-width: 100%;
      object-fit: contain;
      display: block;
    }

    #carouselBooks {
      position: relative;
      top: -90px;
      left: 30%;
      transform: translateX(-40%);
    }

    #div_busca {
      position: absolute;
      top: 10px;
      right: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
      width: 300px;
      height: 45px;
    }

    #txt_busca {
      flex: 1;
      padding: 10px 12px;
      font-size: 16px;
      border-radius: 6px;
      border: 1px solid #aaa;
      outline: none;
    }

    #btn_Busca {
      width: 40px;
      height: 40px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <h1>Bem-vindo!</h1>
  <h2>Aqui você pode registrar os livros e filmes que quer ou já assistiu — tudo em um só lugar!</h2>
  <a href="Perfil.php">Meu Perfil</a><br><br>
  <a href="Listas.php">Minhas Listas</a><br><br>
  <a href="Logout.php">Sair</a>

  <div id="carouselBooks" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselBooks" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselBooks" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselBooks" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Imagens Livros/Os Sete Maridos de Evelyn Hugo.jpg" class="d-block w-100"
          alt="Os Sete Maridos de Evelyn Hugo">
        <div class="carousel-caption d-none d-md-block">
          <h5>Os Sete Maridos de Evelyn Hugo</h5>
          <p>Um romance envolvente sobre fama, amor e segredos.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../Imagens Livros/Jantar Secreto.jpg" class="d-block w-100" alt="Jantar Secreto">
        <div class="carousel-caption d-none d-md-block">
          <h5>Jantar Secreto</h5>
          <p>Um suspense contemporâneo brasileiro de tirar o fôlego.</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../Imagens Livros/OutroLivro.jpg" class="d-block w-100" alt="Outro Livro">
        <div class="carousel-caption d-none d-md-block">
          <h5>Outro Livro</h5>
          <p>Mais uma leitura imperdível para sua lista!</p>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBooks" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselBooks" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

  <div id="div_busca">
    <input type="text" id="txt_busca" placeholder="Buscar..." />
    <img src="../Imagens_HTML/Lupa.png" id="btn_Busca" alt="Buscar" />
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>