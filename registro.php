<!-- page content -->
        <div class="right_col" role="main" style="padding-left: 500px">
          <div class="">
            <div class="page-title">
              <div class="title_left">
            <div class="row" >
              <div class="col-md-12 col-sm-10 col-xs-10">
                <div class="x_panel">
                        <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Paso 1<br />
                                              <small>Registro de la cuenta</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Paso 2<br />
                                              <small>Registro del usuario</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Paso 3<br />
                                              <small>Datos familiares</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Paso 4<br />
                                              <small>Gracias por venirs, vuelvas prontos :v </small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                            <h1 class="StepTitle" style="text-align: center;">Cuenta</h1>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre de la cuenta: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>


                          <!--<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Conraseña de la cuenta: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Verifica tu contraseña</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                          </div>-->
                          <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Conraseña de la cuenta:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Verifica tu contraseña:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>


                          <!--<div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="female"> Female
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>-->
                        <input type="button" name="registrar" value="registrar">
                        </form>

                      </div>
                      <div id="step-2">
                        <form class="form-horizontal form-label-left">
                        <h1 class="StepTitle" style="text-align: center;">Usuario</h1>
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombres: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo electronico: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="email" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Seleciona tu ciudad de origen</label>
                        <div class="col-md-6 col-sm-6 col-xs-8">
                          <select class="select2_single form-control" tabindex="-1">
                            <option></option>
                            <option value="AK">La Paz</option>
                            <option value="HI">Cbba.</option>
                            <option value="CA">Santa Cruz</option>
                            <option value="NV">Potosi</option>
                            <option value="OR">Sucre</option>
                            <option value="WA">Oruro</option>
                            <option value="AZ">Tarija</option>
                            <option value="CO">Pando</option>
                            <option value="ID">Beni</option>
                            <option value="MT">El Alto</option>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre del usuario: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>

                          <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Pin del usuario:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Verifica tu Pin:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>

                          
                      </div>
                      <div id="step-3">
                        <form class="form-horizontal form-label-left">
                        <h1 class="StepTitle" style="text-align: center;">Datos del familiar</h1>


                        <h4>Gracias por su registro, estos datos seran utilizados con motivos academicos para el bien de la comunidad de personas con TEA en Bolivia.
                        Muchas gracias por su colaboracion!</h4>
                        
                        
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Cuantas personas con TEA existen en su familia: <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="number" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                       
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle" style="text-align: center;">Gracias por su registro!</h2>
                        
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->

                    <!-- Bootstrap -->
    <link href="vista/assets/reg/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vista/assets/reg/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vista/assets/reg/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="vista/assets/reg/custom.min.css" rel="stylesheet">

                     <!-- jQuery -->
    <script src="vista/assets/reg/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vista/assets/reg/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vista/assets/reg/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vista/assets/reg/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="vista/assets/reg/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="vista/assets/reg/custom.min.js"></script>

    <script src="vista/assets/reg/validator.js"></script>