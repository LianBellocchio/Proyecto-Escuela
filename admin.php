<?php include("templeates/header.php");?> 



  <body class="admin">

    

    <div class="container formulario">
      <div class="d-flex justify-content-center">
        <div  class="col-5">
          <form method="post" action="validar.php" name="signup-form" class="border rounded formulario2">
          <div class="text-center">
          <img class="img-logo d-inline " src="logos/logo.png" alt="Logo">
          </div>
          <div class="d-flex justify-content-center">

          <h3 class="text-center d-inline ">Acceder</h3>
          </div>
          <div class="form-group">
            <label>Nombre de usuario</label>
            <input type="text" name="usuario" placeholder="Usuario" class="form-control" pattern="[a-zA-Z0-9]+" required />
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="contra" class="form-control" placeholder="Contraseña">
          </div>
          <button type="submit" action class="boton btn btn-primary" name="registro" value="register">Iniciar sesión</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>



