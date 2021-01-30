<div class="container">  
<br>
    <div class="row">
        <div class="col-sm-12">
            <div class="table table-responsive">
                <table class="table table-dark table-bordered shadow">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    <?php if(session('type') == 'admin'):?>
                    <?php foreach($datos as $key):?>
                        <tr>
                        <td><?php echo $key->Nombre ?></td>
                        <td><?php echo $key->Ap_paterno ?></td>
                        <td><?php echo $key->Ap_materno ?></td>
                        <td><a href="<?php echo base_url().'/obtenerDatos/'.$key->Nombre ?>" class="btn btn-warning btn-sm">Editar</a></td>
                        <td><a href="<?php echo base_url().'/eliminar/'.$key->Nombre ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                        </tr>
                    <?php endforeach;?>
                    <?php endif;?>
                    <?php foreach($datos as $key):?>
                        <?php if(session('type') == 'normal'):?>
                        <tr>
                        <td><?php echo $key->Nombre ?></td>
                        <td><?php echo $key->Ap_paterno ?></td>
                        <td><?php echo $key->Ap_materno ?></td>   
                        <td>
                        <?php if(session("nombre") == $key->Nombre ):?>
                        <a href="<?php echo base_url().'/obtenerDatos/'.$key->Nombre ?>" class="btn btn-warning btn-sm">Editar</a>
                        <?php endif;?>
                        </td>
                        <td>
                        <?php if(session("nombre") == $key->Nombre ):?>
                        <a href="<?php echo base_url().'/eliminar/'.$key->Nombre ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                        <?php endif;?>
                        </tr>
                        </td>
                        <?php endif;?>
                    <?php endforeach;?>
                </table>
            </div>
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