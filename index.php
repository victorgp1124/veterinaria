<?php 
    include("backend/conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM detalle_historia_clinica";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/admin/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="grid-container">

    <header class="header">
        <div class="avatar">
            <p>Dr Vicxi</p>
            <i class="bi bi-person-circle"></i>
        </div>
    </header>
    <nav class="navbar">
        <div class="top">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
            </svg><a href="#">Admin</a>
        </div>
        <div class="bootom">
            <button type="button" class="btn btn-primary" data-toggle="modal" id="button-addon2" data-target="#windowModal3">Crear Detalles</button>
        </div>
    </nav>
    <div class="main">
        <div class="tables">
    <table class="table table-responsive" >
        <thead class="table-success table-striped" >
            <tr>
                <th>id</th>
                <th>Temperatura</th>
                <th>Peso</th>
                <th>Frec_cardiaca</th>
                <th>Frec_respiratoria</th>
                <th>Fecha y hora</th>
                <th>Alimentacion</th>
                <th>Habitad</th>
                <th>Observacion</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th><?php  echo $row['id']?></th>
                        <th><?php  echo $row['temperatura']?></th>
                        <th><?php  echo $row['peso']?></th>
                        <th><?php  echo $row['frecuencia_cardiaca']?></th>
                        <th><?php  echo $row['frecuencia_respiratoria']?></th>  
                        <th><?php  echo $row['fecha_hora']?></th>  
                        <th><?php  echo $row['alimentacion']?></th>  
                        <th><?php  echo $row['habitad']?></th>  
                        <th><?php  echo $row['observacion']?></th>    
                        <th><a href="vistas/admin/update.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                        <th><a href="backend/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                    </tr>
                <?php 
                    }
                ?>
        </tbody>
    </table>
    </div>
    </div>

    <div class="modal fade" id="windowModal3" tabindex="-1" role="dialog" aria-labelledby="titleWindow" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="backend/create.php" method="POST">
                    <div class="modal-header">
                        <h5 class="titleWindow">Crear Detalles de historia Clinica</h5>
                        <button class="close" data-dismiss="modal" arial-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="update2">                    
                                <label for="historia clinica">detalles de la historia clinica</label>
                                <input type="text" class="form-control" name="temperatura" placeholder="temperatura de la mascota" require>
                                <input type="text" class="form-control" name="peso" placeholder="peso de la mascota">
                                <input type="text" class="form-control" name="frecuencia_cardiaca" placeholder="frecuencia cardiaca">
                                <input type="text" class="form-control" name="frecuencia_respiratoria" placeholder="frecuencia respiratoria">
                                <input type="text" class="form-control" name="alimentacion" placeholder="alimentacion">
                                <input type="text" class="form-control" name="habitad" placeholder="habitad">
                                <input type="text" class="form-control" name="observacion" placeholder="observacion">   
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" ></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>