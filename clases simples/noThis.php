<?php
/**
 *
 */
class Automovil
{

  public static $marca;
  public static function obtenerMarca()
  {
    return self::$marca;
  }

}

$a = new Automovil();
Automovil::$marca = "Volkswagen";

//Volkswagen o Toyota? Fatal error
echo Automovil :: obtenerMarca();

?>
