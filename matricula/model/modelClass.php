
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
      $sql = 'SELECT num_ficha, id_apre, estado FROM matricula';
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
      $sql = 'SELECT num_ficha, id_apre, estado FROM matricula WHERE num_ficha = ' . $id;
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
      $sql = 'SELECT num_ficha FROM matricula WHERE matricula.num_ficha= ' . $id;
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }

  /**
   * 
   * @param type $id
   * @param type $idApre
   * @param type $estado
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function newMatricula($id, $idApre, $estado) {
    try {
      $sql = "INSERT INTO matricula (num_ficha, id_apre, estado) VALUES (" . $id . ", '$idApre', '$estado')";
      DataBaseClass::getCnx()->beginTransaction();
      $anwr = DataBaseClass::getCnx()->exec($sql);
      DataBaseClass::getCnx()->commit();
      if ($anwr !== false) {
        $anwr = true;
      } else {
        throw new PDOException("la matricula $id, $idApre $estado ya ha sido REGISTRADA");
      }
      return $anwr;
    } catch (PDOException $e) {
      return $e;
    }
  }

  static public function updateMatricula($id, $data) {
    try {

      $sql = "UPDATE matricula SET ";

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
        throw new PDOException("La Matricula no ha podido ser actualizado", 2632);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getCnx()->rollback();
      return $e;
    }
  }

  /**
   * 
   * @param type $id
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function deleteMatricula($id) {
    try {

      $sql = "DELETE FROM matricula WHERE num_ficha = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("La Matricula no ha podido ser eliminado", 2633);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getCnx()->rollback();
      return $e;
    }
  }

}

?>