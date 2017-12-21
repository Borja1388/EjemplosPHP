<?php
/**
 *
 */
class Automovil
{

  public static $marca;
  public static function establecerMarca($marca)
  {
    self::$marca = $marca;
  }

}

Automovil :: establecerMarca("Volkswagen");

echo Automovil :: $marca;

?>
