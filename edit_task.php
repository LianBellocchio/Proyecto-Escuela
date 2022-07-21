 <!-- head  -->
 <?php include("templeates/header.php");
 include ("coneccion_db.php");
//  ACA LEEMOS DE LA TABLA TASK LOS VALORES QUE SE DEBEN MODIFICAR
// PREGUNTAMOS LPOR LA EXISTENCIA DEL ID QUE SE QUIERE EDITAR

if (isset($_GET['id'])){
   
    $id = $_GET['id'];
   
    // armamos la consulta a la base de datos
    $query = "SELECT * FROM noticias WHERE id_noticia = $id";
    $res = mysqli_query($conn, $query);
    
    if( mysqli_num_rows($res)==1){
        $row = mysqli_fetch_array($res);
        $titulo = $row['titulo'];
        $descripcion= $row['contenido'];
        $imagen=$row['img'];
    
    }
    else{
        die("Algo esta mal con la fila para editar");
    }
    
}

// ACA leemos los datos actualizados para actualizar en la base de datos

    if (isset($_POST['update'])){
    // Armar la consulta para actualizar los datos
    $id = $_GET['id'];
    $update_title = $_POST['titulo'];
    $update_descripcion = $_POST['descripcion'];
    $query = "UPDATE noticias SET titulo = '$update_title', contenido = '$update_descripcion' WHERE id_noticia = $id";
    $res = mysqli_query($conn, $query);
    // Alterar las variables de session

    session_start();

    $_SESSION['mensaje']= "Noticia editada exitosamente";
    $_SESSION['tipo'] = "success";

    
    header("Location: crud.php");
    }

    ?>

<title>Edit Task</title>
<!-- HEADER -->

<!-- CREAMOS EL FORMULARIO QUE VA A TENER LOS DATOS QUE SE DEBEN ACTUALIZAR -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit_task.php?id=<?php echo $_GET['id']?>" method="POST">
                        <div class="form-group mb-4">
                            <input type="text" name="titulo" value="<?php echo $titulo ?>" 
                            class="form-control" placeholder="Update Title">
                        </div>
                       
                        <div class="form-group mb-4">
                            <textarea name="descripcion" rows="2" class="form-control" 
                            placeholder="Update Description"> <?php echo $descripcion?> </textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" name="update" >Update Task</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- FOOTER -->
<?php include("templeates/footer.php");?>

