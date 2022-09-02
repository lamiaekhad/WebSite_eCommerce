<?php
include "controller.php";
include "header_code.php";
?>
<section>
    <div class="wrapi2">
        <div class="search">
            <input type="search" class="searchTerm" placeholder="   Recherche...">
                <button type="submit" class="searchButton">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"/></svg>
                </button>
        </div>
    </div>
    <h1 class="titre_acces">
        Accès
    </h1>
    <p class="text_login"> Hello, enter your username and password:</p>

    <div class="login_container">
        <div class="input_Acces">
            <form method="POST" action="acces.php">
                <input class="input_text" type="text" id="fname" name="User" required>
                <input class="input_text" type="password" id="Sname" name="motdepasse"  required>
                <div class="button_start_with1">
                        <input class="start_with1" type="submit" name="login" value="Sign in"> 
                </div>
            </form>
        </div>
<?php

$control = new controller();
$control->getLogin();

?>

        <a href="#"><p class="text_forget"> Forgot your password?</p></a>
        <a href="formulaire_inscription.php"><p class="text_forget"> Créer un nouveau compte </p></a>
    </div>
   
</section>

<?php
include "footer.php";
?>