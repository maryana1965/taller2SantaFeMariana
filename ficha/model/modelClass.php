
<?php

/**
 * @author Mariana Lopez <jareth1971@hotmail.com>
 * @copyright (c) 2014, Mariana Lopez
 * model Class es para manejar las funciones del sistema 
 */
class modelClass {
 /**
   * 
   * 
   * @return \PDOException
   */
  static public function getData() {
    
    try {
      $sql = 'SELECT num_ficha, cod_programa, fecha_ini, fecha_fin, cod_centro FROM ficha';
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }
  /**
   * 
   * @param type $id
   * @return \PDOException
   */
  static public function getRow($id) {
    try {
      $sql = 'SELECT num_ficha, cod_programa, fecha_ini, fecha_fin, cod_centro FROM ficha WHERE num_ficha = ' . $id;
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }

  /**
   * @param type $id
   * @return \PDOException
   */
  static public function certifyId($id) {
    try {
      $sql = 'SELECT num_ficha FROM ficha WHERE ficha.num_ficha= ' . $id;
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }

  /**
   * 
   * @param type $id
   * @param type $programa
   * @param type $fechaInicio
   * @param type $fechaFinal
   * @param type $codCentro
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function newFicha($id, $programa, $fechaInicio, $fechaFinal, $codCentro) {
    try {
      $sql = "INSERT INTO ficha (num_ficha, cod_programa, fecha_ini, fecha_fin, cod_centro) VALUES ($id, '$programa', '$fechaInicio', '$fechaFinal', '$codCentro')";
      DataBaseClass::getCnx()->beginTransaction();
      $anwr = DataBaseClass::getCnx()->exec($sql);
      DataBaseClass::getCnx()->commit();
      if ($anwr !== false) {
        $anwr = true;
      } else {
        throw new PDOException("La Ficha $id, $programa ha sido REGISTRADA");
      }
      return $anwr;
    } catch (PDOException $e) {
      return $e;
    }
  }

  static public function updateFicha($id, $data) {
    try {

      $sql = "UPDATE ficha SET ";

      foreach ($data as $key => $value) {
        $sql = $sql . " " . $key . " = '" . $value . "', ";
      }

      $newLeng = strlen($sql) - 2;
      $sql = substr($sql, 0, $newLeng);

      $sql = $sql . " WHERE num_ficha = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("La Ficha no ha podido ser actualizado", 2632);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getInstance()->rollback();
      return $e;
    }
  }

  /**
   * 
   * @param type $id
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function deleteFicha($id) {
    try {

      $sql = "DELETE FROM ficha WHERE num_ficha = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("La ficha no ha podido ser eliminado", 2633);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getCnx()->rollback();
      return $e;
    }
  }

}

?>