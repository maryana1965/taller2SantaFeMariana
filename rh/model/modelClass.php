
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
      $sql = 'SELECT cod_rh, desc_rh  FROM rh';
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
      $sql = 'SELECT cod_rh, desc_rh FROM rh WHERE cod_rh = ' . $id;
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
      $sql = 'SELECT cod_rh FROM rh WHERE rh.cod_rh= ' . $id;
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }

  /**
   *  funcion para registrar un rh
   * @param type $id
   * @param type $desc
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function newRh($id, $desc) {
    try {
      $sql = "INSERT INTO rh (cod_rh, desc_rh) VALUES (" . $id . ", '$desc')";
      DataBaseClass::getCnx()->beginTransaction();
      $anwr = DataBaseClass::getCnx()->exec($sql);
      DataBaseClass::getCnx()->commit();
      if ($anwr !== false) {
        $anwr = true;
      } else {
        throw new PDOException("El rh $id, $desc ya han sido REGISTRADOS");
      }
      return $anwr;
    } catch (PDOException $e) {
      return $e;
    }
  }

  static public function updateRh($id, $data) {
    try {

      $sql = "UPDATE rh SET ";

      foreach ($data as $key => $value) {
        $sql = $sql . " " . $key . " = '" . $value . "', ";
      }

      $newLeng = strlen($sql) - 2;
      $sql = substr($sql, 0, $newLeng);

      $sql = $sql . " WHERE cod_rh = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("El rh no ha podido ser actualizado", 2632);
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
  static public function deleteRh($id) {
    try {

      $sql = "DELETE FROM rh WHERE cod_rh = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("El rh no ha podido ser eliminado", 2633);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getCnx()->rollback();
      return $e;
    }
  }

}

?>