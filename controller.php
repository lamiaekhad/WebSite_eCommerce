<?php
include "user.php";
include "connexion_BD.php";
include "validation_donnes.php";
class controller{

public function getform(){

    $user = new utilisateur();

    $nom = $user->get_nom();
    $prenom =  $user->get_prenom();
    $username = $user->get_username();
    $courriel = $user->get_courriel();
    $motDePasse = $user->get_motDePasse();
    $confirmation = $user->get_confirmation();


    if (!validation::ValidationNom($nom))
    {
        header("location: ../index.php?nominvalide");
    }
    else if (!validation::ValidationNom($prenom))
    {
        ?><h4>Prenom non valide</h4><?php
    }
    else if(!validation::ValidationUserName($username))
    {
        ?><h4>Nom utilisateur non valide</h4><?php
    }
    else if(!validation::ValidationEmail($courriel))
    {
        ?><h4>courriel non valide</h4><?php
    }
    else if($motDePasse!==$confirmation)
    {
        ?><h4>confirmation non valide</h4><?php
    }
    else
    {
        $myDataBase = new DataBaseConnectionManager();
        try{
            $myconn = $myDataBase->getConnection(); 
            $stmt = $myconn->prepare("INSERT INTO user (Nom, prenom , nomutilisateur , 
            courriel , motdepasse, administrateur)VALUES(?,?,?,?,?,?)");
            $stmt->bind_param("ssssss",$nom,$prenom,$username,$courriel,$motDePasse,"non");
            $stmt->execute();
            header("location: ../index.php?singup=success");
        }
        catch(Exception $e)
        {
            echo "<h1>Products won't load.</h1>";
        }finally{
            $myconn->close();
        }

        
    }
}
}
?>