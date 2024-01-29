<!DOCTYPE html>
<html lang="es" dir="ltr">
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
    <a class="navbar-brand" href="#"><img src="imagenes/logo.jpg" alt="Logo" style="width: 50px; height: auto;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" style="font-size: 20px;"> <!-- Modifica el tamaño del texto aquí -->
        <li class="nav-item" style="margin-right: 20px;">
          <a class="nav-link active" aria-current="page" href="#quien">Quienes somos</a>
        </li>
        <li class="nav-item" style="margin-right: 20px;">
          <a class="nav-link active " aria-current="page" href="#vision">Vision</a>
        </li>
        <li class="nav-item" style="margin-right: 20px;">
          <a class="nav-link active" aria-current="page" href="#mision">Mision</a>
        </li>
        <li class="nav-item dropdown" style="margin-right: 20px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menú
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="apartados/image.php">Ver imágenes</a></li>
            <li><a class="dropdown-item" href="apartados/cliente.php">Atención al cliente</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbarLogo = document.querySelector('.navbar-brand img');
        navbarLogo.addEventListener('click', function() {
            navbarLogo.classList.toggle('img-full');
        });
    });
</script>

<style>
    .img-full {
        width: 200px; /* Ajusta el tamaño de la imagen al hacer clic */
        height: auto;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        background-color: rgba(0, 0, 0, 0.8);
    }
</style>

</body>
</html>
