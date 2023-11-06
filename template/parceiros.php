<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="etec-c">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CineTec</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        .col-3 {
            width: 25%;
            float: left;
            box-sizing: border-box;
        }

        .card {
            margin: 10px;
        }
        p{
            color: black;
            font-weight: bold;
            justify-content: center;
            text-align: center;

        }

        .card {
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .novidades-container {
            text-align: center;
        }

        .combos-container {
            text-align: center;
        }

        .combos-container .columns {
            margin-left: 0;
            margin-right: 0;
        }

        .combos-container .column {
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="columns is-multiline novidades-container">
            <div class="col-3">
                <img src="./assets/images/bradesco.svg" alt="ícone bradesco">
            </div>
            <div class="col-3">
                <img src="./assets/images/prime.svg" alt="ícone prime">
            </div>
            <div class="col-3">
                <img src="./assets/images/vivo.svg" alt="ícone vivo">
            </div>
            <div class="col-3">
                <img src="./assets/images/elo.svg" alt="ícone elo">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="columns is-multiline combos-container">
            <div class="column is-one-half">
                <div class="card">
                    <img src="./assets/images/novidades-promo1.jpg" alt="">
                    <footer class="card-footer d-flex">
                        <p>Combo Elementos</p><br>
                    </footer>
                    <a href="#" style="color:red">Saiba mais</a>
                </div>
            </div>
            <div class="column is-one-half">
                <div class="card">
                    <img src="./assets/images/novidades-promo2.jpg" alt="">
                    <footer class="card-footer">
                        <p>Combo A Pequena Sereia</p><br>
                    </footer>
                    <a href="#"style="color:red">Saiba mais</a>
                </div>
            </div>
            <div class="column is-one-half">
                <div class="card">
                    <img src="./assets/images/novidades-promo3.jpg" alt="">
                    <footer class="card-footer">
                        <p>Combo Homem-Aranha</p><br>
                    </footer>
                    <a href="#"style="color:red">Saiba mais</a>
                </div>

            </div>
            <div class="column is-one-half">
                <div class="card">
                    <img src="./assets/images/novidades-promo4.jpg" alt="">
                    <footer class="card-footer">
                        <p>Combo - The Flash</p><br>
                    </footer>
                    <a href="#"style="color:red">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>