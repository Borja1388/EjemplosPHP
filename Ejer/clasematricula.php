<?php 
class Matricula{
     private $centro;
     private $curso;
     private $turno;
     
    
    public function __construct($centro,$curso,$turno){
        $this->centro=$centro;
        $this->curso=$curso;
        $this->turno=$turno;
        
    }

    function mostrarDatos() {
        foreach ($this as $clave => $valor) {
            print "$clave =>  $valor". "<br>";
        }
     }
}
?>