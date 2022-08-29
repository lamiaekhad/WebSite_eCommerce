<?php
require "user.php";
require "connexion_BD.php";
require "validation_donnes.php";
class controller{

public static function UserExist($NomUtilisateur){
    $myDataBase = new DataBaseConnectionManager();
        
     try{
         $myconn = $myDataBase->getConnection(); 
         $select = mysqli_query($myconn,"SELECT * from utilisateur where nomutilisateur='".$NomUtilisateur."'");
         if(mysqli_num_rows($select)){
            ?> <h3>Nom d'utilisateur existant</h3> <?php
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
        elseif(controller::UserExist($username))
        {
            ?> <h3>Nom d'utilisateur existant</h3> <?php
        }
        else
        {
            $myDataBase = new DataBaseConnectionManager();
                try{

                    $myconn = $myDataBase->getConnection(); 

                    $sql="INSERT INTO utilisateur (Nom, prenom , nomutilisateur ,courriel , motdepasse) VALUES (?,?,?,?,?);";
                    $stmt = $myconn->prepare($sql);

                    //hashage mot de passe
                    $motDePasseHasher = password_hash($motDePasse, PASSWORD_DEFAULT);

                    $stmt->bind_param("sssss",$nom, $prenom,$username,$courriel,$motDePasseHasher);
                    $stmt->execute();
                    $stmt->close();
                }
                catch(Exception $e)
                {
                    echo 'Échec lors de la connexion : ' . $e->getMessage();
                }finally{
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
            $user->set_motDePasse(htmlspecialchars($_POST['Password']));

            $username = $user->get_username();
            $motDePasse = $user->get_motDePasse();
            if(!validation::ValidationUserName($username))
            {

            }

        }

    }
    
    
}

?>