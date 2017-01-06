<?php

/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 06/01/2017
 * Time: 11:41
 */
// Connexion à la BDD
public function connect
{
try
{
$instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
}

catch
(Exception $e) {
    die($e->getMessage());
}
}