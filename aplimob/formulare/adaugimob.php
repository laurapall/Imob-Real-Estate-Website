<?php
//  Afisez ce am primit
// print_r($_POST);

function corectez($sir) {
  $sir = trim($sir);
  $sir = stripslashes($sir);
  $sir = htmlspecialchars($sir);
  return $sir;
}

  // preiau imaginea aleasa
  $poza = $_FILES["fotografie1"]["name"];
  $nmtmp = $_FILES["fotografie1"]["tmp_name"];
  $extensie = pathinfo($poza,PATHINFO_EXTENSION); 
 
  // numele initial pt toate pozele
  $pinit = 'temp.png';
  
  // preiau valorile din campurile formularului (titlu, data si prezentare) și verific daca au fost completate
  $eroare = '';

  if(empty($_POST['adresa'])) {
    $eroare .= '<p>Nu ați introdus adresa!</p>';
  } else {
    $adresa = corectez($_POST['adresa']);
  }

  if(empty($_POST['marime'])) {
    $eroare .= '<p>Nu ați introdus mărimea!</p>';
  } else {
    $marime = corectez($_POST['marime']);
  }

  if(empty($_POST['pret'])) {
    $eroare .= '<p>Nu ați introdus prețul!</p>';
  } else {
    $pret = corectez($_POST['pret']);
  }

  //  Verific daca preluarea datelor s-a derulat corect
  if($eroare == '') {
    //  Nu sunt mesaje de eroare

    // formulez comanda INSERT
    include '../../conectare.php';
    $comanda = "INSERT INTO imobile (fotografie1, adresa, marime, pret) VALUES (?, ?, ?, ?)";
    $stm = mysqli_prepare($cnx, $comanda);
    mysqli_stmt_bind_param($stm, 'ssss', $pinit, $adresa, $marime, $pret);
    mysqli_stmt_execute($stm);
    //  Preiau valoarea cheii primare
    $nr = mysqli_insert_cod_imobil($cnx);
    //redenumesc fisierul continand imaginea si il copiez in directorul poze din site (/htdocs/FamiliaMea/poze)

    $poza_r = "e".$nr.".".strtolower($extensie);  //  Numele incepe cu 'e', urmeaza valoarea cheii primare si apoi extensia. Exemplu: e3.png
    $cale = "../../imagini/$poza_r";              //  Fiind in directorul /FamiliaMea/apliFamilia/formulare, calea e mai complicata!
    $rezultat = move_uploaded_file($nmtmp, $cale);    
    // schimb denumirea fisierului in articolul scris
    $cdamodif = "UPDATE imobile set fotografie1='$poza_r' where id=$nr";
    mysqli_query($cnx, $cdamodif) or die("Nu merge update in tabel");

    //inchid conexiunea
    mysqli_close($cnx); //sau $cnx = null;
    header('Location: http://localhost/FamiliaMea/apliFamilia/adaugeveniment.php');
  } else {
    echo $eroare;
  }
?>
