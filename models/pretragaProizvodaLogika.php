<?php
require_once "baza.php";

if(!isset($_GET['ime']) || empty($_GET['ime'])) {
  die("Niste uneli ime");
}
$imeProizvoda = $_GET['ime'];

$pretraga = $baza->query("SELECT * from proizvodi where ime LIKE '%$imeProizvoda%'");
if($pretraga->num_rows >= 1) {
  echo "Nasli smo proizvod/e";
}


?>