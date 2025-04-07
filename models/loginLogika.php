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

$upitKorisnik = $baza->query("SELECT * from korisnici where email = '$email'");
if($upitKorisnik->num_rows == 1) {
  $korisnikInformacije = $upitKorisnik->fetch_assoc();
  $verifikovanaSifra = password_verify($sifra, $korisnikInformacije['sifra']);
  if($verifikovanaSifra) {
    echo "Uspesno ste ulogovani";
  } else {
    echo "Sifra nije tacna";
  }
} else {
  echo "Nismo pronasli korisnika sa tim emailom";
}