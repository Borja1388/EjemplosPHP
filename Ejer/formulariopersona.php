<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="formulariomatricula.php" method="post">
        <p>Nombre :<input type="text" name="nombre"></p>
        <p>Apellidos :<input type="text" name="apellido"></p>
        <p>Direccion :<input type="text" name="direccion"></p>
        <p>CP :<input type="text" name="cp"></p>
        <p>Provincia :<input type="text" name="provincia"></p>
        <p>Telefono :<input type="text" name="telefono"></p>
        <p>Email :<input type="text" name="email"></p>
        <p><input type="submit" name="enviar" value="Enviar"></p>
    </form>
    <?php 
    if(isset($_POST['enviar'])){
        include("./clasepersona.php");
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $direccion=$_POST['direccion'];
        $cp=$_POST['cp'];
        $provincia=$_POST['provincia'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $persona=new Persona($nombre,$apellido,$direccion,$cp,$provincia,$telefono,$email);
        $serializada=serialize($persona);
        session_start();
        $_SESSION['persona']=$serializada;
        header("Location:formulariomatricula.php");
    }
    

?>
</body>
</html>
