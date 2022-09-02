<?php
include "header_code.php";
?>
<section class="version_mobile">
    <div class="wrapi2">
           <div class="search">
              <input type="search" class="searchTerm" placeholder="   Recherche...">
              <button type="submit" class="searchButton">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"/></svg>
             </button>
           </div>
        </div>
    <div class="container_flex">
        <div>
            <div class="accueil">
                <a class="text_accueil" href="#">Accueil</a>
            <div class="fleche"> > </div>
            <a class="text_categorie" href="produit.php">Catégorie de produits </a>
            <div class="fleche"> > </div>
            <div>
                produit #1
            </div>
        </div>
    
        </div> 
        <div id="prod_1" class="details_produit">
            <div class="image-grid">
                <img class="image-grid-col-2 image-grid-row-2" src="Image\drone1.jpg" alt="drone">
                <img src="Image\drone2.jpg" alt="drone2">
                <img src="Image\drone3.jpg" alt="drone3">
            </div>
        </div>
        <div class="info_produit">
            <h2 class="titre_produit"> Produit #1</h2>
            <p class="prix_produit"> $ 68.99</p>
            <p class="des_produit">
                Brand DJI, Colour Gray, Mirror adjustment Remote Control,
                Media type Micro SD,<br> Video capture resolution FHD 1080p
            </p>
        </div>
        <div class="button_start_with1">
            <button class="start_with1">  Ajouter au panier</button>
        </div>
    </div>
</section>  

<section class="version_descktop">
    <div class="container_grid_descktop">

        <div class="image-grid">
            <img class="image-grid-col-2 image-grid-row-2" src="Image\drone1.jpg" alt="drone">
            <img src="Image\drone2.jpg" alt="drone2">
            <img src="Image\drone3.jpg" alt="drone3">
        </div>

        <div class="information_produit">
            <div>
                <div class="accueil">
                    <a class="text_accueil" href="#">Accueil</a>
                    <div class="fleche"> > </div>
                    <a class="text_categorie" href="produit.php">Catégorie de produits </a>
                    <div class="fleche"> > </div>
                    <div>
                        produit #1
                    </div>
                    <div class="flex_coeur_panier" >
                        <div class="coeur_logo">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4326 4.0865C20.2545 2.9082 18.6948 2.26419 17.0299 2.26419C15.3653 2.26419 13.8006 2.91309 12.6226 4.09115L12.0072 4.70648L11.3823 4.08161C10.2041 2.90355 8.63493 2.25 6.97008 2.25C5.31013 2.25 3.74569 2.89866 2.5721 4.07207C1.39403 5.25032 0.745374 6.81481 0.750025 8.4796C0.750025 10.1442 1.40357 11.704 2.58164 12.8823L11.5398 21.8403C11.6637 21.9644 11.8307 22.0312 11.9928 22.0312C12.1551 22.0312 12.3221 21.969 12.446 21.8451L21.4231 12.9014C22.6013 11.7231 23.25 10.1587 23.25 8.49385C23.2549 6.82924 22.6109 5.26457 21.4326 4.0865ZM20.5168 11.9902L11.9928 20.481L3.48811 11.9761C2.5532 11.0411 2.03804 9.80094 2.03804 8.4796C2.03804 7.15831 2.54831 5.91812 3.48322 4.98809C4.41343 4.05782 5.65369 3.54267 6.97008 3.54267C8.29137 3.54267 9.53627 4.05782 10.4712 4.99274L11.5493 6.07064C11.802 6.32357 12.2075 6.32357 12.4605 6.07064L13.5288 5.00228C14.4637 4.06736 15.7086 3.55221 17.0253 3.55221C18.3417 3.55221 19.5819 4.06736 20.5168 4.99739C21.4517 5.93255 21.9623 7.17256 21.9623 8.49385C21.9669 9.81513 21.4517 11.0554 20.5168 11.9902Z" fill="black"/>
                            </svg>
                        </div>
                        <div class="panier_logo">
                            <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="m15.746 14.663.004-10.518a.46.46 0 0 0-.462-.41h-2.956C12.304 1.98 10.822.563 9 .563c-1.821 0-3.304 1.417-3.332 3.172H2.712a.457.457 0 0 0-.462.41l.003 10.518c0 .014-.003.027-.003.04 0 1.198 1.135 2.172 2.532 2.172h8.436c1.397 0 2.532-.974 2.532-2.172 0-.013 0-.026-.004-.04ZM9 1.463c1.307 0 2.373 1.014 2.4 2.272H6.6C6.626 2.477 7.692 1.463 9 1.463Zm4.218 14.511H4.782c-.877 0-1.587-.56-1.6-1.25V4.638h2.483v1.368c0 .25.207.45.465.45.259 0 .466-.2.466-.45V4.639H11.4v1.368c0 .25.207.45.466.45s.466-.2.466-.45V4.639h2.45v10.085c-.013.69-.691 1.25-1.564 1.25Z" fill="#000"/></svg>
                        </div>
                    </div>
                </div>
             
            </div> 

            <div class="info_produit">
                <h2 class="titre_produit"> Produit #1</h2>
                <p class="prix_produit"> $ 68.99</p>
                <p class="des_produit">
                    Brand DJI, Colour Gray, Mirror adjustment Remote Control,
                    Media type Micro SD,<br> Video capture resolution FHD 1080p
                </p>
            </div>

            <div class="button_start_with1">
                <button class="start_with1">  Ajouter au panier</button>
            </div>
        </div>
    </div>
</section>  

<?php
include "footer.php";
?>