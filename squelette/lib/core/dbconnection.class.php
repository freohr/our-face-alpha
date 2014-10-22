<?php

define ('HOST', 'localhost') ;
define ('USER', ''  ) ;
define ('PASS', '' ) ;
define ('DB', 'M1' ) ;

require_once 'lib/core/Doctrine.php';
spl_autoload_register(array('Doctrine_Core', 'autoload'));

class dbconnection{

private static $instance=null,$connection;
private $error=null ;

private function __construct(){
  	try{
		$dsn='pgsql://'.USER.':'.PASS.'@'.HOST.'/'.DB; 
       		self::$connection = Doctrine_Manager::connection($dsn);;
	}catch( Doctrine_Connection_Exception $e ){
		$this->error =  $e->getMessage();
		//echo $this->error."<br>";
	}
}	

public static function getInstance(){
	if(self::$instance == null){
		self::$instance = new dbconnection();
	}
	return self::$instance;
}

public function closeConnection(){
	Doctrine_Manager::getInstance()->closeConnection(self::$connection);
	self::$instance=null;
}

public function __clone(){
	
}

public function getError(){
	return $this->error;
}

}
