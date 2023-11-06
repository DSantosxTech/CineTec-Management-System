<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
    <title>CineTec - Produtos</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include "template/topo.php"; ?>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-danger ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-danger text-uppercase">Produtos</h6>
                <h1 class="display-5 text-uppercase mb-0" style="color:white">Produtos para sua experiência de cinema
                </h1>
            </div>
            <div class="owl-carousel product-carousel">
                <!-- Produto 1 -->
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/pipocaCoca.png" alt="Produto 1">
                        <h6 class="text-uppercase">Pipoca e Coca</h6>
                        <h5 class="text-danger mb-0">$12.99</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Produto 2 -->
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/pipocaRefri.png" alt="Produto 2">
                        <h6 class="text-uppercase">Pipoca Refri</h6>
                        <h5 class="text-danger mb-0">$5.99</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Produto 3 -->
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/pipocaMM.png" alt="Produto 3">
                        <h6 class="text-uppercase">Pipoca e M&M</h6>
                        <h5 class="text-danger mb-0">$19.99</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Produto 4 -->
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/pipoca2Refil.png" alt="Produto 4">
                        <h6 class="text-uppercase">Combo Pipoca e 2 Refil</h6>
                        <h5 class="text-danger mb-0">$14.99</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-danger py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-danger text-uppercase" style="color:white;">Oferta Especial</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">Economize 50% em todos os produtos do seu
                            primeiro pedido</h1>
                    </div>
                    <p class="text-white mb-4"></p>
                    <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Compre Agora</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5">Leia Mais</a>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-danger py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
include 'template/footer.php';
?>