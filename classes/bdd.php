<?php
class Bdd
{

// Connexion à la BDD
    public function connect()
    {
        try {
            $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");
        } catch
        (Exception $e) {
            die($e->getMessage());
        }

        return $instance;
    }
}