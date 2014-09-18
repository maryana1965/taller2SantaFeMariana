<?php

/**
 * descripcion del controlador  del sistema 
 * @author Mariana Lopez
 * @copyright (c) 2014, Mariana Lopez
 */
class controllerClass {

  public function index($args = NULL) {
    $args['datos'] = modelClass::getData();

    if (is_array($args['datos'])) {
      viewClass::renderHTML('index.php', $args);
    } else {
      viewClass::renderHTML('error.php', $args);
    }
  }
   

  public function create() {
    $template = 'create.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $anwr = modelClass::newCiudad($_POST['txtCod'], $_POST['txtNom'], $_POST['txtCodDepto'], $_POST['txtHabitantes']);
      if ($anwr === true) {
        $args['success'] = 'Su registro ha sido exitoso!';
        $this->index($args);
      } else {
        $args['error'] = $anwr->getMessage();
        $args['formAction'] = 'index.php?action=create';
        $args = array_merge($args, $_POST);
        viewClass::renderHTML($template, $args);
      }
    } else {
      $args['formAction'] = 'index.php?action=create';
      viewClass::renderHTML($template, $args);
    }
  }

  public function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id']) and is_numeric($_GET['id'])) {
      $certificate = modelClass::certifyId($_GET['id']);
      if (is_array($certificate)) {
        if (count($certificate) > 0) {
          $data = modelClass::getRow($_GET['id']);
          if (is_array($data)) {
            if (count($data) > 0) {
              $args['txtCod'] = $data[0]['cod_ciudad'];
              $args['txtNom'] = $data[0]['nom_ciudad'];
              $args['txtCodDepto'] = $data[0]['cod_depto'];
              $args['txtHabitantes'] = $data[0]['habitantes'];
            }
          } else {
            $args['error'] = $data;
            viewClass::renderHTML('error.php', $args);
          }
        }
      } else {
        $args['error'] = $certificate;
        viewClass::renderHTML('error.php', $args);
      }
      $args['formAction'] = 'index.php?action=update&amp;id=' . $_GET['id'];
      viewClass::renderHTML('update.php', $args);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $data['nom_ciudad'] = $_POST['txtNom'];
      $data['cod_depto'] = $_POST['txtCodDepto'];
      $data['habitantes'] = $_POST['txtHabitantes'];

      $rsp = modelClass::updateCiudad($_GET['id'], $data);
      if ($rsp === true) {
        $args['success'] = 'Los cambios fueron realizados exitosamente';
      } else {
        $args['error'] = $rsp->getMessage();
      }
      $args['formAction'] = 'index.php?action=update&amp;id=' . $_GET['id'];
      $args = array_merge($args, $_POST);
      viewClass::renderHTML('update.php', $args);
    } else {
      $this->index();
    }
  }

  public function delete() {
    $args['formAction'] = 'index.php?action=delete&amp;id=' . $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id']) and is_numeric($_GET['id'])) {
      viewClass::renderHTML('delete.php', $args);
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
      $rsp = modelClass::deleteCiudad($_GET['id']);
      if ($rsp === true) {
        $args['success'] = 'El Registro ' . $_GET['id'] . ' Fue ELIMINADO Exitosamente. ';
      } else {
        $args['error'] = $rsp;
        viewClass::renderHTML('error.php', $args);
      }
      $this->index($args);
    }
  }

  public function notFound() {
    
  }

}
