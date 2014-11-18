<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */
class mainController
{
	/* --------Test TP1--------- */

	public static function helloWord($request,$context)
	{
		$context->mavariable="hello word";
		return context::SUCCESS;
	}

	public static function superTest($request,$context)
	{
		if(isset($_REQUEST['param1']) && isset($_REQUEST['param2']))
		{
			$context->param1 = $_REQUEST['param1'];
			$context->param2 = $_REQUEST['param2'];
			return context::SUCCESS;
		}
		else
		{
			return context::ERROR;
		}		
	}

	/* ------------------------ */

	public static function index($request,$context)
	{		
		return context::SUCCESS;
	}

	public static function login($request,$context)
	{
		if(!empty($request['idUser']))
		{
			$context->identifiant = $request['idUser'];

			if(!empty($request['passUser']))
			{
				// à faire -> match le login avec la db
				
				require_once 'BrotherBook/model/chat.class.php';
				require_once 'BrotherBook/model/message.class.php';
				require_once 'BrotherBook/model/post.class.php';
				require_once 'BrotherBook/model/utilisateur.class.php';

				$utilisateurTable = new utilisateurTable();

				if($utilisateurTable->getUserByLoginAndPass($request['idUser'],$request['passUser']) == false)
				{
					$context->error = "Identifiant ou Mot de Passe invalide";
					return context::ERROR;
				} else {
					session_start();

					$context->setSessionAttribute('identifiant', $context->identifiant);
					$context->isLogged = true;

					return context::SUCCESS;
				}			
			}
			else
			{
				$context->error= "Mot de passe vide";
				$context->isLogged = false;
				return context::ERROR;
			}
		} else {
			$context->error= "Identifiant vide";
		}
		return context::ERROR;
	}

	public static function profil($request,$context)
	{
		return context::SUCCESS;
	}


}
