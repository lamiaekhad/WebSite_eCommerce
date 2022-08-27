<?php

include_once('connexion_BD.php');

class produit{

private $id;
private $nomProduit;
private $details;
private $prix;
private $prixDeBase;
private $disponible;
private $image;

public function set_id($id){$this->id=$id;}
public function get_id(){return $this->id;}

public function set_nomProduit($nomProduit){$this->nomProduit=$nomProduit;}
public function get_nomProduit(){return $this->nomProduit;}

public function set_details($details){$this->details=$details;}
public function get_details(){return $this->details;}

public function set_prix($prix){$this->prix=$prix;}
public function get_prix(){return $this->prix;}

public function set_prixDeBase($prixDeBase){$this->prixDeBase=$prixDeBase;}
public function get_prixDeBase(){return $this->prixDeBase;}

public function set_disponible($disponible){$this->disponible=$disponible;}
public function get_disponible(){return $this->disponible;}

public function set_image($image){$this->image=$image;}
public function get_image(){return $this->image;}


function __construct(){}



PUBLIC function getProductName(){

    $myDataBase = new DataBaseConnectionManager();
    
    try
    {
        $myconn = $myDataBase->getConnection(); 
        $sql = "SELECT NomProduit, prix, prixdebase, image from produit where supprimer ='non';";
        $result = $myconn->query($sql);
        
        if (!empty($result) && $result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())

            {?> <div class="produit_item">
                <div class="pro">
                   <a href="produit.php"><img src= <?php echo $row['image'];?> alt="produit"></a>
             </div>
             <div class="description">
                 <h3 class="nom_produit">  <?php echo $row["NomProduit"]; ?></h3>
                 <p class="prix_produit"> <?php echo $row["prix"] ?> </p>
                 <p class="historique_prix">  <?php echo $row["prixdebase"] ?>  </p>
                 </div>
            </div> <?php
            
            }
        }
    }
    catch(Exception $e)
    {
        echo "<h1>Products won't load.</h1>";
    }finally{
        $myconn->close();
    }
    
} 
}?>


