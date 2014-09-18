
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
      $sql = 'SELECT cod_depto, nom_depto FROM depto';
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
      $sql = 'SELECT cod_depto, nom_depto FROM depto WHERE cod_depto = ' . $id;
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
      $sql = 'SELECT cod_depto FROM depto WHERE depto.cod_depto= ' . $id;
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }

  /**
   *  funcion para registrar un depto
   * @param type $id
   * @param type $nom
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function newDepto($id, $nom) {
    try {
      $sql = "INSERT INTO depto (cod_depto, nom_depto) VALUES (" . $id . ", '$nom')";
      DataBaseClass::getCnx()->beginTransaction();
      $anwr = DataBaseClass::getCnx()->exec($sql);
      DataBaseClass::getCnx()->commit();
      if ($anwr !== false) {
        $anwr = true;
      } else {
        throw new PDOException("El Departamento $id, $nom ya han sido REGISTRADOS");
      }
      return $anwr;
    } catch (PDOException $e) {
      return $e;
    }
  }

  static public function updateDepto($id, $data) {
    try {

      $sql = "UPDATE depto SET ";

      foreach ($data as $key => $value) {
        $sql = $sql . " " . $key . " = '" . $value . "', ";
      }

      $newLeng = strlen($sql) - 2;
      $sql = substr($sql, 0, $newLeng);

      $sql = $sql . " WHERE cod_depto = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("El departamento no ha podido ser actualizado", 2632);
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
  static public function deleteDepto($id) {
    try {

      $sql = "DELETE FROM depto WHERE cod_depto = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("El Departamento no ha podido ser eliminado", 2633);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getCnx()->rollback();
      return $e;
    }
  }

}

?>