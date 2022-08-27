
<?php

class validation{


public static function ValidationNom($nom)
{
    $valide=false;
    if (!preg_match("/^[a-zA-Z]*$/",$nom))
    {
        $valide = true;
    }
    return $valide;
}

public static function ValidationUserName($nom)
{
    $valide=false;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$nom))
    {
        $valide = true;
    }
    return $valide;
}

public static function ValidationEmail($email)
{
    $valide=false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $valide = true;
    }
    return $valide;
}









}






?>