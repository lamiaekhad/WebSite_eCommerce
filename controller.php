<?php

require "user.php";
require "connexion_BD.php";
require "validation_donnes.php";
session_start();

class controller{

public static function UserExist($NomUtilisateur){
    $myDataBase = new DataBaseConnectionManager();
        
    try
    {
         $myconn = $myDataBase->getConnection(); 
         $select = mysqli_query($myconn,"SELECT * from utilisateur where nomutilisateur='".$NomUtilisateur."'");
         if(mysqli_num_rows($select)){
            //Nom d'utilisateur existant
         }
    }
     catch(Exception $e)
    {
         echo 'Échec lors de la connexion : ' . $e->getMessage();
    }finally{
         $myconn->close();
    }
}

public function getNewAccount(){

    if (isset($_POST['envoi']))
    {
        $user = new user();

        $user->set_nom(htmlspecialchars($_POST['Nom']));
        $user->set_prenom(htmlspecialchars($_POST['Prenom']));
        $user->set_username(htmlspecialchars($_POST['Nomutilisateur']));
        $user->set_courriel(htmlspecialchars($_POST['courriel']));
        $user->set_motDePasse(htmlspecialchars($_POST['Password']));
        $user->set_confirmation(htmlspecialchars($_POST['confirmation']));
    
        $nom = $user->get_nom();
        $prenom =  $user->get_prenom();
        $username = $user->get_username();
        $courriel = $user->get_courriel();
        $motDePasse = $user->get_motDePasse();
        $confirmation = $user->get_confirmation();

        if (!validation::ValidationNom($nom) || !validation::ValidationPrenom($prenom) || !validation::ValidationUserName($username) || !validation::ValidationEmail($courriel))
        {
            ?> <h3>Verifier les donnees</h3> <?php
        }
        else if($motDePasse !== $confirmation)
        {
           ?> <h3> Confirmation mot de passe invalide</h3> <?php
        }
        else if(controller::UserExist($username))
        {
            ?> <h3>Nom d'utilisateur existant</h3> <?php
        }
        else
        {
            $myDataBase = new DataBaseConnectionManager();
            try{

                $myconn = $myDataBase->getConnection(); 
                $sql="INSERT INTO utilisateur (Nom, prenom , nomutilisateur ,courriel , motdepasse, thecount, verrouiller,administrateur ) VALUES (?,?,?,?,?,?,?,?);";
                $stmt = $myconn->prepare($sql);
                //hashage mot de passe
                $motDePasseHasher = password_hash($motDePasse, PASSWORD_DEFAULT);
                $count = 0;
                $verrouiller ="non";
                $admin='non';
                $stmt->bind_param("ssssssss" ,$nom , $prenom ,$username ,$courriel ,$motDePasseHasher ,$count ,$verrouiller,$admin );
                $stmt->execute();
                $stmt->close();
                ?> <h3>cA Marche!!</h3> <?php
               
            }
            catch(Exception $e)
            {
                echo 'Échec lors de la connexion : ' . $e->getMessage();
            }
            finally
            {
                $myconn->close();
            }
        }
    }
        
}

