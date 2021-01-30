<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">  
    <style>
        body{
            background-color: lightgray;
        }
        #inicio{
            padding-top: 50px;
            background-color: white;
            padding-bottom: 50px;

        }
    </style>
    <title>Sistema</title>
  </head>
  
  <body>
  <br>
    <div class="container">
        <div class="row justify-content-md-center justify-content-sm-center">
                <div class="col col-sm-8 col-md-6 col-lg-5 col-xl-4 shadow" id="inicio" >
                    <h1>Login</h1>
                    <form action="<?php echo base_url().'/validar'?>" method="POST">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="Nombre" class="form-control" required="">
                        <br>
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" required="">
                        <br>
                        <div class="row justify-content-md-center justify-content-sm-center">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
                            <button class="btn btn-outline-dark">Acceder</button>
                          </div>
                        </div>
                        <a href="<?php echo base_url().'/nuevo'?>" >Registrarse</a>
                    </form>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>