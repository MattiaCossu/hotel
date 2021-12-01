<?php
  require "require.php";
?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <title>Hotel check</title>
  </head>
  <body>
    <form class="" action="" method="get">
      <select name="nome" onchange="this.form.submit()">
        <option selected disabled>Scegli...</option>
        <?php
        //echo "<h1>ciao</h1>";
        buildselectCitta();
        if(isset($_GET["nome"])) {
          buildselectHotel($_GET["nome"]);
        }
        ?>
      </select>
    </form>
  </body>
</html>
