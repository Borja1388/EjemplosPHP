<?php 
class Persona{
    protected $dni;
    protected $nombre;
    protected $sexo;

    public function __construct($dni,$nombre,$sexo){
        $this->dni=$dni;
        $this->nombre=$nombre;
        $this->sexo=$sexo;
    }

    function mostrarDatos() {
        foreach ($this as $clave => $valor) {
            print "$clave =>  $valor\n";
        }
     }
    
}

class Alumno extends Persona{
    protected $nummatricula;
    protected $curso;

    public function __construct($nummatricula,$curso){
        $this->nummatricula=$nummatricula;
        $this->curso=$curso;
        
    }

    

}

class Empleado extends Persona{
    protected $numerosegsocial;
    protected $puestotrabajo;
    protected $salario;

    public function __construct($dni,$nombre,$sexo,$numerosegsocial,$puestotrabajo,$salario){
        $this->numerosegsocial=$numerosegsocial;
        $this->puestotrabajo=$puestotrabajo;
        $this->salario=$salario;
        parent::__construct($dni,$nombre,$sexo);
    }

}

class Profesor extends Empleado{
    protected $departamento;
    protected $tutor;


    public function __construct($dni,$nombre,$sexo,$numerosegsocial,$puestotrabajo,$salario,$departamento,$tutor){
        $this->departamento=$departamento;
        $this->tutor=$tutor;
        parent::__construct($dni,$nombre,$sexo,$numerosegsocial,$puestotrabajo,$salario); 
    }
}

class Pas extends Empleado{
    protected $cuerpo;

    public function setCuerpo($cuerpo){
        $this->cuerpo = $cuerpo;
    }
}

$persona= new Persona("48592736S","Borja","Masculino");
$alumno=new Alumno("130","2Daw");
$empleado=new Empleado("48592736S","Borja","Masculino","1234","programador","1500€");
$profesor=new Profesor("48592736S","Borja","Masculino","1234","programador","1500€","Informatica","Salva");
$pas=new Pas("48592736S","Borja","Masculino","1234","programador","1500€","");

    $profesor->mostrarDatos();
    echo"<br>";
    $pas->setCuerpo("asdasd");
    $pas->mostrarDatos();
?>