 <!-- save task -->
 
 <?php include("coneccion_db.php");

 if(isset($_POST['enviar']))
    {
     $nombre_noticia = $_POST['titulo'];
     $img_noticia = $_FILES['img']['name'].time();
     $img_tipo= $_FILES['img']['type'];
     $img_tamaño= $_FILES['img']['size'];

     if($img_tamaño<=3000000){
       if($img_tipo=="image/jpeg" || $img_tipo=="image/jpg" || $img_tipo=="image/png" || $img_tipo=="image/gif" ){
    //  ruta img servidor
    $carp_destino = 'img_server/'; 
      // mueve la imagen al directorio escogido 
     move_uploaded_file ($_FILES['img']['tmp_name'],$carp_destino.$img_noticia);
     $descripcion_noticia = $_POST['descripcion'];

      }

    }else{
     
        
    }
     if ( !$nombre_noticia || !$descripcion_noticia || !$img_noticia ){

        session_start();

        $_SESSION['mensaje'] = 'Complete todos los campos para subir una noticia';
        $_SESSION['tipo'] = 'danger';
          
        header("Location: crud.php");

        }
        else {
            $consulta_a_la_base="INSERT INTO noticias(titulo,img, contenido) VALUES ('$nombre_noticia','$img_noticia','$descripcion_noticia')";
            $resultado = mysqli_query($conn, $consulta_a_la_base);

            session_start();

            $_SESSION['mensaje'] = 'Noticia subida con éxito';
            $_SESSION['tipo'] = 'success';

            header("Location: crud.php");
        }




      }
  
    


 
 
 
 ?>

 
