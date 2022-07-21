<?php
 if(isset($_POST['registro'])){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contra'];
    session_start();
    if($usuario=="admin" && $contraseña=="1"){
    
        $_SESSION['mensajito']="Bienvenido:";
        $_SESSION['tipo_msn']="success";
        $_SESSION['estado'] =true;
        header("location:crud.php");
        
    
    }
    
 else{  
    $_SESSION['mensajito']="El Usuario es Incorrecto ";
    $_SESSION['tipo_msn']="danger";
    $_SESSION['estado'] =false;
     header("location:admin.php");

    
 }
}
?>