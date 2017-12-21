<?php
/**
 *
 */
class Automovil
{

  public $marca;
  public static $modelo;

}

Automovil :: $modelo = "Toyota";

$a = new Automovil();
$a -> marca = "4runner";
$b = new Automovil();
$b -> marca = "Corolla";

echo Automovil :: $modelo;
echo "<br>";
echo $a -> marca;
echo "<br>";
echo $b -> marca;

?>
