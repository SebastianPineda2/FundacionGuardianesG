
<?php

include("php\connection.php");
$con = connection();
$sql = "SELECT * FROM agendacitas";

$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Img/favicon.png" type="imagen/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Citas | Fundacion Guardianes Gatunos</title>
    <!-- BOOSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS Local -->
    <link rel="stylesheet" href="css/iniciostyle.css">
</head>
<body>

    <div class="navbar-dark bg-primary fixed-top">
        <!-- navbar-expand-md navbar-dark bg-primary -->
        <nav class="navbar navbar-expand-md navbar-dark bg-primary container">
            <!-- podemos colocar una imagen dentro del ancla -->
            <a class="navbar-brand" href="index.html">
                <img src="img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt=""> Guardianes Gatunos
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- podemos cambiar la disposicion del menu iz der centro -->
                <ul class="navbar-nav mr-auto mr-5">
                    <!-- podemos cambiar el active -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link">Agenda citas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                        
                        <!-- Dropdown -->
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="citas_baños.php">Baños</a>         
                            <a class="dropdown-item" href="citas_peluqueria.php">Peluquería</a>                         
                        </div>
                    </li>                                            
                    <li class="nav-item">
                        <a class="nav-link" href="pagina.html">Más información</a>
                    </li>        
                </ul>           
            </div>
        </nav>
    </div>

    <div class="container py-4">       
        <div class="py-4 my-4">
            <figure class=" my-3 text-centerfigure">
                <img src="img/imgBD.jpg" class="figure-img img-fluid rounded" >
            </figure>            
        </div>

        <hr>
        <div class="py-4 my-4">
            
            
            <!-- Desde aqui se pega formulario para modificar datos de Base de datos-->
            <h3 class="text-center py-3">Datos de citas</h3>
                <div class="row">
                  <div class="col">
                    <table class="table table-striped">
                      <thead>
                        <tr>                            
                          <th>Id</th>
                          <th>Nombre gato</th>
                          <th>Nombre dueño</th>
                          <th>Correo</th>
                          <th>Celular</th>
                          <th>Categoria</th>
                          <th>Observación</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($row = mysqli_fetch_array($query)):?>
                            <tr>
                                <th><?=$row['idCitas']?></th>
                                <th><?=$row['nombreMascota']?></th>
                                <th><?=$row['nombrePersona']?></th>
                                <th><?=$row['email']?></th>
                                <th><?=$row['celular']?></th>
                                <th><?=$row['categoria']?></th>
                                <th><?=$row['observacion']?></th>
                                <th><a href="modificar_datos_citas.php?" class="users-table--edit">Editar</a></th>

                                <th><a href="eliminar_cita.php?id=<?=$row['idCitas']?>" class="users-table--delete">Eliminar</a></th>
                            </tr>
                        <?php endwhile;?>
                      </tbody>
                    </table>
                </div>
            </div> 
              
            </div>  
              <div class="py-4">
                <a href="citas_baños.php"><button type="button" class="btn btn-danger">Atras</button></a>
              </div> 
            </div>
            
    </div>
    
            
    <footer class="bg-primary text-center py-4 sticky-bottom">       
       
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg"  class="bi bi-facebook redes" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
          </svg></a>

        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-instagram redes" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg></a>

        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-twitter-x redes" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
          </svg></a>  

        <p class="text-white">© Copyright ©  2023 Guardianes Gatunos. Todos los derechos reservados.</p>        
    </footer> 
    

    <!-- SECTION UNO -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
</body>
</html>