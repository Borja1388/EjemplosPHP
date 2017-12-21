<?php 

class Fruta{
    public $color;
    public $tamanyo;
    public function __construct($color, $tamanyo){
      $this->color = $color;
      $this->tamanyo = $tamanyo;
    }

}

class Uva extends Fruta{
    public $tieneSemilla;

    public function __construct($color, $tamanyo,$tieneSemilla){
        $this->tieneSemilla=$tieneSemilla;
        parent::__construct($color, $tamanyo);
    }


    public function tieneSemilla(){
        if($this->tieneSemilla<=0){
           $valor="No";
        }else{
            $valor="Si";
        }
        return $valor;
    }


    public function imprimir(){
        echo "la fruta es uva y es de color $this->color y tiene un tamaño de $this->tamanyo y ".$this->tieneSemilla()." tiene semilla.";
    }


}

$uva=new Uva("Amarillo","5 Centimetros",3);
$uva->imprimir();

?>