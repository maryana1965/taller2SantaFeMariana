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
    $args['rh'] = modelClass::getRh();
    $args['ciudad'] = modelClass::getCiudad();
    $args['TID'] = modelClass::getTid();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $anwr = modelClass::newAprendiz($_POST['txtId'], $_POST['txtNombre'], $_POST['txtApellido'], $_POST['txtTel'], $_POST['idCiudad'], $_POST['idRh'], $_POST['idTipoId'], $_POST['txtGenero'], $_POST['txtEdad']);
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
    $args['rh'] = modelClass::getRh();
    $args['ciudad'] = modelClass::getCiudad();
    $args['TID'] = modelClass::getTid();
    if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id']) and is_numeric($_GET['id'])) {
      $certificate = modelClass::certifyId($_GET['id']);
      if (is_array($certificate)) {
        if (count($certificate) > 0) {
          $data = modelClass::getRow($_GET['id']);
          if (is_array($data)) {
            if (count($data) > 0) {
              $args['txtId'] = $data[0]['id_apre'];
              $args['txtNombre'] = $data[0]['nom_apre'];
              $args['txtApellido'] = $data[0]['apell_apre'];
              $args['txtTel'] = $data[0]['tel_apre'];
              $args['idCiudad'] = $data[0]['cod_ciudad'];
              $args['idRh'] = $data[0]['cod_rh'];
              $args['idTipoId'] = $data[0]['cod_tipo_id'];
              $args['txtGenero'] = $data[0]['genero'];
              $args['txtEdad'] = $data[0]['edad'];
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

     
      $data['nom_apre'] = $_POST['txtNombre'];
      $data['apell_apre'] = $_POST['txtApellido'];
      $data['tel_apre'] = $_POST['txtTel'];
      $data['cod_ciudad'] = $_POST['idCiudad'];
      $data['cod_rh'] = $_POST['idRh'];
      $data['cod_tipo_id'] = $_POST['idTipoId'];
      $data['genero'] = $_POST['txtGenero'];
      $data['edad'] = $_POST['txtEdad'];

      $rsp = modelClass::updateAprendiz($_GET['id'], $data);
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
      $rsp = modelClass::deleteAprendiz($_GET['id']);
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
