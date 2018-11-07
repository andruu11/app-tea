<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="vista/assets/fonts/simple-line-icons.min.css"/>

    <link href="vista/assets/reg/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/style.css" rel="stylesheet"/>
</head>
<body>
            
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        
        <div class="container">
            <h4 class="text-info"><?php echo "Cuenta: "; echo $_SESSION["lacuenta"]; ?></h4>
        </div>
        <div class="block-heading">
            <a class="navbar-brand logo" href="login2.php">Atrás</a>
            <!--<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>-->
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registra un nuevo usuario</h2>
                    <p>El usuario será agregado a esta cuenta.</p>
                </div>
                <form action="save2.php" method="post">
                    <!--Datos-->
                    <h4>Ingrese sus datos personales</h4>
                            <div class="form-group">
                                <label>Nombres:</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre completo"/>
                            </div>

                            <!--apellidos-->
                            <div class="form-group">
                                <label>Apellidos:</label>
                                <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido paterno, Apellido materno prro >:v"/>
                            </div>

                            <div class="form-group">
                                <label>Correo electronico:</label>
                                <input type="email" name="correo" class="form-control" placeholder="Ej.: alguien@correo.com"/>
                            </div>

                            <!--ciudad-->

                            <div class="form-group">
                                <label>Seleccione su Ciudad</label>
                                <div class="col-md-5 col-sm-7 col-xs-7" >
                                    <select class="select_single form-control" tabindex="-1" name="ciudad">
                                        <option></option>
                                        <option value="1">La Paz</option>
                                        <option value="10">El Alto</option>
                                        <option value="4">Cochabamba</option>
                                        <option value="9">Santa Cruz</option>
                                        <option value="5">Chuquisaca</option>
                                        <option value="3">Potosí</option>
                                        <option value="2">Oruro</option>
                                        <option value="7">Pando</option>
                                        <option value="8">Beni</option>
                                        <option value="6">Tarija</option>
                                    </select>
                                </div>
                            </div>
                    <hr>

                    <!--Usuario-->
                    <h4>Cree su usuario</h4>  
                                <div class="form-group">
                                    <label>Nombre de usuario:</label>
                                    <input type="text" name="usuario" class="form-control" placeholder="Nickname"/>
                                </div>
                                <div class="form-group">
                                    <label>Pin:</label>
                                    <input type="password" name="pin" class="form-control" placeholder="Ingrese un pin de 4 digitos."/>
                                </div>

                            <!--tipo-->

                            <div class="form-group">
                                <label>Tipo de usuario</label>
                                <p>Especifique si este usuario es un familiar o un tutor de la persona con TEA</p>
                                <div class="col-md-5 col-sm-7 col-xs-7" >
                                    <select class="select_single form-control" tabindex="-1" name="tipo">
                                        <option></option>
                                        <option value="1">Admin</option>
                                        <option value="2">Tutor</option>
                                        <option value="3">Familiar</option>
                                        
                                    </select>
                                </div>
                            </div>
                    <hr>

                    <button class="btn btn-primary btn-block" type="submit" name="save2">Agregar</button>
                    <!--<button type="submit" name="save" class="btn btn-primary btn-submit">Guardar</button>-->
                </form>
            </div>
        </section>
    </main>
    
    <script src=>"vista/assets/js/jquery.min.js"</script>
    <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="vista/assets/js/theme.js"></script>

    <script src="vista/assets/reg/js/jquery.min.js"></script>
    <script src="vista/assets/reg/js/popper.min.js"></script>
    <script src="vista/assets/reg/js/bootstrap.min.js"></script>
    <script src="vista/assets/reg/script.js"></script>
</body>

</html>