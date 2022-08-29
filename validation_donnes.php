
<?php

class validation{


public static function ValidationNom($nom)
{
    $valide=false;
    if (preg_match("/^[a-zA-Z]*$/",$nom))
    {
        $valide = true;

    }else{
        ?> <h3>Nom invalide</h3> <?php
    }
    return $valide;
}
public static function ValidationPrenom($prenom)
{
    $valide=false;
    if (preg_match("/^[a-zA-Z]*$/",$prenom))
    {
        $valide = true;

    }else{
        ?> <h3>prenom invalide</h3> <?php
    }
    return $valide;
}

public static function ValidationUserName($usernom)
{
    $valide=false;
    if (preg_match("/^[a-zA-Z0-9]*$/",$usernom))
    {
        $valide = true;
    }else{
        ?> <h3>Nom d'utilisateur non valide</h3> <?php
    }
    return $valide;
}

public static function ValidationEmail($email)
{
    $valide=false;
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $valide = true;
    }else{
        ?> <h3>Courriel non valide</h3> <?php
    }
    return $valide;
}









}






?>