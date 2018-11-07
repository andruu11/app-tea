<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - FATA</title>
    <link rel="stylesheet" href="vista/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="vista/assets/fonts/simple-line-icons.min.css"/>

    <link href="vista/assets/reg/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="vista/assets/reg/style.css" rel="stylesheet"/>
</head>
<body>
            
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registrate</h2>
                    <p>Por favor llena tus datos en los siguentes campos para registrar tu cuenta.</p>
                </div>
                
                    <form action="save.php" method="post">
                        <div class="wizards">
                            <div class="progressbar">
                                <div class="progress-line" data-now-value="12.11" data-number-of-steps="5" style="width: 12.11%;"></div> <!-- 19.66% -->
                            </div>

                            <!--Header-->
                            <div class="form-wizard active">
                                <div class="wizard-icon"><i class="fa fa-users"></i></div>
                                <p>Cuenta</p>
                            </div>
                            <div class="form-wizard">
                                <div class="wizard-icon"><i class="fa fa-pencil"></i></div>
                                <p>Datos</p>
                            </div>
                            <div class="form-wizard">
                                <div class="wizard-icon"><i class="fa fa-user"></i></div>
                                <p>Usuario</p>
                            </div>
                            <div class="form-wizard">
                                <div class="wizard-icon"><i class="fa fa-file-text-o"></i></div>
                                <p>Licencia</p>
                            </div>
                            <div class="form-wizard">
                                <div class="wizard-icon"><i class="fa fa-check"></i></div>
                                <p>Final</p>
                            </div>
                        </div>

                        <!--1 cuenta LISTO-->
                        <fieldset>
                            <h4>Ingrese un nombre y password para su cuenta familiar.</h4>
                            <div class="form-group">
                                <label>Nombre de la cuenta:</label>
                                <input type="text" name="cuenta" class="form-control" placeholder="Ej.: Familia Perez"/>
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Ingrese un password"/>
                            </div>
                            <div class="wizard-buttons">
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <!--2 datos personales-->
                        <fieldset>
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

                            <!--borrar telefono y direccion-->
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

                            <!--preguntas-->
                            <div class="form-group">
                                <p>Por favor responda la siguiente pregunta para propositos academicos:</p>
                                <a>Cuantos miembros de su familia tienen TEA?</a>
                                <input type="number" name="cantidad" class="form-control" placeholder="cantidad"/>
                            </div>

                            <div class="wizard-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <!--3 usuario-->
                        <fieldset>
                            <h4>Cree un usuario</h4>  
                                <div class="form-group">
                                    <label>Nombre de usuario:</label>
                                    <input type="text" name="usuario" class="form-control" placeholder="Nickname"/>
                                </div>
                                <div class="form-group">
                                    <label>Pin:</label>
                                    <input type="password" name="pin" class="form-control" placeholder="Ingrese un pin de 4 digitos."/>
                                </div>
                            <div class="wizard-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <!--4 licencia-->
                        <fieldset>   
                            <iframe src="vista/assets/reg/license.txt"></iframe>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="yes"> Acepto los Terminos y Condiciones.
                            </label>
                            <div class="wizard-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>

                        <!--5 final-->
                        <fieldset>
                            <div class="jumbotron text-center">
                            <h1>Revisa que tus datos sean correctos antes de guardarlos, y no olvides el PASSWORD de tu cuenta ni tu PIN de usuario.</h1>
                            </div>
                            <div class="wizard-buttons">
                                <button type="button" class="btn btn-previous">Anterior</button>
                                <button type="submit" name="save" class="btn btn-primary btn-submit">Guardar</button>
                            </div>
                        </fieldset>

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