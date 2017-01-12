<?php

namespace Controller;

use \W\Controller\Controller;


class ArticlesController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function afficher()
	{
		$this->show('articles/home');
	}

	public function poster(){
		$this->show('articles/poster');
	}
}
