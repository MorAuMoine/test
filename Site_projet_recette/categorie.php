<?php 
/**
  * 
  */
require 'class.php';
 class categorie
 {
 	public $id;
 	public $libelle;
 	public $tva;


 	function __construct($ID)
 	{
 		$this->id = $ID;
 		$this->GetComponant();
 	}


 	function GetComponant(){
 		$categorie = BDD::getInstance()->commande("select * from categorie where id = :id",array(':id' => $this->id));
 		$this->id = $categorie['id'];
 		$this->libelle = $categorie['libelle'];
 		$this->tva = $categorie['tva'];
 	}
 	function affichage(){
 		print $this->id;
 		print $this->libelle;
 		print $this->tva;
 	}
 } ?>