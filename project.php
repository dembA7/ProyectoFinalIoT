<!-- Connection to db and validate session -->
<?php
    include("./php/connection.php");
    include("./php/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style2.css">
    <!-- JS -->
    <script src="./js/mainProject.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="./assets/mainIconFavi.png" type="image/x-icon">
    <title>Sobre el proyecto</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./assets/mainIcon.png" alt="Logo" width="24" height="23"
                    class="d-inline-block align-text-top">
                Clima-Tec
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link">Mediciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="./project.php" class="nav-link active">Sobre el proyecto</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <?php echo $login_session; ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./php/logout.php" class="nav-link active">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Antes-->
    <div class="container text-light text-center my-md-5 my-0">
        <div class="row align-items-center" id="Antes">
            <div class="col">
                <h1 class="header">
                    "Las predicciones meteorol??gicas son <span id="bad"></span>."
                </h1>
            </div>
        </div>
    </div>

    <!--Explicaci??n proyecto-->
    <div class="container-fluid d-none d-lg-block my-5">
        <h1 class="text-center text-light py-5" style="font-size:3rem">
            El problema con las predicciones meteorol??gicas
        </h1>
        <h2 class="text-center text-light ">
            Como cualquier fen??meno f??sico el clima se puede entender mejor
            entre m??s datos se tengan. El problema con la recolecci??n de datos
            de este tipo es que es caro, por esto muchas veces se recolectan datos
            en algunas zonas consideradas representativas y luego se extrapolan las mediciones
            a una regi??n gigante, despu??s, con ayuda de la matem??tica se generan probabilidades.
            El proposito del proyecto es la creaci??n de estaciones baratas, r??pidas y locales que puedan
            generar mayor fiabilidad en las predicciones, sobre todo aquellas de la regi??n
            a la que pertenece nuestro campus, donde est??n ubicadas nuestras primeras estaciones.
        </h2>
    </div>

    <!-- Explicaci??n tecnolog??a-->
    <h1 class="text-center text-light py-5 d-none d-lg-block" style="font-size:3rem">
        La tecnolog??a detr??s de las estaciones de medici??n
    </h1>
    <div class="container-fluid py-2 mx-2 ">
        <div class="row align-items-center">
            <div class="col mx-0 px-0 col-lg-6">
                <img src="./assets/NodeMCU.png" alt="Microcontrolador usado" class="img-fluid" width="500rem">
            </div>
            <div class="col-12 mx-0 px-0 col-lg-6">
                <h1 class="text-light text-center" style="font-size:3rem">
                    <span class="d-none d-lg-block">
                        Para la creaci??n de dichas estaciones se utilizaron sensores barom??tricos, de temperatura,
                        humedad
                        y lum??nicos. Con ayuda de un microcontrolador y de conceptos
                        de IoT se empezaron a generar datos atmosf??ricos. El costo aproximado
                        de cada estaci??n es de
                    </span>
                    <span class="d-block d-lg-none">Gracias a la innovadora tecnolog??a desarrollada el costo por
                        estaci??n
                        meteor??liga es de
                    </span>
                    <span class="text-info"> menos de 300 MXN.</span>
                </h1>
            </div>
        </div>
    </div>

    <!--Ahora-->
    <div class="container text-light text-center my-5 py-5" id="#Ahora">
        <div class="row align-items-center my-5 py-5">
            <div class="col py-5 my-5">
                <h1 class="header py-5 my-5">
                    Las predicciones meteorol??gicas ahora son <span id="good"></span>.
                </h1>
            </div>
        </div>
    </div>

    <!--Equipo-->
    <h1 class="text-center text-light py-5" style="font-size:3rem">El equipo detr??s</h1>
    <div class="container-fluid mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 text-white p-3">
                    <div class="card text-light">
                        <div class="card-header text-center">
                            Miguel ??ngel Tena, ingenier??a en sistemas digitales
                        </div>
                        <img src="./assets/Mike.jpeg" class="card-img-top" alt="Miguel Tena">
                        <div class="card-body">
                            <p class="card-text text-center">Dise??o e implementaci??n de la tecnolog??a detr??s
                                de las estaciones
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-white p-3">
                    <div class="card text-light">
                        <div class="card-header text-center">
                            Ricardo Rosales, ingenier??a el??ctrica y desarrollador Back End
                        </div>
                        <img src="./assets/Ricardo.jpeg" class="card-img-top" alt="Ricardo Rosales">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Dise??o e implementaci??n de la tecnolog??a detr??s
                                de las estaciones, encargado del ??rea l??gica de la p??gina web
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-white p-3">
                    <div class="card text-light">
                        <div class="card-header text-center">
                            Pablo Javier, desarrollador Full-Stack
                        </div>
                        <img src="./assets/Pablo.jpeg" class="card-img-top" alt="Pablo Javier">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Dise??o est??tico de la web, responsable de experiencia, interfaz de usuario y ??rea l??gica
                                de la p??gina web
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-0 col-md-2">

                </div>
                <div class="col-12 col-md-4 text-white p-3">
                    <div class="card text-light">
                        <div class="card-header text-center">
                            Erik Cabrera, CFO
                        </div>
                        <img src="./assets/Erik.jpeg" class="card-img-top" alt="Miguel Tena">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Planificaci??n econ??mica y financiera del proyecto, responsable
                                de redituabilidad
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 text-white p-3">
                    <div class="card text-light">
                        <div class="card-header text-center">
                            Arturo D??az, desarrollador Full-Stack
                        </div>
                        <img src="./assets/Arturo.jpeg" class="card-img-top" alt="Arturo D??az">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Dise??o est??tico de la web, responsable de experiencia e interfaz de usuario
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-0 col-md-2">

                </div>
            </div>
        </div>
    </div>
</body>

</html>