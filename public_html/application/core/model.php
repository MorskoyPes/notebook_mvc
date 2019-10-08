<?php
class Model
{
	function __construct()
	{
		$this->connect_db();
	}
	function connect_db()
	{
		if (!R::testConnection()) {
		R::setup( 'mysql:host = 127.0.0.1;
							 dbname=notes',
							 'root',
							 '');
		}

		if (!R::testConnection()) {
		exit ('Нет подключения к базе данных!');
		}
	}



}

?>