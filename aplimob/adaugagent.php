<?php 

?>
    <main id="main">
      <div class="container">
        <h2 class="text-center" style="padding-top: 120px;">Agenți imobiliari</h2>
      </div>
      <div class="container" style="width: 50%;">
        <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6">
          <thead>
            <tr>
              <th scope="col">Nr. crt.</th>
              <th scope="col">Agent</th>
              <th scope="col" class="text-center">Telefon</th>
            </tr>
          </thead>
          <tbody>
<?php
  $interogare = "SELECT * FROM agenti ORDER BY nume";
  $linii = mysqli_query($cnx, $interogare) or die("Eroare: " . mysqli_error($cnx));
  $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
  while($rez = mysqli_fetch_assoc($linii)):
?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td class="w-70"><?= $rez['agenți'] ?></td>
              <td class="w-30 text-center">
                <a href="editagent.php?editez=<?= $rez['cod_agent'] ?>">
                  <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>  
                <a href="formulare/sterg_agent.php?sterg=<?= $rez['cod_agent'] ?>">
                  <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
              </td>
            </tr>
<?php 
  $i++;
  endwhile;
?>
          </tbody>
        </table> 
      </div>
<?php
  //  Caut functia care trebuie editata
  $editez = $_GET["editez"];
  $caut = "SELECT * FROM agenti where cod_agent = $editez";
  $rezultat = mysqli_query($cnx, $caut);
  $rez = mysqli_fetch_assoc($rezultat);
?>
      <div class="container mt-5" style="width: 50%;">
        <form method="post" action="formulare/editagent.php">
          <input type="hidden" name="editez" value="<?= $editez ?>">
          <div class="form-group">
            <label for="nume">Agent:</label>
            <input class="form-control" id="nume" name="nume" type="text" value="<?= $rez['agenti'] ?>">
          </div>
              
          <button type="submit" class="btn btn-secondary mb-2 col-xs-3">Modifică!</button>
        </form>
      </div>
    </main>
  </body>
</html>