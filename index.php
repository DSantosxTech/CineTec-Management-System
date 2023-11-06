<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="etec-c">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CineTec</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <?php
  include 'template/topo.php';
  ?>

  <style>
    body {
      background: linear-gradient(135deg, #0d0d0d, #04091d9d);
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .container {
      padding: 20px;
    }

    .card {
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-image img {
      text-align: center;
      max-width: 100%;
      max-height: 100%;
    }

    .card-content {
      padding: 20px;
    }

    .card-content .title {
      font-size: 1.25rem;
      font-weight: bold;
    }

    .info {
      margin-top: 10px;
    }

    .info label {
      font-weight: bold;
    }

    .card-footer {
      justify-content: space-between;
      background-color: #f5f5f5;
      padding: 10px 20px;
    }

    .card-footer-item {
      padding: 5px 10px;
      background-color: #3273dc;
      color: #fff;
      border-radius: 5px;
    }

    .card-footer-item.button {
      background-color: #ad1313;
      color: white;
      border-radius: 20px;
    }

    .card-footer-item.button:hover {
      background-color: #8a1313;
      color: white;
      border-radius: 20px;
    }

    #novidades .container .row .col-5 {
      width: 80%;
    }

    #novidades .container .row {
      flex-direction: column;
      align-items: center;
    }

    #novidades .container .row .col-5 .card .card-footer {
      flex-direction: column;
    }
  </style>
</head>

<body>
  <div class="carrosl">
    <?php
    include 'template/carrosel.php';
    ?>
  </div>
  <div class="container">
    <div class="columns is-multiline" id="tabela_filmes">
      <!-- Os cards dos cinemas serão inseridos aqui dinamicamente -->
    </div>
  </div>
  <?php
  include 'template/parceiros.php';
  ?>
  <script>
    var codigo_alt = "";

    window.addEventListener("load", (event) => {
      $("#menu").load("template/header.php");
      carregarFilmes();
    });

    function carregarFilmes() {
      var url = 'filmes.php';
      var tabela = '';
      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          tabela = '';
          for (let item in data) {
            tabela += criarCardFilme(data[item]);
          }
          document.getElementById("tabela_filmes").innerHTML = tabela;
        });
    }

    function criarCardFilme(data) {
      return `
            <div class="column is-one-third">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="${data.foto_url}">
                        </figure>
                    </div>
                    <div class="card-content">
                        <p class="title">
                            ${data.titulo}
                        </p>
                        <div class="info">
                            <label>Gênero:</label> ${data.genero}
                            <br>
                            <label>Classificação:</label> ${data.classificacao}
                            <br>
                            <label>Duração:</label> ${data.duracao}
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item button" href="filme.html?codigo=${data.id}">
                         Sinopse e Horários
                        </a>
                    </footer>
                </div>
            </div>
        `;
    }
  </script>
</body>
<?php
include 'template/footer.php';
?>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

</html>