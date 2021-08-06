<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="inicio">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quienes-somos">QUIENES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca-de">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">CONTACTO</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<!-- End Navbar-->
<div class="row g-0">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3" style="background-color:SkyBlue">
            <br><br>
            <ul class="list-group">
                <li class="list-group-item">Menu</li>
                <li class="list-group-item">Lista</li>
                <li class="list-group-item">Revista</li>
            </ul>
            <br><br>
        </div>
        <!--End Sidebar -->
        <!-- Content--->
        <div class="col-md-9" style="">
             @yield('contenido')
        </div>
        <!-- end Content-->
    </div>
</div>
<br>
<footer class="text-center" style="background-color: #1963ED">
   @ Derechos Reservador 2021
</footer>
</body>
</html>