<?php
@session_start();
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rossana|Estadisticas</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/e530d88f76.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/9a3779baf9.js"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
</head>
<style>
  body {
    background-color: #f6f5f5;
  }

  .navbar {
    background-color: #007aff;
  }

  .salir {
    text-align: center;
    background-color: #dc3546;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px;
    width: 8vw;
  }


  .salir:hover {
    text-decoration: none;
    background-color: red;
    color: white;
  }

  .textsalir {
    color: white;
    font-weight: bold;
  }

  .textsalir:hover {
    color: white;
    text-decoration: none;
  }

  table {
    background-color: white;
  }

  .thead {
    text-align: center;
    color: white;

    font-weight: 900;
    background-color: RGB(0, 122, 255);
  }

  .boton {
    border-radius: 25px;
  }
</style>

<body class="body1">
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="home.php"><strong>Materiales Juquilita</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Geventa.php">Generar venta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reventa.php">Reporte ventas</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="salir" type="submit"><i class="fas fa-sign-out-alt"></i> <a class="textsalir" href="controllers/logout.php">Salir</a> </button>
      </form>
    </div>
  </nav>
  <!-- <nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color">
    <a class="navbar-brand" href="home.php">Bodega Rossana</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Geventa.php">Generar venta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reventa.php">Reporte ventas</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item dropdown">
          <a class="nav-link " id="navbarDropdownMenuLink-333" href="controllers/logout.php">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav> -->
  <!--Navbar-->
  <!--Inicio-->
  <br>
  <div class="container p-3">
    <h1><strong>Estadisticas</strong></h1>
  </div>
  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-1 pt-4">
        <img src="img/inventario.JPG" alt="" height="50px">
      </div>
      <div class="col-lg-11 pt-5">
        <h5 class="Title3">Estadisticas</h5>
      </div>
    </div>
  </div> -->
  <br>
  <!--Inicio-->
  <!--Tabla-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <table id="example" class="table table-bordered  display nowrap" cellspacing="0" width="100%">
          <thead class="thead">
            <tr>
              <th><strong>Nombre</strong></th>
              <th><strong>Precio</strong></th>
              <th><strong>Vendidos</strong></th>
              <th><strong>Semana</strong></th>
              <th><strong>Venta</strong></th>
            </tr>
          </thead>
          <tbody>
            <?php
            require("./BaseDatos/Conexion.php"); //Necesitamos el archivo en donde viene la conexión de la base de datos
            //Por medio de la consulta mostraremos las ventas que se han hecho en global y de mas ventas a la menos vendida
            $mostrarCarro = mysqli_query($conexion, "SELECT * FROM inventario_estadistica INNER JOIN productos on productos.id = inventario_estadistica.Id_producto inner join empleados on empleados.id = inventario_estadistica.Vendedor ORDER BY `inventario_estadistica`.`Cantidad` DESC");
            if ($mostrarCarro->num_rows > 0) {
              while ($row  = mysqli_fetch_array($mostrarCarro)) {
            ?>

                <tr class="tr">
                  <td><?php echo $row["nombre"]; ?></td>
                  <td>$ <?php echo $row["precio"]; ?></td>
                  <td><?php echo $row["Cantidad"]; ?> </td>
                  <td><?php echo $row["Fecha"]; ?></td>
                  <td class="text-center">
                    <form action="PInven.php" method="POST">
                      <input type="hidden" value="<?php echo $row["Id_producto"]; ?>" name="ID">
                      <button class="btn boton btn-primary" type="submit"><strong><i class="far fa-clock"></i> Historial</strong> <span></span> </button>
                    </form>
                  </td>
                </tr>

            <?php }
            } ?>
          </tbody>
          <!--  <tfoot class="thead">
            <tr>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Vendidos</th>
              <th>Semana</th>
              <th class="tr_op2">Venta</th>
            </tr>
          </tfoot> -->
        </table>
      </div>
    </div>
  </div>
  <br>
  <!--Tabla-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script>
    $(document).ready(function() {
      $('').DataTable({
        responsive: true,
        "language": {
          "lengthMenu": "Mostrar _MENU_ registros",
          "zeroRecords": "No se encontraron resultados",
          "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "sSearch": "Buscar: ",
          "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
          },
          "sProcessing": "Procesando...",
        }
      });
    });
  </script>
</body>

</html>