    public function getLogin(){

        if (isset($_POST['login']))
        {
            $user = new user();

            $user->set_username(htmlspecialchars($_POST['User']));
            $user->set_motDePasse(htmlspecialchars($_POST['motdepasse']));

            $theuser = $user->get_username();
            $thePassword = $user->get_motDePasse();

             if(!self::UserExist($theuser) )
            {
                $myDataBase = new DataBaseConnectionManager();
                try
                {
                     $myconn = $myDataBase->getConnection(); 
                     $sql = "SELECT * from utilisateur where nomutilisateur=?";
                     $stmt = mysqli_stmt_init($myconn);
                     mysqli_stmt_prepare($stmt,$sql);
                     mysqli_stmt_bind_param($stmt, "s", $theuser);
                     mysqli_stmt_execute($stmt);
                     $result = mysqli_stmt_get_result($stmt);

                     if($row = mysqli_fetch_assoc($result))
                     {
                        $pwdCheck=password_verify($thePassword, $row['motdepasse']);
                        
                        if($pwdCheck == false )
                        {
                            if(self::getcount($theuser)>=3)
                            {
                                //verouillage compte
                                self::VerrouillerCompte($theuser);
                                ?> <h3> Ce compte est Verrouiller contacter admin</h3> <?php
                            }
                            else
                            {
                                ?> <h3> Mot de passe incorrect</h3> <?php
                                //update +1!!!
                                self::UpdateCount($theuser);
                            }
                        }
                        else if( $pwdCheck == true && self::getcount($theuser)<3 && self::getVerrouiller($theuser) == "non" )
                        {
                            if(self::getAdmin($theuser) == 'non'){

                                $_SESSION['Client'] = $row['nomutilisateur'];
                                ?> <h1> Bienvenue <?php echo $theuser?> </h1> <?php 
                                //count to 0
                                self::InitializeTheCount($theuser);

                            }elseif(self::getAdmin($theuser) == 'oui'){

                                $_SESSION['Administrateur'] = $row['nomutilisateur'];
                                self::InitializeTheCount($theuser);
                                echo "<script> window.location.replace('compte_admin.php') </script>";
                            }
                            
                        }
                        else
                        {

                            ?> <h3> Ce compte est Verrouiller contacter admin </h3> <?php
                        }
                     }
                     else
                     {
                        ?> <h3> Ce compte n'existe pas!</h3> <?php
                     }
                }
                catch(Exception $e)
                {
                    echo 'Échec lors de la connexion : ' . $e->getMessage();    
                }
                finally
                {
                    $myconn->close();
                }
            }
            else
            {
                ?> <h3> nom utilisateur je ne'existe pas</h3> <?php
            }
        }

    }

    public static function getcount($NomUtilisateur){

        $myDataBase = new DataBaseConnectionManager();
        try{
            
            $myconn = $myDataBase->getConnection(); 
            $sql = "SELECT thecount from utilisateur where nomutilisateur='".$NomUtilisateur."'";
            $result = $myconn->query($sql);
            if (!empty($result) && $result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                  $Vcount = $row["thecount"];
                }
            }
             
        }
        catch(Exception $e)
        {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }finally{
            $myconn->close();
        }
       return $Vcount;
    }

    public static function getVerrouiller($NomUtilisateur){

        $myDataBase = new DataBaseConnectionManager();
        try{
            
            $myconn = $myDataBase->getConnection(); 
            $sql = "SELECT verrouiller from utilisateur where nomutilisateur='".$NomUtilisateur."'";
            $result = $myconn->query($sql);
            if (!empty($result) && $result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                   $Verrouiller = $row["verrouiller"];
                }
            }
             
        }
        catch(Exception $e)
        {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }finally{
            $myconn->close();
        }
        return $Verrouiller;
    }
    public static function getAdmin($NomUtilisateur){

        $myDataBase = new DataBaseConnectionManager();
        try{
            
            $myconn = $myDataBase->getConnection(); 
            $sql = "SELECT administrateur from utilisateur where nomutilisateur='".$NomUtilisateur."'";
            $result = $myconn->query($sql);
            if (!empty($result) && $result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                   $admin = $row["administrateur"];
                }
            }
             
        }
        catch(Exception $e)
        {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }finally{
            $myconn->close();
        }
        return $admin;
    }
    public static function UpdateCount($NomUtilisateur){

        $myDataBase = new DataBaseConnectionManager();
        try{
            $myconn = $myDataBase->getConnection(); 
            $sql = "UPDATE utilisateur SET thecount = thecount + 1 WHERE nomutilisateur='".$NomUtilisateur."'";
            $myconn->prepare($sql)->execute();
        } 
        catch(Exception $e)
        {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }finally{
            $myconn->close();
        }
       
    }

    public static function InitializeTheCount($NomUtilisateur){

        $myDataBase = new DataBaseConnectionManager();
        try{
            $thecount=0;
            $myconn = $myDataBase->getConnection(); 
            $query=$myconn->prepare("UPDATE utilisateur SET thecount=? WHERE nomutilisateur = ?");
            $query->bind_param('is', $thecount , $NomUtilisateur);
            $query->execute();
        } 
        catch(Exception $e)
        {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }finally{
            $myconn->close();
        }

    }

    public static function VerrouillerCompte($NomUtilisateur){

        $myDataBase = new DataBaseConnectionManager();
        try{
            $close="oui";
            $myconn = $myDataBase->getConnection(); 
            $query=$myconn->prepare("UPDATE utilisateur SET verrouiller=? WHERE nomutilisateur = ?");
            $query->bind_param('ss', $close , $NomUtilisateur);
            $query->execute();
        } 
        catch(Exception $e)
        {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }finally{
            $myconn->close();
        }
        
    }

    
    

}


?>