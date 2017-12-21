<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="resumen.php" method="post">
        <p>Centro :<input type="text" name="centro"></p>
        <p>Curso :<input type="text" name="curso"></p>
        <p>Turno :<input type="text" name="turno"></p>
        <p><input type="submit" name="guardar" value="Enviar"></p>
    </form>

<?php
if(isset($_POST['guardar'])){
    include("./clasematricula.php");
    $centro=$_POST['centro'];
    $curso=$_POST['curso'];
    $turno=$_POST['turno'];
    $matricula= new Matricula($centro,$curso,$turno);
    $serializada=serialize($matricula);
    session_start();
    $_SESSION['matricula']=$serializada;
    header("Location:resumen.php");
    
} 
?>

</body>
</html>


