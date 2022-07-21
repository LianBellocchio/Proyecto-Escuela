<?php include("templeates/header.php")?>
<?php include("coneccion_db.php")?>
<?php include("validar.php") ?>
<!--------------------------------- CRUD --------------------------------------->

<?php
  session_start();
  if($_SESSION['estado']) {
?>
  <div class= "container py-5"> 
 
  <div class= "row">
    <!-- FORMULARIO -->
    <div class="col-md-4">

    <?php 

      if (isset($_SESSION['mensaje'])) {
        echo "<div class='alert alert-".$_SESSION['tipo']." alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>".$_SESSION['mensaje']."</div>";
      }
      unset($_SESSION['mensaje']);
        
      ?>

    <div class="card card-body">

      <form action ="save_task.php" method= "post" enctype="multipart/form-data">
        <!-- FORM-GROUP PARA CADA INPUT -->
        <div class ="form-group mb-2">
        <input type ="text" name="titulo" class ="form-control" placeholder ="Ingrese un titulo de la noticia" max-lenght="66">
        </div>
        <div class= "form-group mb-2 form-control" >
        
       <label for="imagen">subir imagen</label>
      <input type="file" name ="img" size="20">
   
      </div>
        <div class= "form-group mb-2">
        <textarea type= "text" name ="descripcion" class= "form-control" placeholder ="ingrese un contenido" col= "5"></textarea>
        </div>
        
        <!-- BOTÓN -->
        <div class= "d-grid gap-2">
          <button class= "btn btn-success" name= "enviar"> Cargar </button>
        </div>

        </form>
      </div>
<!--- TABLA NOTICIAS --->

</div>
  <div class="col-md-8 contenedor_tabla">
    <table class="table table-dark table-striped">
    <thead>
      <tr>
        
      
        <th scope="col">Título</th>
        <th scope="col">Imagen</th>
        <th scope="col">Contenido</th>
        
        <th scope="col">Fecha</th>
        <th scope="col">Modificar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query= "SELECT * FROM  noticias";
      $table_task = mysqli_query($conn, $query);
          while ( $row = mysqli_fetch_array($table_task)){?>

      <tr class="over-form">
          
      
        <td class="prueba_1"><?php echo $row['titulo'] ?></td>
        <td><?php echo $row['img'] ?></td>
        <td class="prueba_1"><?php echo $row['contenido'] ?> </td>
        <td><?php echo $row['fecha'] ?> </td>
        
        <td>
        <!--- ACCIÓN ---->
        <a href="edit_task.php?id=<?php echo $row['id_noticia']?>"class="btn btn-warning"><i class= "fas fa-marker"></i></a>
        <a href="delete_task.php?id=<?php echo $row['id_noticia']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> </a>
      
        </td>
      
      </tr>
      
      <?php }?>
    </tbody>
  </table>

</div>
  <div>
      <a class="mt-2 btn btn-primary" href="cerrar_session.php">cerrar sesion</a>
  </div>
<?php include("templeates/footer.php");
  
}
else {
  header ("Location: admin.php");
}
?>