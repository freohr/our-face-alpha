<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController
{

	public static function helloWord($request,$context)
	{
		$context->mavariable="hello word";
		return context::SUCCESS;
	}


	public static function index($request,$context)
	{
		
		return context::SUCCESS;
	}

}