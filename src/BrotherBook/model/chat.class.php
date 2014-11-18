<?php
// Classe definissant la table chat dans le SGBDR

class chat extends Doctrine_Record{

	public function setTableDefinition(){
        	// On définit le nom de notre table  :chat.
       $this->setTableName('chat');

    		//Puis, tous les champs
       $this->hasColumn('id', 'integer', 8, array('primary' => true,
         'autoincrement' => true));
       $this->hasColumn('emetteur', 'integer', 8);
       $this->hasColumn('post', 'integer', 8);
   }

   public function setUp()
   {
       $this->hasOne( 'utilisateur',
        array(
            'local'   => 'emetteur',
            'foreign' => 'id',
            )
        );

       $this->hasOne( 'post',
        array(
            'local'   => 'post',
            'foreign' => 'id',
            )
        );
   }
}
