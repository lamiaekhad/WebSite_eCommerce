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



PUBLIC static function getProductName(){

    $myDataBase = new DataBaseConnectionManager();
    
    try
    {
        $myconn = $myDataBase->getConnection(); 
        $sql = "SELECT NomProduit, prix, prixdebase, image,id from produit where supprimer ='non' ORDER BY id DESC;";
        $result = $myconn->query($sql);
        
        if (!empty($result) && $result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                ?> <div class="produit_item">
            <div class="pro">
            
                   <a href="produit.php?idProduit=<?php echo $row['id'];?>"><img src= <?php echo $row['image'];?> alt="produit"></a>
                  
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


PUBLIC function getProductDetails(){

    $idProduit = $_GET["idProduit"];
    $myDataBase = new DataBaseConnectionManager();
  
    try
    {
        $myconn = $myDataBase->getConnection(); 
        $sql = "SELECT id, NomProduit, prix, prixdebase, image,details,pic1,pic2 
        from produit left join images on  produit.id = images.FKsurproduit where supprimer ='non'and id='$idProduit';";
        
        $result = $myconn->query($sql);
        
        if (!empty($result) && $result->num_rows > 0)
        {
    
            while($row = $result->fetch_assoc())
            {
                ?>
                <div>
                <?php echo $row['NomProduit']  ;?>
               
            </div>
        </div>
    
        </div> 
        <div id="prod_1" class="details_produit">
            <div class="image-grid">
                <img class="image-grid-col-2 image-grid-row-2" src="<?php echo $row['image'];?>" alt="drone">
                <img src="<?php echo $row['pic1'];?>" alt="drone2">
                <img src="<?php echo $row['pic2'];?>" alt="drone3">
            </div>
        </div>

        <div class="info_produit">
            <h2 class="titre_produit"> <?php echo $row['NomProduit'];?></h2>
            <p class="prix_produit"> <?php echo $row['prix'];?></p>
            <p class="des_produit">
            <?php echo $row['details'];?>
            </p>
        </div>

        <div class="button_start_with1">
            <button class="start_with1">  Ajouter au panier</button>
        </div>
        
    </div>
    
    </form>
</section>  

<section class="version_descktop">
    <div class="container_grid_descktop">

        <div class="image-grid">
            <img class="image-grid-col-2 image-grid-row-2" src="<?php echo $row['image'];?>" alt="1">
            <img src="<?php echo $row['pic1'];?>" alt="2">
            <img src="<?php echo $row['pic2'];?>" alt="3">
        </div>

        <div class="information_produit">
            <div>
                <div class="accueil">
                    <a class="text_accueil" href="#">Accueil</a>
                    <div class="fleche"> > </div>
                    <a class="text_categorie" href="produit.php">Catégorie de produits </a>
                    <div class="fleche"> > </div>
                    <div>
                    <?php echo $row['NomProduit'];?>
                    </div>
                    <div class="flex_coeur_panier" >
                        
                            <button  onclick="change()" class="coeur_logo" >
                                <svg  width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path  id="coeur"  fill-rule="evenodd" clip-rule="evenodd" d="M21.4326 4.0865C20.2545 2.9082 18.6948 2.26419 17.0299 2.26419C15.3653 2.26419 13.8006 2.91309 12.6226 4.09115L12.0072 4.70648L11.3823 4.08161C10.2041 2.90355 8.63493 2.25 6.97008 2.25C5.31013 2.25 3.74569 2.89866 2.5721 4.07207C1.39403 5.25032 0.745374 6.81481 0.750025 8.4796C0.750025 10.1442 1.40357 11.704 2.58164 12.8823L11.5398 21.8403C11.6637 21.9644 11.8307 22.0312 11.9928 22.0312C12.1551 22.0312 12.3221 21.969 12.446 21.8451L21.4231 12.9014C22.6013 11.7231 23.25 10.1587 23.25 8.49385C23.2549 6.82924 22.6109 5.26457 21.4326 4.0865ZM20.5168 11.9902L11.9928 20.481L3.48811 11.9761C2.5532 11.0411 2.03804 9.80094 2.03804 8.4796C2.03804 7.15831 2.54831 5.91812 3.48322 4.98809C4.41343 4.05782 5.65369 3.54267 6.97008 3.54267C8.29137 3.54267 9.53627 4.05782 10.4712 4.99274L11.5493 6.07064C11.802 6.32357 12.2075 6.32357 12.4605 6.07064L13.5288 5.00228C14.4637 4.06736 15.7086 3.55221 17.0253 3.55221C18.3417 3.55221 19.5819 4.06736 20.5168 4.99739C21.4517 5.93255 21.9623 7.17256 21.9623 8.49385C21.9669 9.81513 21.4517 11.0554 20.5168 11.9902Z" fill="black"/>
                                </svg>
                            </button>
      

                        <div class="panier_logo">
                            <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.746 14.663.004-10.518a.46.46 0 0 0-.462-.41h-2.956C12.304 1.98 10.822.563 9 .563c-1.821 0-3.304 1.417-3.332 3.172H2.712a.457.457 0 0 0-.462.41l.003 10.518c0 .014-.003.027-.003.04 0 1.198 1.135 2.172 2.532 2.172h8.436c1.397 0 2.532-.974 2.532-2.172 0-.013 0-.026-.004-.04ZM9 1.463c1.307 0 2.373 1.014 2.4 2.272H6.6C6.626 2.477 7.692 1.463 9 1.463Zm4.218 14.511H4.782c-.877 0-1.587-.56-1.6-1.25V4.638h2.483v1.368c0 .25.207.45.465.45.259 0 .466-.2.466-.45V4.639H11.4v1.368c0 .25.207.45.466.45s.466-.2.466-.45V4.639h2.45v10.085c-.013.69-.691 1.25-1.564 1.25Z" fill="#000"/></svg>
                        </div>
                    </div>
                </div>
             
            </div> 

            <div class="info_produit">
                <h2 class="titre_produit"> <?php echo $row['NomProduit'];?></h2>
                <p class="prix_produit"> <?php echo $row['prix'];?></p>
                <p class="des_produit">
                <?php echo $row['details'];?>
                </p>
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


