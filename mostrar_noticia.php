<?php include("coneccion_db.php"); ?>
<?php include("templeates/header.php"); ?>
<div>
    <img class="img-pag" src="imagenes/noticias.jpg" alt="noticias.jpg"> 
    <h1 class="align-middle tit-pag caja-titulo">Noticias</div>
</div>
<!-- ABRO EL PHP PARA MOSTRAR LA NOTICIA DE LA BASE DE DATOS-->
<?php
$id=0;
$query="";
if (isset($_GET['id']))
 {  
    $id_noticia=$_GET['id'];
    $consulta = "SELECT * FROM noticias WHERE id_noticia = '$id_noticia'";
    $resultado = mysqli_query($conn,$consulta);
    
    if( mysqli_num_rows($resultado)==1)
    {
        $row = mysqli_fetch_array($resultado);?>

        <section class="my-3" id="features">
            <div class="px-5 my-4">
                <div class="row gx-5">
                    <div class="col-lg-12 mb-5 mb-lg-0 pb-4"><h2 class="fw-bolder mb-0  text-center text-break"><?php echo $row['titulo'];?></h2></div>
                        <div class="col-lg-12">
                            <img class="img-noticia" src="img_server/<?php echo $row['img']?>" alt="imagennoticia.jpg" />
                            </div>
                            <div class="barra-sp bg-dark"></div>
                            <h5 class="text-break"><?php echo $row['contenido']; ?></h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
       
    }
    else
    {
        die("Algo esta mal con la noticia");
    }
}
else{
    echo ('No hay una noticia para mostrar');
}
?>
<?php include("templeates/footer.php");?>