<?php
// Classe definissant la table post dans le SGBDR

class post extends Doctrine_Record{

	public function setTableDefinition(){
        	// On définit le nom de notre table  :post.
        	$this->setTableName('post');
        
    		//Puis, tous les champs
        	$this->hasColumn('id', 'integer', 8, array('primary' => true,
                           'autoincrement' => true));
        	$this->hasColumn('identifiant', 'string', 45);

    	}
    
    public function setUp()
    {
        
    }
}
