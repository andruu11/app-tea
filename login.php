<!DOCTYPE html>
<html langs="es">
    <head>
        <meta charset    ="UTF-8">
        <meta http-equiv ="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv ="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>FATA</title>
        <link rel        ="stylesheet" href="vista/assets/css/bootstrap.css">
        <link rel        ="stylesheet" href="vista/assets/css/login.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <script src      ="vista/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 celeste">
                        <div class="contenido-celeste">
                    </div>
                    </div>
                    <div class="col-md-6 amarillo">
                        <a href="index.php" class="to_register">Volver</a>
                        <div class       ="card card card-container">
                             <img id          ="profile-img" class="profile-img-card" class="img-responsive" src="vista/assets/img/cop.png" />
                            <p id ="profile-name" class="profile-name-card"></p>
                            <form name       ="user" action="login2.php" method="post">
                                <label class="labels">Cuenta :</label>
                                <br />
                                <input type      ="text" name="cuenta" class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Cuenta" autocomplete="off" required autofocus/>
                                <br />
                                <label class="labels">Contraseña :</label>
                                <br />
                                <input type      ="password" name="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Contraseña" autocomplete="off" required/>
                                <br />
                                <?php
                                $cont=3;
                                    /*$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                                    $stmt = $db->prepare("select intentos from cuenta where nombre_cuenta=:nc ");
                                    $stmt->execute(['nc' => $correos]);
                                    $recuperar = $stmt->fetch();
                                    $id2 = $recuperar['id_persona'];*/
                                ?>
                                <input 
                                    <?php
                                        if ($cont==0){
                                            echo 'disabled';
                                        }else{
                                            echo 'enabled';
                                        }
                                    ?>
                                type="submit" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" />
                                    
                                <br>
                                <div class="separator">
                                    <p class="change_link" id="log">Nuev@?
                                        <a href="registro.php" class="to_register">Regístrate</a>
                                     
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </body>
</html>  