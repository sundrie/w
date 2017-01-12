<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		// Routes concernant les articles
		['GET', '/articles/', 'ArticlesController#afficher', 'articles'],
		['GET', '/articles/afficher/', 'ArticlesController#afficher', 'afficher_articles'],
		['GET|POST', '/articles/poster/', 'ArticlesController#poster', 'poster_articles'],
		['GET|POST', '/articles/modifier/', 'ArticlesController#modifier', 'modifier_articles'],

		//  Routes concernant les utilisateurs
		['GET|POST', '/users/', 'UsersController#afficher', 'users'],
		['GET|POST', '/users/inscription/', 'UsersController#inscriptionform', 'inscription'],
		['GET|POST', '/users/connexion/', 'UsersController#connexionform', 'connexion']
	);
