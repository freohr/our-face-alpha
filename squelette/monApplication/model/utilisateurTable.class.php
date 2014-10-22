<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class utilisateurTable extends Doctrine_Table{

  public static function getUserByLoginAndPass($login,$pass){
  	$connection = dbconnection::getInstance() ;
	
	$req = Doctrine_Query::create()
  		->from('utilisateur u')
  		->where('u.identifiant = ?', $login)
		->andWhere('u.pass = ?', sha1($pass));

	$res=$req->fetchOne();

	$res=Doctrine_Core::getTable('utilisateur')->findOneByidentifiantAndpass($login, sha1($pass));
	
	if ($res == false){
		echo 'Erreur sql';
	}
	return $res; 
  }

}
