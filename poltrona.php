<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>CineTec - Compra de Poltronas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #000000, #04091d9d);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: white;
        }

        .card-container {
            border: 4px solid #ccc;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin: 10px;
            max-width: 100%;
            min-height: 100%;
        }

        .card-content .title {
            color: black;
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0;
        }

        .card {
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            float: left;
            margin-top: 20px;
        }

        .area-de-assentos {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .fileira {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .assento {
            color: black;
            font-weight: bold;
            width: 70px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #8f0a0a;
            border: 2px solid #560914;
            cursor: pointer;
            user-select: none;
            margin: 5px;
            border-radius: 10px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            font: 18px bold/1.2 Arial, sans-serif;
            text-align: center;
        }

        .obeso {
            width: 85px;
            background: #2196f3;
            border: 2px solid #0f68b3;
        }

        .preferencial,
        .idoso {
            width: 75px;
            background: #2196f3;
            border: 2px solid #0f68b3;
        }

        .assento-selecionado {
            background: #560914;
        }

        .assento.ocupado {
            background: #560914;
            border: 2px solid #560914;
            cursor: not-allowed;
        }

        .container {
            padding: 20px;
        }

        img {
            text-align: center;
            max-width: 400px;
            max-height: 400px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-container">
                <div class="card-content">
                    <div id="cinema">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-container">
                <div class="card-content">
                    <div class="area-de-assentos">
                        <?php
                        $assento = 1;
                        for ($fileira = 1; $fileira <= 7; $fileira++) {
                            echo '<div class="fileira">';
                            for ($i = 1; $i <= 7; $i++) {
                                if ($i == 1 && $fileira <= 3) {
                                    echo '<div class="assento preferencial" data-assento="♿' . $assento . '">♿' . $assento . '</div>';
                                } elseif ($i == 1 && $fileira >= 6) {
                                    echo '<div class="assento idoso" data-assento="<===>' . $assento . '"><===>' . $assento . '</div>';
                                } elseif ($i == 6 && $fileira >= 5) {
                                    echo '<div class="assento obeso" data-assento="<--->' . $assento . '"><--->' . $assento . '</div>';
                                } elseif ($assento == 40) {
                                    echo '<div class="assento ocupado" data-assento="' . $assento . '">' . $assento . '</div>';
                                } else {
                                    echo '<div class="assento disponivel" data-assento="' . $assento . '">' . $assento . '</div>';
                                    $assento++;
                                }
                            }
                            echo '</div>';
                        }
                        echo ' <div class="modul">♿ - Cadeirante</div>
                            <div class="modul"><---> - Obeso</div>
                            <div class="modul"><===> -Idoso</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const assentos = document.querySelectorAll('.assento');
        const selecao = [];

        assentos.forEach(a => {
            a.addEventListener('click', () => {
                if (!a.classList.contains('ocupado')) {
                    const num = a.getAttribute('data-assento');
                    if (selecao.includes(num)) {
                        const i = selecao.indexOf(num);
                        selecao.splice(i, 1);
                        a.classList.remove('assento-selecionado');
                    } else {
                        selecao.push(num);
                        a.classList.add('assento-selecionado');
                    }

                    const selElem = document.getElementById('assentos-selecionados');
                    selElem.textContent = selecao.join(', ');
                }
            });
        });

        const comprar = document.getElementById('botao-comprar');
        comprar.addEventListener('click', () => {
            if (selecao.length === 0) {
                alert('Por favor, selecione uma poltrona.');
            } else {
                const valor = selecao.length * 4.50;
                alert(`Você comprou as poltronas: ${selecao.join(', ')} e o Valor é R$ ${valor.toFixed(2)}`);
            }
        });
    </script>
    <script>
        window.addEventListener("load", (event) => {
            carregarFilme();
        });

        function carregarFilme() {
            const urlAtual = new URL(window.location.href);
            const cod = urlAtual.searchParams.get('codigo');
            var url = 'filmes.php?codigo=' + cod;
            var tabela = '';
            fetch(url)
                .then((response) => response.json())
                .then((data) => {
                    tabela = '';
                    for (let item in data) {
                        tabela += criarCardFilme(data[item]);
                    }
                    document.getElementById("cinema").innerHTML = tabela;
                });
        }
        function criarCardFilme(data) {
            return `
            <div class="card">
    <div class="card-content">
        <div class="card-image">
            <img src="${data.foto_url}" alt="${data.titulo} Image">
        </div>
    </div>
</div>

<div class="card">
    <div class="card-content">
        <h2 class="title">${data.titulo}</h2>
        <div class="info">
            <p><strong>Gênero:</strong> ${data.genero}</p>
            <p><strong>Classificação:</strong> ${data.classificacao}</p>
            <p><strong>Duração:</strong> ${data.duracao}</p>
        </div>
        <h2 class="title">Poltronas Selecionadas:</h2><br>
        <p><span id="assentos-selecionados">-</span></p>
        <button id="botao-comprar" class="button is-danger">Comprar Assentos Selecionados</button>
    </div>
</div>`;

        }
    </script>

</body>

</html>