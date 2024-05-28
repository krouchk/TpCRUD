<?php
session_start();
require_once(__DIR__ . "/config.php");


if (isset($_POST['okey'])) {
    test_input($_POST["nom"], $_POST["prenom"], $_POST["ville"], $_POST["email"] );
    extract($_POST, EXTR_SKIP); 
    if (!empty($nom) && !empty($prenom) && !empty($ville)) {
        $requete = $mysqlUser->prepare ("INSERT INTO eleve (nom, prenom, ville, email, classe_id) VALUES (:nom, :prenom, :ville, :email, :classe_id)");
        $requete->execute(
            [
                "nom" =>$nom,
                "prenom" =>$prenom,
                "ville" =>$ville,
                "email" =>$email,
                "classe_id" =>$classe_id
            ]
        );

        if($requete){
            $_SESSION["CHAMPS_SUCCESS"]="Votre élève à bien été ajouté !";
            header("location : index.php");
            exit();

        } else{
            $_SESSION["CHAMPS"]="Une erreur est survenue";
            header("location : ajout.php");
            exit()
        }

    }else{
        $_SESSION["CHAMPS"]="Veuillez remplir tous les champs !";
        header("location: ajout.php");
        exit();
    }




} else{
    header("location: ajout.php");
    exit();
}



























