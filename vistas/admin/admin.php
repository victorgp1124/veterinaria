<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
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
            </svg><a href="/veterinariaa/vistas/index.php">Admin</a>
        </div>
        <div class="bootom">
            <button type="button" class="btn btn-primary" data-toggle="modal" id="button-addon2" data-target="#windowModal3">Crear Detalles</button>
        </div>
        <!--<div class="out">
            <a class="link" href="Eliminar">Cerrar Sesion</a> 
        </div>-->
    </nav>
    <div class="main">
        <div class="pet-container">
            <div class="pet">
                <div class="name">
                    <label for="">Nombre</label>
                    <p>Kira</p>
                </div>
                <div class="id">
                    <label for="">Id</label>
                    <p>54</p>
                </div>
                <div class="date">
                    <label for="">Fecha de creacion</label>
                    <p>20/04/1995</p>
                </div>
            </div>
            <div class="bo">
                <button type="button" class="btn btn-secondary" data-toggle="modal" id="button-addon2" data-target="#windowModal">ver detalles</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" id="button-addon2" data-target="#windowModal2">Modificar</button>
                <button type="button" class="btn btn-danger">eliminar</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="windowModal" tabindex="-1" role="dialog" aria-labelledby="titleWindow" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titleWindow">Historial Clinico</h5>
                    <button class="close" data-dismiss="modal" arial-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="pet-detail">
                        <ul>
                            <li>Historia clinica
                                <ul>
                                    <li>id mascota</li>
                                    <li>fecha de creacion</li>
                                </ul>
                            </li>
                            <li>Mascota
                                <ul>
                                    <li>nombre</li>
                                    <li>raza</li>
                                    <li>id de usuario</li>
                                    <li>sexo</li>
                                </ul>
                            </li>
                            <li>Usuario
                                <ul>
                                    <li>nombre</li>
                                    <li>apellido</li>
                                    <li>tipo de documento</li>
                                    <li>documento</li>
                                    <li>estado</li>
                                    <li>sexo</li>
                                </ul>
                            </li>
                          </ul>
            
                    </div>
                    <div class="pet-detail2">
                        <ul>
                            <li>Detalle de Historia clinica
                                <ul>
                                    <li>temperatura</li>
                                    <li>peso</li>
                                    <li>frecuencia cardiaca</li>
                                    <li>frecuencia respiratoria</li>
                                    <li>fecha hora</li>
                                    <li>alimentacion</li>
                                    <li>habitad</li>
                                    <li>observacion</li>
                                    <li>id del colaborador</li>
                                    <li>id de la historia clinica</li>
                                </ul>
                            </li>
                            <li>colaborador
                                <ul>
                                    <li>nombre</li>
                                    <li>apellido</li>
                                    <li>cargo</li>
                                    <li>especialidad</li>
                                    <li>tipo de documento</li>
                                    <li>documento</li>
                                </ul>
                            </li>
                          </ul>
            
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="windowModal2" tabindex="-1" role="dialog" aria-labelledby="titleWindow" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="titleWindow">Modificar Detalles de Historia</h5>
                        <button class="close" data-dismiss="modal" arial-label="Cerrar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="update">
                                <label for="historia clinica">detalles de la historia clinica</label>
                                <input type="text" class="form-control" id="temperatura" placeholder="temperatura de la mascota">
                                <input type="text" class="form-control" id="peso" placeholder="peso de la mascota">
                                <input type="text" class="form-control" id="frecuencia-cardiaca" placeholder="frecuencia cardiaca">
                                <input type="text" class="form-control" id="frecuencia-respiratoria" placeholder="frecuencia respiratoria">
                                <input type="text" class="form-control" id="fecha-hora" placeholder="fecha y hora">
                                <input type="text" class="form-control" id="alimentacion" placeholder="alimentacion">
                                <input type="text" class="form-control" id="habitad" placeholder="habitad">
                                <input type="text" class="form-control" id="observacion" placeholder="observacion">
                                <input type="text" class="form-control" id="id-colaborador" placeholder="id del colaborador">
                                <input type="text" class="form-control" id="id-historia-clinica" placeholder="id de la historia clinica">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">
                            Modificar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="windowModal3" tabindex="-1" role="dialog" aria-labelledby="titleWindow" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="">
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
                                <input type="text" class="form-control" id="temperatura" placeholder="temperatura de la mascota">
                                <input type="text" class="form-control" id="peso" placeholder="peso de la mascota">
                                <input type="text" class="form-control" id="frecuencia-cardiaca" placeholder="frecuencia cardiaca">
                                <input type="text" class="form-control" id="frecuencia-respiratoria" placeholder="frecuencia respiratoria">
                                <input type="text" class="form-control" id="fecha-hora" placeholder="fecha y hora">
                                <input type="text" class="form-control" id="alimentacion" placeholder="alimentacion">
                                <input type="text" class="form-control" id="habitad" placeholder="habitad">
                                <input type="text" class="form-control" id="observacion" placeholder="observacion">
                                <input type="text" class="form-control" id="id-colaborador" placeholder="id del colaborador">
                                <input type="text" class="form-control" id="id-historia-clinica" placeholder="id de la historia clinica">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">
                            Crear
                        </button>
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