<?php
require ('./classes/autoload.php');
spl_autoload_register('Autoload::classesAutoloader');

$jeanmich1 = new jeanmich();
$jeanmich1 -> couleurDeCheveux = "Blond";
$jeanmich1 -> couleurDePeau = "Blanc";
var_dump($jeanmich1);
/*Log::writeCSV("fzuifghzeu");*/
$user1 = new Users ();
$user1 -> id = 1;
$user1 -> pseudo = "cartok";
$user1 -> email = "damienhamel@hotmail.com";
$user1 -> password = "toto";
$user1 -> nom = "HAMEL";
$user1 -> prenom = "Damien";
var_dump ($user1);