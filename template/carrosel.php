<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carro</title>
    <style>
        .carro {
            position: relative;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
        }

        .carro-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carro-open:checked + .carro-item {
            position: static;
            opacity: 1;
        }

        .carro-item {
            position: absolute;
            opacity: 0;
            transition: opacity 0.6s ease-out;
        }

        .carro-item img {
            display: block;
            height: auto;
            max-width: 100%;
        }

        .carro-control {
            background: rgba(0, 0, 0, 0.28);
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            font-size: 40px;
            height: 40px;
            line-height: 35px;
            position: absolute;
            top: 50%;
            transform: translate(0, -50%);
            text-align: center;
            width: 40px;
            z-index: 10;
        }

        .carro-control.prev {
            left: 2%;
        }

        .carro-control.next {
            right: 2%;
        }

        .carro-control:hover {
            background: rgba(0, 0, 0, 0.8);
            color: #aaaaaa;
        }

        #carro-1:checked ~ .control-1,
        #carro-2:checked ~ .control-2,
        #carro-3:checked ~ .control-3 {
            display: block;
        }

        .carro-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        .carro-indicators li {
            display: inline-block;
            margin: 0 5px;
        }

        .carro-bullet {
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 35px;
        }

        .carro-bullet:hover {
            color: #aaaaaa;
        }

        #carro-1:checked ~ .control-1 ~ .carro-indicators li:nth-child(1) .carro-bullet,
        #carro-2:checked ~ .control-2 ~ .carro-indicators li:nth-child(2) .carro-bullet,
        #carro-3:checked ~ .control-3 ~ .carro-indicators li:nth-child(3) .carro-bullet {
            color: #ad1313;
        }

        #title {
            width: 100%;
            position: absolute;
            padding: 0;
            margin: 0 auto;
            text-align: center;
            font-size: 27px;
            color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            z-index: 9999;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
        }
    </style>
</head>
<body>
    <div class="carro">
        <div class="carro-inner">
            <input class="carro-open" type="radio" id="carro-1" name="carro" aria-hidden="true" hidden="" checked="checked">
            <div class="carro-item">
                <img src="fotos/carr1.png" alt="Image 1">
            </div>
            <input class="carro-open" type="radio" id="carro-2" name="carro" aria-hidden="true" hidden="">
            <div class="carro-item">
                <img src="fotos/carr4.png" alt="Image 2">
            </div>
            <input class="carro-open" type="radio" id="carro-3" name="carro" aria-hidden="true" hidden="">
            <div class="carro-item">
                <img src="fotos/carr3.jpg" alt="Image 3">
            </div>
            <label for="carro-3" class="carro-control prev control-1">‹</label>
            <label for="carro-2" class="carro-control next control-1">›</label>
            <label for="carro-1" class="carro-control prev control-2">‹</label>
            <label for="carro-3" class="carro-control next control-2">›</label>
            <label for="carro-2" class="carro-control prev control-3">‹</label>
            <label for="carro-1" class="carro-control next control-3">›</label>
            <ol class="carro-indicators">
                <li>
                    <label for="carro-1" class="carro-bullet">•</label>
                </li>
                <li>
                    <label for="carro-2" class="carro-bullet">•</label>
                </li>
                <li>
                    <label for="carro-3" class="carro-bullet">•</label>
                </li>
            </ol>
        </div>
    </div>
</body>
</html>
