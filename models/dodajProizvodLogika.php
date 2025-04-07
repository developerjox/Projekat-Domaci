<?php
require_once "baza.php";

if(!isset($_POST['ime']) || empty($_POST['ime'])) {
  die("Niste uneli ime");
}
if(!isset($_POST['opis']) || empty($_POST['opis'])) {
  die("Niste uneli opis proizvoda");
}

if(!isset($_POST['kolicina']) || empty($_POST['kolicina'])) {
  die("Niste uneli kolicinu proizvoda");
}

if(!isset($_POST['cena']) || empty($_POST['cena'])) {
  die("Niste uneli cenu proizvoda");
}


$ime = $_POST['ime'];
$opis = $_POST['opis'];
$kolicina = $_POST['kolicina'];
$cena = $_POST['cena'];

$baza->query("INSERT into proizvodi (ime,opis,kolicina,cena) VALUES('$ime','$opis','$kolicina','$cena')");