<?php
//ID de connexion
$user = "root";
$pass = "tIAvsp4E";

//Connexion à la base de données
try
{
    $db = new PDO ("mysql:host=localhost;dbname=cinema", $user, $pass);
} catch (PDOException $e){
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}