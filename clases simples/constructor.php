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
  public function imprimir()
  {
    echo "<p>Hola ! soy un $this->modelo modelo $this->marca </p>";
  }

}

$a = new Automovil("Toyota", "Corolla");
$b = new Automovil("Volkswagen", "Jetta");
$a -> imprimir();
$b -> imprimir();

?>
