<?php 
class Persona{
     private $nombre;
     private $apellido;
     private $direccion;
     private $cp;
     private $provincia;
     private $telefono;
     private $email;
    
    public function __construct($nombre,$apellido,$direccion,$cp,$provincia,$telefono,$email){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->direccion=$direccion;
        $this->cp=$cp;
        $this->provincia=$provincia;
        $this->telefono=$telefono;
        $this->email=$email;
    }

    function mostrarDatos() {
        foreach ($this as $clave => $valor) {
            print "$clave =>  $valor". "<br>";
        }
     }
}
?>