<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../estilos/home.css">
    <link rel="stylesheet" href="../estilos/general.css">
    <link rel="stylesheet" href="../estilos/menu-hamburguesa.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/8a5a484aee.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">

    <title>Drones</title>
    <style>
        #map {
            height: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <a href="#" class="enlace">
                    <img class="logo" src="imagenes/drone-home2.png" alt="">
                </a>
                <ul>
                    <li><a class="active" href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="vistas/drones.php">Drones</a></li>
                    <li><a href="#">Medicina</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>

            <h2>Drones</h2>
            <table class="table" style="color: white;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr loc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14305.495841197791!2d-59.38964885916644!3d-26.314387711663777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9443914d524a865f%3A0xb207c9c68100eaa6!2sHospital%20El%20Colorado!5e0!3m2!1sen!2sus!4v1683942233475!5m2!1sen!2sus">
                        <th scope="row">1</th>
                        <td>Blaupunk</td>
                        <td>Activo</td>
                        <td><button type="button" class="ver btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="initMap()"> Ver</button></td>
                    </tr>
                    <tr loc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11977.601414566256!2d-55.03682205387866!3d-26.80933201751225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f827183e29bd07%3A0xa30f0ee301424b7d!2sPatio%20Del%20Puerto%20Hotel%20Boutique!5e0!3m2!1sen!2sus!4v1683942598177!5m2!1sen!2sus">
                        <th scope="row">2</th>
                        <td>Mini 3</td>
                        <td>Activo</td>
                        <td><button type="button" class="ver btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Phantom</td>
                        <td>Inactivo</td>
                        <td><button disabled type="button" class="ver btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Ver</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </header>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white;">Localizacion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <iframe id="miIframe" src="" width="450" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="modal-footer" style="background-color: black;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>