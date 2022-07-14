<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="titulo">Veterinaria Vicxi</h1>
    </header>
    <section>
        <form action="">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Consultar Historial Clinico de mi Mascota ingrese ID" aria-lable="Consultar Historial Clinico de mi Mascota" id="history">
            <button class="btn btn-success" type="button" data-toggle="modal" id="button-addon2" data-target="#windowModal">Button</button>
            </div>    
        </form>
    </section>
    <section class="veterinary">
        <label for="veterinary-login">Soy veterinario</label>
        <a href="/veterinariaa/vistas/admin/admin.php">sign in</a>
    </section>

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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>