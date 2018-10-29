
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
                            <form name       ="user" action="modelo/session_init.php" method="post">
                                <p>//Aqui va la cuenta</p>
                                <label class="labels">Usuario :</label>
                                <br />
                                <input type      ="text" name="usuario" id="usuario" class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Usuario" autocomplete="off" required autofocus/>
                                <br />
                                <label class="labels">Contraseña :</label>
                                <br />
                                <input type      ="password" name="password" id="password"  class="form-control" minlength="3" maxlength="10" placeholder="Ingrese su Contraseña" autocomplete="off" required/>
                                <br />
                                <?php
                                    $cont[0]=3;
                                ?>
                                <input onclick="func()" 
                                    <?php
                                        #if ($cont[2]==1){
                                        #    echo 'disabled';
                                        #}else{
                                         #   echo 'enabled';
                                        #}
                                    ?>
                                type="submit" name="enter" id="enter" value="Iniciar Sesion" class="btn btn-signin btn-block btn-info" />
                                    <!--<script>
                                        function func(){
                                            <?php
                                            if($cont[0]==3){
                                                $cont[1]=2;
                                            }elseif ($cont[1]==2) {
                                                $cont[2]=1;
                                            }
                                            

                                            ?>
                                    </script>-->
                                <br>
                                <div class="separator">
                                    <p class="change_link" id="log">Nuev@?
                                     <a href="login2.php" class="to_register">Regístrate</a>
                                    </p>
                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </body>
</html>  