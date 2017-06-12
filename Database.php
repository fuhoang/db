<?php
class Db {

	// The database connection
	protected static $connection;

	public function connect() {

		$config = parse_ini_file('./config.ini');
		self::$connection = new mysqli('localhost', $config['username'], $config['password'], $config['dbname']);

		print_r($config);
	}
}
?>