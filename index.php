<?php
  include("conexion.php");
  var_dump($conexion);
  $usuarios="SELECT * FROM vuelos";
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-tabla">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
                <th scope="col">Id</th>
                <th scope="col">C_origen</th>
                <th scope="col">C_llegada</th>
                <th scope="col">h_partida</th>
                <th scope="col">h_llegada</th>
                <th scope="col">anuncio</th>
                <th scope="col">costo</th>
              </tr>
            </thead>
            <?php $reult= mysqli_query($conexion, $vuelos);
            while($row=mysqli_fetch_assoc($reult)){?>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><?php echo $row["Id"]?></td>
                <td><?php echo $row["C_origen"]?></td>
                <td><?php echo $row["C_llegada"]?></td>
                <td><?php echo $row["h_partida"]?></td>
                <td><?php echo $row["h_llegada"]?></td>
                <td><?php echo $row["anuncio"]?></td>
                <td><?php echo $row["costo"]?></td>
              </tr>
            </tbody>
            <?php }?>
        </div>
      </table>

    <button type="button" class="btn btn-outline-success">Success</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>