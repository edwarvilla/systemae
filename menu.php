<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/solar/bootstrap.min.css" rel="stylesheet" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/pinterest.css">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="css/footer.css">
    <title> TIENDA ARACELY</title>
</head>
<body>


<!--Inicio de Menu-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success mt-2">
    <a class="navbar-brand" href="#"><img src="imagenes/logo.png" alt=""style="width: 100px; height:100px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">INICIO<span class="sr-only">(current)</span></a>
            </li>
            <!--inicio sub menu-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="leche.php" target="_blank">Leche</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="fideo.php" target="_blank">Fideo</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Azúcar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Aceite</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Arroz</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Atun</a>
                </div>
            </li>
            <!--fin de sub menu-->
            <!--inicio sub menu-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.youtube.com/ " target="_blank">ayuda</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="productos.html">Compra de Productos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Preguntas Frecuentes</a>
                </div>
            </li>
            <!--fin de sub menu-->
            <li class="nav-item">
                <a class="nav-link" href="contactenos.php">CONTACTENOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="carrito.php"><i class="fa fa-shopping-cart"></i></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<!--Fin de Menu-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/pinterest_grid.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
</body>
</html>
