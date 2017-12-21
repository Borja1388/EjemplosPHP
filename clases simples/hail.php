<?php
/**
 *
 */
class Automovil
{

  public $marca;
  public $modelo;
  public function __construct($modelo, $marca)
  {
    $this->modelo = $modelo;
    $this->marca = $marca;
  }
  public static function establecerMarca($marca)
  {
    self::$marca = $marca;
  }

}

Automovil :: establecerMarca("Volkswagen");

echo Automovil :: $marca;

?>
