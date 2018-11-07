<?php
require 'databaseproy.php';
$objData = new databaseProyecto();
$tabla = " ";
$usuario= $objData->prepare('SELECT * FROM `usuario` INNER JOIN persona ON usuario.id_persona = persona.id_persona INNER JOIN tipo_usuario ON tipo_usuario.id_tipo_usuario = usuario.id_tipo_usuario INNER JOIN ciudad ON ciudad.id_ciudad = persona.id_ciudad INNER JOIN cuenta ON cuenta.id_cuenta = usuario.id_cuenta WHERE usuario = "tefa"');
$usuario->execute();
$resultado_usuario = $usuario->fetchAll();
foreach ($resultado_usuario as $key => $valor_usuario) {

 //$editar = '<button type=\"button\" class=\"btn btn-warning\" data-toggle=\"modal\" title=\"Editar\" data-target=\"#Modal_Editar_Usuario\" data-id_usuario=\"'.$valor_usuario['id_usuario'].'\" data-usuario=\"'.$valor_usuario['usuario'].'\" data-password=\"'.$valor_usuario['password'].'\" data-ci=\"'.$valor_usuario['ci'].'\" data-id_privilegio=\"'.$valor_usuario['id_privilegio'].'\" data-nombre=\"'.$valor_usuario['nombre'].'\" data-ap_paterno=\"'.$valor_usuario['ap_paterno'].'\" data-ap_materno=\"'.$valor_usuario['ap_materno'].'\"><i class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></i></button>' ; 
 
 
// $eliminar = '<button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" title=\"Baja\" data-target=\"#Modal_Eliminar_Usuario\" data-id_usuario=\"'.$valor_usuario['id_usuario'].'\" data-usuario=\"'.$valor_usuario['usuario'].'\" data-ci=\"'.$valor_usuario['ci'].'\"><i class=\"glyphicon glyphicon-remove \" aria-hidden=\"true\"></i></button>' ; 

 //$activar = '<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" title=\"Activar\" data-target=\"#Modal_Activar_Usuario\" data-id_usuario=\"'.$valor_usuario['id_usuario'].'\" data-usuario=\"'.$valor_usuario['usuario'].'\" data-ci=\"'.$valor_usuario['ci'].'\"><i class=\"glyphicon glyphicon-check \" aria-hidden=\"true\"></i></button>' ; 
     echo $valor_usuario['nombres'];

	/*$tabla.='{
                  
				  "datos":"'.utf8_encode($valor_usuario['nombres']." ".$valor_usuario['apellidos']).'",
                  "usuario":"'.$valor_usuario['usuario'].'",
                  "correos":"'.$valor_usuario['correos'].'",
                  "tipo_usuario":"'.utf8_encode($valor_usuario['des_tipo_usuario']).'",
                  "cuenta":"'.utf8_encode($valor_usuario['nombre_cuenta']).'",
                  "ciudad":"'.utf8_encode($valor_usuario['des_ciudad']).'",
				  "estado":"'.utf8_encode($valor_usuario['estado']).'",
			},';	*/
}
	//eliminamos la coma que sobra
	//$tabla = substr($tabla,0, strlen($tabla) - 1);
	//echo '{"data":['.$tabla.']}';	


?>

