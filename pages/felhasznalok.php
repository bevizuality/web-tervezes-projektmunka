<?php
include_once "User.php";
session_start();
$file = fopen("users.txt", "a+");
$_SESSION["regisztraltFelhasznalok"] = [];
while (($line = fgets($file)) !== false){
    $sor = unserialize($line);

    $newUser = new User($sor["fnev"], $sor["jelszo"], $sor["nev"], $sor["szuldatum"], $sor["nem"], $sor["tel"], $sor["email"], $sor["edu"], $sor["technologiak"],$sor["fajl"], $sor["kep"], $sor["jelentkezes_datuma"]);

    array_push($_SESSION["regisztraltFelhasznalok"], $newUser);
}
fclose($file);
