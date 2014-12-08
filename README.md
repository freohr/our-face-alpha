our-face-alpha
==============

personnal project - learning php



TP 2

Question sur userTable -> findOneByidentifiantAndpass()

la fonction user -> setTableDefinition() permet de définir dans l'application php un mapping avec les colonnes de la table user de la BDD. Ensuite Doctrine_Table définit une fonction findOneByParam1($param1) qui permet de créer une requete SQL sur la table avec un where(Param1 = $param1) (ici Where(identifiant = $id AND pass = $pass), avec pass hashé)
