<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 05/01/2017
 * Time: 14:23
 */
// Connexion à la BDD

class Users
{
    public $id;
    public $pseudo;
    public $email;
    public $password;
    public $nom;
    public $prenom;

    public function __construct($pseudo, $email, $password, $nom, $prenom)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->nom = $nom;
        $this->prenom = $prenom;

        /* public function password () {
             $pass_hache = sha1($_POST['password']);
             $password -> password;
         }*/

    }

/*$sql = "INSERT INTO user (pseudo, email, password, nom, prenom)
    VALUES ('" . $_POST['pseudo'] . "','" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['nom'] . "','" . $_POST['prenom'] . "')";

$insertSuccess = $instance->exec($sql);

if ($insertSuccess)
{
$message = "Utilisateur ajouté !";
}

else {
    $message = "L'utilisateur n'a pas été ajouté !";
}*/
}