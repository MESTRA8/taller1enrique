<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Prueba base de datos</title>
</head>
<body>
    
    <header class="header">
    <div class="contenedor">
            <div class="barra">
                <a class="logo">
                    <h2 class="logo__nombre no-margin centrar-texto logo__bold" >DESARROLLO WEB</h2>
                    <h3 class="logo__nombre no-margin centrar-texto logo__bold">TABLA 2: Eliminar</h3>
                </a>

                <nav class="navegacion">
                    <a class="navegacion-enlace" href="tabla2.php">Mostrar</a>
                    <a class="navegacion-enlace" href="tabla2create.php">Crear</a>
                    <a class="navegacion-enlace" href="tabla2update.php">Modificar</a>
                    <a class="navegacion-enlace" href="tabla2read.php">Buscar</a>
                    <a class="navegacion-enlace" href="tabla2delete.php">Eliminar</a>
                </nav>
            </div>
        </div>

        <div class="header__texto">
            <h2 class="no-margin"> Taller N°-1 de Desarrolo Web - Martes</h2>
        </div>
    </header>

    <div class="contenedor">
        

        <form class="formulario" method="POST" action="includes/tabla2/eliminar.php">

            <div class="campo">
                <label class="campo_label" for="id">ID:  </label>
                <input class="campo_field" name="id" type="text" placeholder="Id a eliminar" id="id">
            </div>

            <div class="campo centrarbtn" >
                <input type="submit" name="boton_registrar" value="Eliminar" class="boton"> 
            </div>


        </form>


    </div>

    <footer>
        <div class="centrar-texto">
            <p></p>
            <p class="centrar-texto">(☞ﾟヮﾟ)☞  Todos los derechos reservados (¬‿¬)</p>
        </div>
    </footer>
</body>
</html>