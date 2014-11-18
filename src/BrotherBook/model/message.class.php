<?php
// Classe definissant la table message dans le SGBDR

class message extends Doctrine_Record{

	public function setTableDefinition(){
        	// On définit le nom de notre table  :message.
       $this->setTableName('message');

    		//Puis, tous les champs
       $this->hasColumn('id', 'integer', 8, array('primary' => true,
         'autoincrement' => true));
       $this->hasColumn('emetteur', 'integer', 8);
       $this->hasColumn('destinataire', 'integer', 8);
       $this->hasColumn('parent', 'integer', 8);
       $this->hasColumn('post', 'integer', 8);
       $this->hasColumn('aimer', 'integer', 8);


   }

   public function setUp()
   {
     $this->hasOne( 'utilisateur',
        array(
            'local'   => 'emetteur',
            'foreign' => 'id',
            )
        );

          $this->hasOne( 'utilisateur',
        array(
            'local'   => 'destinataire',
            'foreign' => 'id',
            )
        );

     $this->hasOne( 'post',
        array(
            'local'   => 'post',
            'foreign' => 'id',
            )
        );

    $this->hasOne( 'message',
        array(
            'local'   => 'parent',
            'foreign' => 'id',
            )
        );
 }
}
