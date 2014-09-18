<!DOCTYPE html>
<html lang="en">
  <!-- Pagina Principal  Centro-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">    
    <title>cenntro</title>
    <link href="css/cssRegistrados.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="js/validacion.js" type="text/javascript"></script>
  </head>
  <body>
  <center>
    <header id="encabezado">
      <img src="../img/ba.jpg" alt=""/>
    </header>
    <section class="contenido">

      <article class="texto">  
        <?php
        include_once '../librerias/DataBaseClass.php';
        include_once 'controller/controllerClass.php';
        include_once 'view/viewClass.php';
        include_once 'model/modelClass.php';
// inicializamos el controlador
        $controller = new controllerClass();
// verifico que exista $_GET['action']
        if (isset($_GET['action'])) {
          switch ($_GET['action']) {
            case 'create':
              $controller->create();
              break;
            case 'update':
              $controller->update();
              break;
            case 'delete':
              $controller->delete();
              break;
            case 'read':
              $controller->index();
              break;
            default :
              $controller->notFound();
          }
        } else {
          $controller->index();
        }
        ?>
      </article>        
      <aside class="lateral">
        <div id="buttons">  
          <nav>
            <div class="links">
              <li><a href="../index.php"><span>inicio</span></a></li>
            </div>
            <div class="links">
              <a href="index.php?action=create">Nuevo Centro</a>
            </div>
          </nav>    
        </div>
      </aside>
    </section>     
    <footer id="pie">
      <p id="ptex">
        @Copyright (c) 2014 Author, Mariana Lopez  
      </p>
    </footer>
  </center>     
</body>   
</html>