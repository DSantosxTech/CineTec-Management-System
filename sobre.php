<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CineTec - Sobre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    body {
        background: linear-gradient(135deg, #0d0d0d, #04091d9d);
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
</style>

<body>
    <?php include "template/topo.php"; ?>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/fundoA.jpg"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-danger ps-5 mb-5">
                        <h6 class="text-danger text-uppercase">Sobre o Cinema</h6>
                        <h1 class="display-5 text-uppercase mb-0" style="color: white;">Explorando a Magia do Cinema
                        </h1>
                    </div>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab"
                                    aria-controls="pills-1" aria-selected="true"
                                    style="background-color:red; color:white">Nossa Missão</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false" style="background-color:black; color:white">Nossa
                                    Visão</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                aria-labelledby="pills-1-tab">
                                <p class="mb-0">Nossa missão no cinema é oferecer uma experiência única e emocionante
                                    para os amantes da sétima arte. Queremos proporcionar entretenimento de qualidade,
                                    com filmes que cativam e inspiram. Estamos empenhados em criar um ambiente acolhedor
                                    e mágico para todos os cinéfilos.

                                    Nosso objetivo é exibir uma ampla variedade de filmes, desde clássicos atemporais
                                    até as últimas produções. Queremos ser o local onde as pessoas se reúnem para
                                    apreciar a magia do cinema na tela grande.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Nossa visão é ser reconhecidos como o melhor cinema da região, conhecido
                                    por nossa dedicação à excelência e inovação. Queremos ser o destino preferido para
                                    os amantes do cinema, oferecendo uma experiência que vai além do simples ato de
                                    assistir a um filme.

                                    Buscamos constantemente novas maneiras de encantar nosso público, seja através de
                                    tecnologia de ponta, eventos especiais ou programação diversificada. Queremos ser
                                    líderes na indústria cinematográfica, proporcionando uma jornada única e
                                    inesquecível para os cinéfilos de todas as idades.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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