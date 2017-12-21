<?php
/**
 *
 */
class Automovil
{

  public $marca;
  public $modelo;
  public function imprimir()
  {
    echo "<p>Hola ! soy un $this->marca modelo $this->modelo </p>";
  }

}

$a = new Automovil();
$a -> marca = "Volkswagen";
$a ->modelo = "Jetta";
$a -> imprimir();

?>
