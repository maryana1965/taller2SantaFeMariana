<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>REGISTRADOS</title>
    <link href="../../css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <h1>REGISTRADOS</h1>
    <?php if (isset($error)): ?>
      <div class="error"><?php echo $error ?></div>
    <?php endif ?>

    <?php if (isset($success)): ?>
      <div class="success"><?php echo $success ?></div>
    <?php endif ?>
    <table  border="1" id="tblContenido">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>NUMERO TELEFONICO</th>
          <th>COD CIUDAD</th>
          <th>COD RH</th>
          <th>COD_TIPO_ID</th>
          <th>GENERO</th>
          <th>EDAD</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos as $row): ?>
          <tr>

            <td><?php echo $row['id_apre'] ?></td>
            <td><?php echo $row['nom_apre'] ?></td>
            <td><?php echo $row['apell_apre'] ?></td>
            <td><?php echo $row['tel_apre'] ?></td>
            <td><?php echo $row['cod_ciudad'] ?></td>
            <td><?php echo $row['cod_rh'] ?></td>
            <td><?php echo $row['cod_tipo_id'] ?></td>
            <td><?php echo $row['genero'] ?></td>
            <td><?php echo $row['edad'] ?></td>
            <td><a href="index.php?action=update&id=<?php echo $row['id_apre'] ?>">Modificar</a> - <a href="index.php?action=delete&id=<?php echo $row['id_apre'] ?>">Eliminar</a></td>

          </tr>

        <?php endforeach ?>
      </tbody>
    </table>
  </body>
</html>
