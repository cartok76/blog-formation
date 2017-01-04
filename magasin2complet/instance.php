<?php
// Connexion à la BDD
try {
  $instance = new PDO("mysql:host=localhost;dbname=magasin", "root", "");
} catch (Exception $e) {
  die($e->getMessage());
}
