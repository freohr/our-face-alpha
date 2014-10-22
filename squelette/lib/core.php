<?php

require_once 'core/context.class.php' ;
require_once 'core/dbconnection.class.php' ;
require_once 'core/Doctrine.php';
spl_autoload_register(array('Doctrine_Core', 'autoload'));

