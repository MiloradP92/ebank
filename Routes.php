<?php

	return [
		App\Core\Route::get('|^pregled_racuna$|', 'Racun', 'list'),
		App\Core\Route::get('|^prenos$|', 'Racun', 'prenos'),
		App\Core\Route::post('|^zapocni_prenos$|', 'Racun', 'zapocniPrenos'),
		App\Core\Route::get('|^nalog$|', 'Main', 'nalog'),
		App\Core\Route::get('|^login$|', 'Main', 'getLogin'),
		App\Core\Route::post('|^login$|', 'Main', 'postLogin'),
		App\Core\Route::get('|^profile$|', 'UserDashboard', 'index'),

		App\Core\Route::get('|^api/racun/([0-9]+)/?$|', 'RacunAPI', 'preuzmiInfoORacunu'),
		App\Core\Route::get('|^api/transakcije/([0-9]+)/?$|', 'RacunAPI', 'preuzmiInfoOTransakcijama'),

		App\Core\Route::any('|^.*$|', 'Main', 'home')
	];	