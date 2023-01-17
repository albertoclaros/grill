<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>GRILL | Restaurante</title>
    <link href="https://allfont.es/allfont.css?fonts=impact" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="cabecera">

        <div class="cabecera-contenedor">

            <h1><a href="index.php">GRILL</a></h1>

            <div class="cabecera-burguer">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <nav class="cabecera-nav">
                <ul class="menu">
                    <li class="menu-item">
                        <a class="menu-enlace <?php if($active == "index"){echo   'active';}?>" href="index.php">inicio</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-enlace <?php if($active == "carta"){echo   'active';}?>" href="#carta">carta</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-enlace <?php if($active == "galeria"){echo 'active';}?>" href="#galeria">galería</a>
                    </li>
                    <li class="menu-item ">
                        <a class="menu-enlace <?php if($active == "contacto"){echo 'active';}?>" href="#contacto">contacto</a>
                    </li>
                </ul>  
            </nav>
        </div><!-- cabecera-contenedor -->
    </header>