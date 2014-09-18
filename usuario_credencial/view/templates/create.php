<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Nuevo Usuario Credencial</title>
    <link href="css/form.css" rel="stylesheet" type="text/css"/>
    <script src="js/validacion.js" type="text/javascript"></script>
  </head>
  <header>
    <h1>Nuevo Usuario Credencial</h1>      
  </header>
  <section height="700">    
    <?php if (isset($error)): ?>
      <div class="error"><?php echo $error ?></div>
    <?php endif ?>

    <?php if (isset($success)): ?>
      <div class="exito"><?php echo $success ?></div>
    <?php endif ?>

    <?php include '_form.php'; ?>   
  </section>
</html>

