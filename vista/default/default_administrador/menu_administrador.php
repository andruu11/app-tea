
<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Bienvenido</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
            </button>
        </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <!--BOTON DE CAMPANA-->
        <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger"><!--parece notificación de mensaje 9+--></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
        <!--BOTON DE MENSAJE-->
        <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger"><!--parece notificación de perfil 7--></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="">Action</a>
            <a class="dropdown-item" href="">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="">Something else here</a>
        </div>
        </li>
        <!--BOTON DE PERFIL-->
        <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <!--no tiene notificación-->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Mi Perfil</a>
            <a class="dropdown-item" href="#">Usuarios</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar sesión</a>
        </div>
        </li>
    </ul>

    </nav>

    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>INICIO</span>
        </a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Repositorio</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Explorar</h6>
            <a class="dropdown-item" href="login.html">Academicos</a>
            <a class="dropdown-item" href="register.html">Didacticos</a>
            <a class="dropdown-item" href="forgot-password.html">Activos</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Mis repositorios</h6>
            <a class="dropdown-item" href="404.html">Ver</a>
            <a class="dropdown-item" href="blank.html">Nuevo</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Reportes</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Extra</span></a>
        </li>
    </ul>

        <div id="content-wrapper">

            <div class="container-fluid">


                <!-- Page Content -->
                <h1>Ventana Principal ADMIN/ INICIO</h1>
                <hr>
                <p>INICIO, NOTICIAS ETC</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Username</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Website</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
                        $stmt = $db->prepare("select a.nombres, a.apellidos, a.correos, b.usuario, b.pin, c.nombre_cuenta, from persona a, usuario b, cuenta c where c.id_cuenta=b.id_cuenta and a.id_persona=b.id_persona");
                        $stmt->execute();
                        while($row = $stmt->fetch()){
                        ?>
                        <tr>
                            <td><?php echo $row['nombres'] ?></td>
                            <td><?php echo $row['apellidos'] ?></td>
                            <td><?php echo $row['correos'] ?></td>
                            <td><?php echo $row['usuario'] ?></td>
                            <td><?php echo $row['pin'] ?></td>
                            <td><?php echo $row['nombre_cuenta'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                <span>Contactos: nuestros correos etc </span>
                </div>
            </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
       
    

    

    