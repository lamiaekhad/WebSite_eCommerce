<?php


class utilisateur{

private $nom;
private $prenom;
private $username;
private $courriel;
private $motDePasse;
private $confirmation;

public function set_nom($nom){$this->nom=$nom;}
public function get_nom(){return $this->nom;}

public function set_prenom($prenom){$this->prenom=$prenom;}
public function get_prenom(){return $this->prenom;}

public function set_username($username){$this->username=$username;}
public function get_username(){return $this->username;}

public function set_courriel($courriel){$this->courriel=$courriel;}
public function get_courriel(){return $this->courriel;}

public function set_motDePasse($motDePasse){$this->motDePasse=$motDePasse;}
public function get_motDePasse(){return $this->motDePasse;}


public function set_confirmation($confirmation){$this->confirmation=$confirmation;}
public function get_confirmation(){return $this->confirmation;}

Public function __construct(){}


}

?>