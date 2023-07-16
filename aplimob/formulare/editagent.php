<?php

  $cod = $_POST['editez'];
  $corecta = $_POST['nume'];
  include '../../conectare.php';
  $comanda = "UPDATE nume set agenti = '$corecta' where cod_agent = $cod";

$myfile = fopen("cda.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $comanda);
fclose($myfile);

  mysqli_query($cnx, $comanda);
  mysqli_close($cnx);
  //  Reincarc "agenti.php"
  header('Location: ../agenti.php');


?>