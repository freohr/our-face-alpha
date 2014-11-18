<?php

require_once 'core/context.class.php' ;
require_once 'core/dbconnection.class.php' ;
require_once 'core/Doctrine-1.2.4/Doctrine.php';
spl_autoload_register(array('Doctrine_Core', 'autoload'));

