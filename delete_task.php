<!-- como vamos a eliminar una tarea de la tabla task de la base de datos php_crud
    es necesarios incluir o importar la coneccion a la base de datos -->

<!-- HACEMOS LA CONECCION -->
<?php include("coneccion_db.php");
$id=0;
$query="";
if (isset($_GET['id']))
 {  // GUARDAMOS EL VALOR ID QUE VIENE DE LA PAGINA INDEX.PHP
    $id=$_GET['id'];
    // ARMAMOS LA CONSULTA QUE VA A ELIMINAR UNA FILA DE LA 
    // TABLA TASK CON EL ID DE PARAMETRO.
    $img_viejo = "SELECT * FROM noticias WHERE id_noticia = $id";
    $del = mysqli_query($conn,$img_viejo);
    
    if( mysqli_num_rows($del)==1){
        $row = mysqli_fetch_array($del);
        $img_eliminar = $row['img'];
        unlink("img_server/".$img_eliminar);

        $query= "DELETE FROM noticias WHERE id_noticia = $id";
        $res= mysqli_query($conn,$query);
        $query= "ALTER TABLE noticias AUTO";
    
        if($res){
            
            session_start();
            $_SESSION['mensaje']= "Noticia eliminada exitosamente";
            $_SESSION['tipo'] = "success";

            header("Location: crud.php");
        }
        else {
            die("Fallo la eliminacion de la fila");
        }

    }
    else{
        die("Algo esta mal con la fila para editar");
    } 
    
}

?>
