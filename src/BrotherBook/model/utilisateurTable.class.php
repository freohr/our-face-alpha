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

		if ($res == false){
			echo 'Erreur sql';
		}
		return $res; 
	}

	public static function getUserById($id){
		$connection = dbconnection::getInstance();

		$query = Doctrine_Query::create()
		->from('utilisateur u')
		->where('u.identifiant = ?', $id);

		$result = $query->fetchOne();

		if ($result == false){
			echo 'Erreur sql';
		}
		return $result; 

	}

	public static function getUsers(){
		$connection = dbconnection::getInstance();

		$query = Doctrine_Query::create()
		->from('utilisateur u');

		$result = Doctrine_Core::getTable('utilisateur')->findAll();

		return $result;
	}

}
