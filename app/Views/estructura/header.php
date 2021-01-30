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
        #login{
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: white;
        }
        #save{
            width: auto;
            
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

    <div class="col-md-12 col-lg-12">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><?php echo(session("nombre"))?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url().'/tabla'?>">Inicio</a>
                        </li>
                        <?php if(session('type') == 'admin'):?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'/inicio'?>">Registrar usuario</a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'/salir'?>">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
