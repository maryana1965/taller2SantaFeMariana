
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
      $sql = 'SELECT cod_ciudad, nom_ciudad, cod_depto, habitantes FROM ciudad';
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
      $sql = 'SELECT cod_ciudad, nom_ciudad, cod_depto, habitantes FROM ciudad WHERE cod_ciudad = ' . $id;
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
      $sql = 'SELECT cod_ciudad FROM ciudad WHERE ciudad.cod_ciudad= ' . $id;
      return dataBaseClass::getCnx()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return $e;
    }
  }

  /**
   * 
   * @param type $id
   * @param type $nom
   * @param type $codDepto
   * @return boolean|\PDOException
   * @throws PDOException
   */
  static public function newCiudad($id, $nom, $codDepto, $habitantes) {
    try {
      $sql = "INSERT INTO ciudad (cod_ciudad, nom_ciudad, cod_depto, habitantes) VALUES ('$id' , '$nom', '$codDepto', '$habitantes')";
      //echo $sql;
      //die();

      DataBaseClass::getCnx()->beginTransaction();
      $anwr = DataBaseClass::getCnx()->exec($sql);
      DataBaseClass::getCnx()->commit();
      if ($anwr !== false) {
        $anwr = true;
      } else {
        throw new PDOException("La ciudad  $id, $nom ya ha sido REGISTRADA");
      }
      return $anwr;
    } catch (PDOException $e) {
      return $e;
    }
  }

  static public function updateCiudad($id, $data) {
    try {

      $sql = "UPDATE ciudad SET ";

      foreach ($data as $key => $value) {
        $sql = $sql . " " . $key . " = '" . $value . "', ";
      }

      $newLeng = strlen($sql) - 2;
      $sql = substr($sql, 0, $newLeng);

      $sql = $sql . " WHERE cod_ciudad = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("La ciudad no ha podido ser actualizado", 2632);
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
  static public function deleteCiudad($id) {
    try {

      $sql = "DELETE FROM ciudad WHERE cod_ciudad = " . $id;

      dataBaseClass::getCnx()->beginTransaction();
      $rsp = dataBaseClass::getCnx()->exec($sql);
      dataBaseClass::getCnx()->commit();

      if ($rsp !== false) {
        $rsp = true;
      } else {
        throw new PDOException("La ciudad no ha podido ser eliminado", 2633);
      }
      return $rsp;
    } catch (PDOException $e) {
      dataBaseClass::getCnx()->rollback();
      return $e;
    }
  }

}

?>