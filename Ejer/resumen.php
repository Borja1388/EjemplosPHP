<?php
session_start();
include("clasematricula.php");
include("clasepersona.php");
$persona=$_SESSION['persona'];
$matricula=$_SESSION['matricula'];
$matriculaDes=unserialize($matricula);
$personaDes=unserialize($persona);

print_r($personaDes);



?>