
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        .carousel-control-prev,
        .carousel-control-next {
            font-size: 1em;
            padding: 1px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
        }

        .carousel-inner img {
            max-height: 550px;
            width: auto;
            margin: 0 auto;
            animation: slide-in 1s ease-out;
        }

        @keyframes slide-in-horizontal {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .carousel-inner img {
            max-width: 80%;
            height: auto;
            animation: slide-in-horizontal 1s ease-out;
        }

        ::selection {
            background-color: #E13300;
            color: black;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: black;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }

        #main-container {
            margin-top: 50px;
        }

        #carouselExample {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active d-item">
            <img src="imagenes/hola6.jpeg" class="d-block w-100" alt="slider4">
        </div>
        <div class="carousel-item">
            <img src="imagenes/hola1.jpeg" class="d-block w-100" alt="slider1">
        </div>
        <div class="carousel-item">
            <img src="imagenes/hola2.jpeg" class="d-block w-100" alt="slider1">
        </div>
        <div class="carousel-item">
            <img src="imagenes/hola3.jpeg" class="d-block w-100" alt="slider1">
        </div>
        <div class="carousel-item">
            <img src="imagenes/hola4.jpeg" class="d-block w-100" alt="slider1">
        </div>
        <div class="carousel-item">
            <img src="imagenes/hola5.jpeg" class="d-block w-100" alt="slider1">
        </div>
        <div class="carousel-item">
            <img src="imagenes/hola7.jpeg" class="d-block w-100" alt="slider1">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="false"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6">
            <div id="quien" style="height: 190px; background-color: lightgray; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 10px;">
                <h2>¿Quienes somos?</h2>
                <div style="background-color: lightgray; padding: 10px;">
                    <p style="max-width: 300px; margin: 0 auto;">En Aries Peluqueria, nos dedicamos a ofrecer servicios de peluquería de alta calidad para hombres, mujeres y niños. Nos enorgullece brindar un ambiente acogedor y profesional donde nuestros clientes pueden disfrutar de una amplia gama de servicios de cuidado capilar..</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6">
            <div id="mision" style="height: 190px; background-color: lightgreen; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 10px;">
                <h2>Misión</h2>
                <div style="background-color: lightgreen; padding: 10px;">
                    <p style="max-width: 300px; margin: 0 auto;">La peluquería Aries brinda servicios de corte de cabello tanto para mujeres y hombres de cualquier edad en la cual satisface la necesidad de que cada persona quede satisfecha con su corte de cabello ya sea para algún evento social o porque ya es tiempo de cortarse o arreglarse el cabello.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6">
            <div id="vision" style="height: 190px; background-color: lightblue; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 10px;">
                <h2>Visión</h2>
                <div style="background-color: lightblue; padding: 10px;">
                    <p style="max-width: 300px; margin: 0 auto;">Tenemos un profesionalismo y experiencia única y diferente a las demás peluquerías con una atención personalizada que innova las nuevas tendencias como cortes de cabello de moda, contando con un ambiente agradable, seguro y organizado.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
