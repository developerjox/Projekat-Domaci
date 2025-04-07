<?php
require_once "models/baza.php";
$rezultat = $baza->query("SELECT * from proizvodi");
$proizvodi = $rezultat->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php foreach($proizvodi as $proizvod): ?>
      <h1><?php echo $proizvod['ime']?></h1>
      <p>Opis: <?php echo $proizvod['opis']?></p>
      <p>Kolicina: <?php echo $proizvod['kolicina']?></p>
      <p>Cena: <?php echo $proizvod['cena']?></p>
      <a href="proizvodi.php?id=<?= $proizvod['id'];?>">Pogledaj detalje</a>
    <?php endforeach; ?>
  </div>
</body>
</html>