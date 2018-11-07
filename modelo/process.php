<?php

$username=$_POST ['usuario'];
$password=$_POST ['password'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

mysql_connect("localhost","root","");

mysql_select_db("bd_tea");
$result=mysql_query("select * from cuenta where nombre_cuenta='$username' AND pass_cuenta='$password'")
or die ("no se pudo conectar a la base de datos". mysql_error());
$row=mysql_fetch_array($result);
if($row['nombre_cuenta'] == $username && $row['pass_cuenta'] == $password){
    $nombre_cuenta=$row['nombre_cuenta'];
    ?>
    <form name="user" action="../../../../app-tea/login2.php" method="post">
    <input type="hidden" value="<?php echo $nombre_cuenta; ?>" readonly name="nombre_cuenta" id="nombre_cuenta"/>
    </form>
<?php
    header('Location:../../../../app-tea/login2.php');
    
}
else {
    echo 'falloo!';
}
?>