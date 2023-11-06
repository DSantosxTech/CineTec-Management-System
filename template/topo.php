<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Seu Nome">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CineTec</title>
  <link rel="icon" href="img/favicon.ico">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Início da barra de navegação -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
    <a href="index.html" class="navbar-brand ms-lg-5">
      <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-film fs-1 text-danger me-3"></i>CineTec</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ms-auto py-0">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Cadastro
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="filmes.html">Filmes</a>
            <a class="dropdown-item" href="Usuarios.html">Usuários</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="sobre.php" class="nav-link">Sobre</a>
        </li>
        <li class="nav-item">
          <a href="produtos.php" class="nav-link">Produtos</a>
        </li>
        <li class="nav-item">
          <a href="contato.php" class="nav-link">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Fim da barra de navegação -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
