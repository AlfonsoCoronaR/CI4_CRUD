<br>
<div class="container">
    <div class="row justify-content-md-center justify-content-sm-center"> 
        <div class="col col-sm-8 col-md-6 col-lg-5 col-xl-4" id="login">
            <form method="POST" action="<?php echo base_url().'/crear' ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" pattern="[A-Za-z]+"  title="Solo letras de la A a la Z mayúsculas y minúsculas" class="form-control" required="">
                <br>
                <label for="paterno">Apellido paterno:</label>
                <input type="text" name="paterno" id="paterno" pattern="[A-Za-z]+"  title="Solo letras de la A a la Z mayúsculas y minúsculas" class="form-control" required="">
                <br>
                <label for="materno">Apellido materno:</label>
                <input type="text" name="materno" id="materno" pattern="[A-Za-z]+"  title="Solo letras de la A a la Z mayúsculas y minúsculas" class="form-control" required="">
                <br>
                <label for="privilegios">normal o admin</label>
                <input type="text" name="privilegios" id="privilegios" class="form-control" pattern="[A-Za-z]+" placeholder="'admin' con privilegios, 'normal' sin privilegios" required="">
                <br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" required="">
                <br>
                <div class="row justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xl-3">
                    <button class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </form>
        </div>    
    </div>    
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';
    if (mensaje == '1'){
    swal(':)','Agregado con éxito!','success');
    }else if(mensaje == '0'){
    swal(':(','Ha ocurrido un error','error');
    }else if(mensaje == '2'){
    swal(':D','Registro actualizado correctamente!','success');
    }else if(mensaje == '3'){
    swal(':(','Ha ocurrido un error','error');
    }else if(mensaje == '4'){
    swal(':D','Registro eliminado correctamente!','success');
    }else if(mensaje == '5'){
    swal(':(','Ha ocurrido un error','error');
    }
</script>





