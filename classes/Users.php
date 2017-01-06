<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 05/01/2017
 * Time: 14:23
 */

class Users
{
    public $id;
    public $pseudo;
    public $email;
    public $password;
    public $nom;
    public $prenom;
    private $instance;

    public function __construct($pseudo, $email, $password, $nom, $prenom)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = hash('sha1', $password);
        $this->nom = $nom;
        $this->prenom = $prenom;

        $this -> instance = new Bdd ();
        $this -> instance = $this -> instance -> connect();



    }
     public function inscription (){

        $addUser = $this -> instance -> prepare ("INSERT INTO user (pseudo, email, password, nom, prenom) VALUES (:pseudo, :email, :password, :nom, :prenom)");
         $insertSuccess = $addUser ->execute (array(
            "pseudo" => $this -> pseudo,
            "email" => $this -> email,
            "password" => $this -> password,
            "nom" => $this -> nom,
            "prenom" => $this -> prenom
        ));


        if ($insertSuccess)
        {
        $message = "Utilisateur ajouté !";
        }

        else {
            $message = "L'utilisateur n'a pas été ajouté !";
        }

        return $message;
    }
}