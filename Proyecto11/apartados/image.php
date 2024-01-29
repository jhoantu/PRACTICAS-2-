<!DOCTYPE html>
<html lang="es" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/master.php">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3e50;">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="logo.jpg" alt="Logo" style="width: 50px; height: auto;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menú
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cliente.php">Atención al cliente</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imágenes</title>
    <!-- Tus enlaces a Bootstrap y CSS personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<!-- Contenido de la página de imágenes -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de cortes de cabello</title>
    <!-- Enlaces a Bootstrap y CSS personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Lista de cortes de cabello</h1>
    <ul class="list-group">
        <li class="list-group-item d-flex align-items-center">
            <div class="me-auto">
                <h3>Corte de cabello 1</h3>
                <p>Precio: $20.00</p>
                <p>Descripción: Un acabado tenue con rayas hechas con navaja y el tine azul marino un tema espectacular.</p>
            </div>
            <img src="pelo1.jpeg" alt="Corte 1" class="img-thumbnail zoom-image" onclick="toggleZoom(this)">
        </li>
        <li class="list-group-item d-flex align-items-center">
            <div class="me-auto">
                <h3>Corte de cabello 2</h3>
                <p>Precio: $10.00</p>
                <p>Descripción: Planchado geninuo junto al corte de puntas y aplicacion de fijador para un toque unico.</p>
            </div>
            <img src="pelo2.jpeg" alt="Corte 2" class="img-thumbnail zoom-image" onclick="toggleZoom(this)">
        </li>
        <li class="list-group-item d-flex align-items-center">
            <div class="me-auto">
                <h3>Corte de cabello 3</h3>
                <p>Precio: $5.00</p>
                <p>Descripción: Corte muy de moda en jovenes mullet es su nombre y usado por artistas famosos.</p>
            </div>
            <img src="corte3.jpg" alt="Corte 3" class="img-thumbnail zoom-image" onclick="toggleZoom(this)">
        </li>
        <li class="list-group-item d-flex align-items-center">
            <div class="me-auto">
                <h3>Corte de cabello 4</h3>
                <p>Precio: $7.00</p>
                <p>Descripción: Especie de chureado pero no en su completa version sino algo mas suelto no tan ondulado.</p>
            </div>
            <img src="corte4.jpg" alt="Corte 4" class="img-thumbnail zoom-image" onclick="toggleZoom(this)">
        </li>
        <!-- Agrega más elementos de lista según sea necesario -->
    </ul>
</div>

<script>
    function toggleZoom(img) {
        img.classList.toggle('img-full');
    }
</script>

<style>
    .img-thumbnail {
        width: 200px; /* Tamaño inicial de las imágenes */
        height: 200px; /* Tamaño inicial de las imágenes */
        object-fit: cover; /* Para que la imagen se ajuste correctamente */
        transition: transform 0.3s ease; /* Efecto de transición suave */
        cursor: pointer; /* Cambiar el cursor al puntero al pasar sobre la imagen */
    }

    .img-full {
        width: 100vw; /* Tamaño máximo de la imagen al hacer clic */
        height: 100vh; /* Tamaño máximo de la imagen al hacer clic */
        object-fit: contain; /* Para que la imagen se ajuste correctamente */
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.8);
    }
</style>
</body>
</html>
