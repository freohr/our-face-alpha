<?php
// Classe definissant la table utilisateur dans le SGBDR

class utilisateur extends Doctrine_Record{

	public function setTableDefinition(){
        	// On définit le nom de notre table  :utilisateur.
        	$this->setTableName('utilisateur');
        
    		//Puis, tous les champs
        	$this->hasColumn('id', 'integer', 8, array('primary' => true,
                           'autoincrement' => true));
        	$this->hasColumn('identifiant', 'string', 45);
        	$this->hasColumn('pass', 'string', 45);
    		$this->hasColumn('nom', 'string', 45);
    		$this->hasColumn('prenom', 'string', 45);
    		$this->hasColumn('date_de_naissance', 'timestamp', 4000);
    		$this->hasColumn('statut', 'string', 100);
    		$this->hasColumn('avatar', 'string', 200);
    	}
    
    public function setUp()
    {
        
    }
}
