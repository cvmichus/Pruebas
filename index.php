<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <header class="text-center">
                <h1>Ejemplo MVC con PHP</h1>
                <hr/>
                <p class="lead">Creamos REST API desde AdonisJS y <br/>
                    operamos con ella utilizando el paradigma MVC</p>
            </header>
            <div class="row">
               
                <div class="col-lg-12 text-center">
                    <hr/>
                    <h3>Listado de servicios</h3>
                    <a href="controller/personas_controller.php"><i class="fa fa-align-justify"></i> Acceder al listado de servicios</a>
						<br>
                     <a href="controller/tabla_controller.php"><i class="fa fa-align-justify"></i> Tabla de Usuarios</a>
                           <br> 
                       <a href="controller/java_controller.php"><i class="fa fa-align-justify"></i> Prueba con Javascript</a>

                    <hr/>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                xxx - <?php echo date("Y"); ?>
            </footer>
        </div>
    </body>
</html>