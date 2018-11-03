<?php
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");
if(isset($_POST['save'])){
    $id = '2';
    $cuenta = $_POST['cuenta'];
    $password = md5($_POST['password']);
    $cantidad = $_POST['cantidad'];
    $num_usu = '2';
    $intentos = '4';

    /*$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];


    $usuario = $_POST['usuario'];
    $img_usu = "0";
    $estado = "1";
    $id_tipo_usuario = "2";
    $id_cuenta = "3";
    $id_persona = "2";*/


    $stat1 = $db->prepare("insert into cuenta values(:id_cuenta, :nombre_cuenta, :pass_cuenta, :cant_tea, :num_usuarios, :intentos)");
    $stat1->bindParam(':id_cuenta', $id);
    $stat1->bindParam(':nombre_cuenta', $cuenta);
    $stat1->bindParam(':pass_cuenta', $password);
    $stat1->bindParam(':cant_tea', $cantidad);
    $stat1->bindParam(':num_usuarios', $num_usu);
    $stat1->bindParam(':intentos', $intentos);
    $stat1->execute();



    /*$stat2 = $db->prepare("insert into persona values( ?,?,?,?,?)");
    $stat2->bindParam(1, $id);
    $stat2->bindParam(2, $nombre);
    $stat2->bindParam(3, $apellido);
    $stat2->bindParam(4, $correo);
    $stat2->bindParam(5, $ciudad);
    $stat2->execute();


    $cuenta= $objData->prepare('SELECT id_cuenta FROM `cuenta` ');
    $cuenta->execute();
    $resultado_cuenta = $cuenta->fetchAll();
    $id_cuenta=$resultado_cuenta;
    
    $persona= $objData->prepare('SELECT id_persona FROM `persona` ');
    $persona->execute();
    $resultado_persona = $persona->fetchAll();
    $id_persona=$resultado_persona;

        $stmt = $db->prepare("SELECT id_cuenta FROM cuenta");
        $stmt->execute();
        $row = $stmt->fetch();
        $id_cuenta = $row['id_cuenta'];

        $stmt = $db->prepare("SELECT id_persona FROM persona");
        $stmt->execute();
        $row = $stmt->fetch();
        $id_cuenta = $row['id_cuenta'];


    $stat3 = $db->prepare("insert into usuario values(?,?,?,?,?,?,?,?)");
    $stat3->bindParam(1, $id);
    $stat3->bindParam(2, $usuario);
    $stat3->bindParam(3, $pin);
    $stat3->bindParam(4, $img_usu);
    $stat3->bindParam(5, $estado);
    $stat3->bindParam(6, $id_tipo_usuario);
    $stat3->bindParam(7, $id_cuenta);
    $stat3->bindParam(8, $id_persona);
    $stat3->execute();*/
    header('Location: ../../save.php');
}
?>


<!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Form Wizard with jQuery and PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    
    <div class="container-fluid">
        <p><br/></p>
        <h3>Data Manager</h3>
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
               // $stmt = $db->prepare("select a.id, a.name, a.email, a.phone, a.address, b.username, c.title, c.description, c.website, c.category from about a, account b, website c where a.id=b.id and a.id=c.id and b.id=c.id");
                //$stmt->execute();
                //while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php //echo $row['id'] ?></td>
                    <td><?php //echo $row['name'] ?></td>
                    <td><?php //echo $row['email'] ?></td>
                    <td><?php //echo $row['phone'] ?></td>
                    <td><?php //echo $row['address'] ?></td>
                    <td><?php //echo $row['username'] ?></td>
                    <td><?php //echo $row['title'] ?></td>
                    <td><?php //echo $row['description'] ?></td>
                    <td><?php //echo $row['website'] ?></td>
                    <td><?php //echo $row['category'] ?></td>
                </tr>
                 <?php
              // }
                ?>
            </tbody>
        </table>
        <p class="text-center">
            <br/>
            <a href="index.html" class="btn btn-primary">Back to homepage</a>
        </p>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>