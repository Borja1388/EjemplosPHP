<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio Hora</title>
  </head>
  <body>
    <form class="" action="hora.php" method="post">
      <p>Introduce una hora <input type="text" name="fecha" value=""></p>
      <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
      /**
       *
       */
       if (isset($_POST["enviar"])) {

      class hora
      {
        public $horas;
        public $minutos;
        public $segundos;

          function __construct()
          {
            $this->horas=0;
            $this->minutos=0;
            $this->segundos=0;
          }
          function stablecerHora($horas, $minutos, $segundos)
          {
            $this->horas=$horas;
            $this->minutos=($horas*60)+$minutos;
            $this->segundos=((($horas*60)+$minutos)*60)+$segundos;
          }
          function imprimirHora()
          {
            echo "La hora insertada es ".$_POST["fecha"];
            echo "<br>";
            echo "La hora es $this->horas los minutos $this->minutos y los segundos $this->segundos";
          }
          function desdeSegundos()
          {
            echo "Los segundos que han pasado desde 00:00:00 son: $this->segundos";
          }
          function hastaSegundos()
          {
            $fechaFinal = "23:59:59";
            list($horasFinal, $minutosFinal, $segundosFinal) = split('[:]', $fechaFinal);
            $segundosFinales = ((($horasFinal*60)+$minutosFinal)*60)+$segundosFinal;
            $resultado = $segundosFinales-$this->segundos;

            echo "La hora final es $fechaFinal y los segundos finales son $segundosFinales y el resultado es $resultado";
          }
        }
        $fecha = $_POST["fecha"];
        list($horas, $minutos, $segundos) = split('[:]', $fecha);

        $h = new hora();
        $h ->stablecerHora($horas, $minutos, $segundos);
        echo "<br>";
        $h ->imprimirHora();
        echo "<br>";
        $h ->desdeSegundos();
        echo "<br>";
        $h ->hastaSegundos();


      }

    ?>
  </body>
</html>
