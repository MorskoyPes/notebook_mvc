<?php
require 'rb/rb.php';

R::setup( 'mysql:host = 127.0.0.1;
 dbname=notebook',
 'root',
 '');

if (!R::testConnection()) {
	exit ('Нет подключения к базе данных!');
}

require_once 'application/core/model.php';
require_once 'application/core/view.php';
require_once 'application/core/controller.php';
require_once 'application/core/route.php';
Route::start(); // запускаем маршрутизатор

?>