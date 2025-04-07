<?php
require_once "baza.php";

if(!isset($_POST['email']) || empty($_POST['email'])) {
  die("Niste uneli email");
}
if(!isset($_POST['sifra']) || empty($_POST['sifra'])) {
  die("Niste uneli sifru");
}

$email = $_POST['email'];
$sifra = $_POST['sifra'];
$hashSifra = password_hash($sifra, PASSWORD_BCRYPT);

$baza->query("INSERT into korisnici (email,sifra) VALUES ('$email','$hashSifra')");
