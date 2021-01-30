<?php 
  $idNombre = $datos[0]['id_nombre'];
  $nombre = $datos[0]['Nombre'];
  $paterno = $datos[0]['Ap_paterno'];
  $materno = $datos[0]['Ap_materno'];
?>

<div class="container">
  <div class="row justify-content-md-center justify-content-sm-center"> 
      <div class="col col-sm-8 col-md-6 col-lg-5 col-xl-4" id="login">
          <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
              <input type="text" name="idNombre" id="idNombre" hidden="" value="<?php echo $idNombre?>">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control" pattern="[A-Za-z]+"  title="Solo letras de la A a la Z mayúsculas y minúsculas" value="<?php echo $nombre?>">
              <br>
              <label for="paterno">Apellido paterno:</label>
              <input type="text" name="paterno" id="paterno" class="form-control" pattern="[A-Za-z]+"  title="Solo letras de la A a la Z mayúsculas y minúsculas" value="<?php echo $paterno?>">
              <br>
              <label for="materno">Apellido materno:</label>
              <input type="text" name="materno" id="materno" class="form-control" pattern="[A-Za-z]+"  title="Solo letras de la A a la Z mayúsculas y minúsculas" value="<?php echo $materno?>">
              <br>
              <div class="row justify-content-md-center justify-content-sm-center">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xl-3">
              <button class="btn btn-primary" id="save">Guardar</button>
              </div>
              </div>
          </form>
      </div>    
  </div>
</div>    