<?php
// Inclusion de la classe chat
//require_once "chat.class.php";
// Classe definissant les methodes associees a la table chat (fille de Doctrine_Table)
class chatTable extends Doctrine_Table{

	public static function getChatById($id){
		$connection = dbconnection::getInstance();

		$query = Doctrine_Query::create()
		->from('chat c')
		->where('c.id = ?', $id);

		$result = $query->fetchOne();

		if ($result == false){
			echo 'Erreur sql';
		}
		return $result; 

	}

	public static function getChats(){
		$connection = dbconnection::getInstance();

		$result = Doctrine_Core::getTable('chat')->findAll();

		return $result;
	}

	public static function getLastChat(){
				$connection = dbconnection::getInstance();

		$query = Doctrine_Query::create()
		->from('chat c')
		->innerJoin('c.post p')
		->orderBy('p.date', 'DESC');

		$result = $query->fetchOne();

	}

}
