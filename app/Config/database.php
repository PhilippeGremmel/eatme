<?php
class DATABASE_CONFIG {

	private $cyril = false;

	public $default = array(
		'datasource' => 'Database/mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => ($cyril?'root':'cakephp'),
		'password' => ($cyril?'root':'cakephp'),
		'database' => 'cake_eatme',
		'encoding' => 'UTF8'
	);
}
