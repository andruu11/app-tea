<?php
if(isset($_SERVER['HTTP_REFERER'])){
class Database extends PDO{
    
    public function __construct() {
        try{
            parent::__construct('mysql:host=localhost;dbname=db_app','root','');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $ex) {
            echo $ex . '<br>';
            die('Error al conectar a la base de datos.');
        }
    }
}
}else{
	header('Location: ../error.php');
}
?>