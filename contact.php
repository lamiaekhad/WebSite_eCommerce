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
        <div class="contenu_contact">
        <h2 class="contact_us"> Contact us!</h2>
                     <p class="text_please_fill">Please fill out this from to send your messaage:</p>
                     
            <div class="flex_contact">
           
                <div class="input_contact">
                     <div>
                        <form method="POST" action="contact.php">

                           <input class="input_text" type="text" id="fname" name="Name" placeholder="Name" required>
                           <input class="input_text" type="text" id="Sname" name="Surnames" placeholder="Surnames" required>
                           <input class="input_text" type="text" id="email" name="Email" placeholder="Email" required>
                           <input class="input_text" type="text" id="subject" name="Subject" placeholder="Subject"required>
                           <textarea class="input_text" id="subject" name="message" placeholder="Message" style="height:130px" required></textarea>
                        
                            <div class="button_start_with_send">
                                <input class="send" type="submit" name="send" value="Send">
                            </div> 

                        </form>  
                     </div>
                </div>

                <?php

$myDataBase = new DataBaseConnectionManager();

if (isset($_POST['send']))
{
        $name = htmlspecialchars($_POST['Name']);
        $Surnames = htmlspecialchars($_POST['Surnames']);
        $courriel = htmlspecialchars($_POST['Email']);
        $subject= htmlspecialchars($_POST['Subject']);
        $message=htmlspecialchars($_POST['message']);

    if (!validation::ValidationNom($name) && !validation::ValidationUserName($Surnames) && !validation::ValidationEmail($courriel))
    {
        ?> <h3>Verifier les donnees</h3> <?php
    }
    else
    {
        try{
            $myconn = $myDataBase->getConnection(); 
            $sql="INSERT INTO contact (Nomcontact, usernameContact , courriel ,sujet , message ) VALUES (?,?,?,?,?);";
            $stmt = $myconn->prepare($sql);

            $stmt->bind_param("sssss" ,$name , $Surnames ,$courriel ,$subject ,$message);
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
                ?>

            
                <div>
                     <div class="info_contact">
                         <svg class="ecouteurs_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6907 12.0952C22.6907 9.26511 21.5884 6.60262 19.5882 4.60234C17.5881 2.60222 14.9256 1.5 12.0952 1.5C9.26511 1.5 6.60262 2.60222 4.60234 4.60234C2.60222 6.60262 1.5 9.26511 1.5 12.0952V17.1117C1.5 19.9465 3.80859 22.2551 6.64338 22.2551C6.98356 22.2551 7.25575 21.9831 7.25575 21.6429V12.5852C7.25575 12.245 6.98356 11.9728 6.64338 11.9728C5.07404 11.9728 3.66793 12.6759 2.72474 13.7871V12.0952C2.72474 6.9293 6.9293 2.72474 12.0952 2.72474C17.2614 2.72474 21.466 6.9293 21.466 12.0952C21.466 12.1362 21.4704 12.1769 21.4795 12.2177C21.4704 12.2587 21.466 12.2994 21.466 12.3402V14.032C20.5226 12.9209 19.1165 12.2177 17.5471 12.2177C17.2069 12.2177 16.9347 12.4899 16.9347 12.8301V21.8879C16.9347 22.2281 17.2069 22.5 17.5471 22.5C20.3819 22.5 22.6907 20.1915 22.6907 17.3567V12.3402C22.6907 12.2994 22.6861 12.2587 22.677 12.2177C22.6861 12.1769 22.6907 12.1362 22.6907 12.0952ZM6.02655 13.2429V20.9808C4.1578 20.6857 2.72005 19.0622 2.72005 17.1117C2.7247 15.1615 4.1578 13.5376 6.02655 13.2429ZM18.1642 21.2257V13.4878C20.0327 13.7826 21.4704 15.4064 21.4704 17.3566C21.466 19.3115 20.0327 20.9307 18.1642 21.2257Z" fill="black"/>
                         </svg>
                         <img class="women_img" src="Image\Woman_1.png" alt="woman">
                         <p class="text_if_you">If you have an urgent query you can call us: </p>
                         <p class="text_numero1">
                             T.(+34) 915 805 007
                         </p>
                         <p class="text_numero2">  
                              F.(+34) 915 806 082
                         </p>
                     </div>
                     <div class="localisation">
                         <svg class="logo_localisation" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 9.62014C2.25 4.31702 6.56702 0 11.8701 0C17.1733 0 21.4903 4.31702 21.5001 9.62014C21.5001 10.2238 21.4399 10.8325 21.3291 11.4264C21.3242 11.4614 21.3041 11.5674 21.2637 11.7484C21.1178 12.4024 20.9014 13.0365 20.6196 13.6453C19.5834 16.0856 17.299 19.8338 12.3028 23.8489C12.177 23.9496 12.0261 24 11.875 24C11.7242 24 11.5731 23.9496 11.4473 23.8489C6.44614 19.8338 4.16697 16.0856 3.1305 13.6453C2.84874 13.0365 2.63226 12.3975 2.4866 11.7484C2.44629 11.5674 2.42616 11.4614 2.42101 11.4264C2.30528 10.8325 2.25 10.2238 2.25 9.62014ZM19.9785 11.2048C19.9798 11.1998 19.9811 11.1949 19.9811 11.19C20.0816 10.6768 20.1319 10.1483 20.1319 9.61496C20.1319 5.06159 16.4237 1.35343 11.8704 1.35343C7.31681 1.35343 3.60884 5.06159 3.60884 9.61496C3.60884 10.1434 3.65891 10.6667 3.75966 11.1848C3.75966 11.1931 3.76114 11.1998 3.76247 11.2059C3.76357 11.2109 3.76456 11.2154 3.76456 11.2199C3.76569 11.2254 3.76704 11.2333 3.76879 11.2435C3.77506 11.28 3.78637 11.3459 3.81004 11.4364V11.4465C3.94073 12.01 4.12695 12.5636 4.36846 13.0866C4.37107 13.0892 4.37236 13.0931 4.37363 13.0969C4.37488 13.1006 4.3761 13.1043 4.37852 13.1067C5.31946 15.3357 7.38241 18.7371 11.8704 22.4451C16.3583 18.7371 18.4213 15.3357 19.362 13.1067C19.3646 13.1042 19.3659 13.1003 19.3672 13.0965C19.3684 13.0928 19.3696 13.0891 19.372 13.0866C19.6187 12.5584 19.8049 12.01 19.9307 11.4465V11.4364C19.9558 11.3207 19.971 11.2453 19.9759 11.2199C19.9759 11.2149 19.9772 11.2098 19.9785 11.2048ZM5.76217 9.72585C5.76217 6.35983 8.50435 3.61764 11.8704 3.61764C15.2363 3.61764 17.9783 6.35983 17.9783 9.72585C17.9783 13.0918 15.2363 15.8341 11.8704 15.8341C8.50435 15.8341 5.76217 13.0918 5.76217 9.72585ZM7.12048 9.7258C7.12048 12.3419 9.24877 14.4754 11.8701 14.4754C14.4915 14.4754 16.6197 12.3419 16.6197 9.7258C16.6197 7.10933 14.4864 4.97614 11.8701 4.97614C9.25367 4.97614 7.12048 7.10933 7.12048 9.7258Z" fill="#007EF3"/>
                         </svg>
                         
                         <p class="text_find_offices">Find our offices easily in our search engine.</p>
                     </div>
                </div>

            </div>

        </div>
        
    </section>
    <section>
        <div class="section_button_start">
            <div class="text_last_section">
                <p class="text_do_you_want" >Do you want to start with B-system today?</p>
            </div>
            <div class="button_start_with">
                <button class="start_with"> Start with B_system </button>
            </div>
        </div>
    </section>

<?php
include "footer.php";
?>