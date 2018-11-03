<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/assets/fonts/simple-line-icons.min.css">
</head>

<body>
    <?php $nombre_cuenta = $_POST['nombre_cuenta']; ?>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        
        <div class="container">
            <h4 class="text-info"><?php $nombre_cuenta; ?></h4>
        </div>
        <div class="block-heading">
            <a class="navbar-brand logo" href="">Añadir Usuario</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button> 
        </div>
    </nav>
    
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container" style="margin-top: 50px">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="vista/assets/img/avatars/8.jpg">
                            <form name="user" action="modelo/session_init.php" method="post">
                                <div class="card-body">
                                    <h4 class="card-title"><?php $nomusu="branco"; echo $nomusu; ?></h4>
                                    <input type      ="hidden" value="<?php echo $nomusu; ?>" readonly name="usuario" id="usuario"/>
                                    <input type      ="password" name="password" id="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Contraseña" autocomplete="off" required/>
                                </div>
                                <div><input type="submit" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" /></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="vista/assets/img/avatars/5.jpg">
                            <form name="user" action="modelo/session_init.php" method="post">
                                <div class="card-body">
                                    <h4 class="card-title"><?php $nomusu="tefa"; echo $nomusu; ?></h4>
                                    <input type      ="hidden" value="<?php echo $nomusu; ?>" readonly name="usuario" id="usuario"/>
                                    <input type      ="password" name="password" id="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Contraseña" autocomplete="off" required/>
                                </div>
                                <div><input type="submit" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" /></div>
                            </form>
                        </div>
                    </div>
                <?php
                for($i=1;$i<=9;$i++){
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="vista/assets/img/avatars/7.jpg">
                            <form name="user" action="modelo/session_init.php" method="post">
                                <div class="card-body">
                                    <h4 class="card-title"><?php $nomusu="diego"; echo $nomusu; ?></h4>
                                    <input type      ="hidden" value="<?php echo $nomusu; ?>" readonly name="usuario" id="usuario"/>
                                    <input type      ="password" name="password" id="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Contraseña" autocomplete="off" required/>
                                </div>
                                <div><input type="submit" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" /></div>
                            </form> 
                        </div>
                    </div>
                <?php
                    }
                ?>
                </div>
            </div>
            
        </section>
    </main>
    <script src="vista/assets/js/jquery.min.js"></script>
    <script src="vista/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="vista/assets/js/theme.js"></script>
</body>

</html>