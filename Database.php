<?php
class Db {

	// The database connection
	protected static $connection;

	public function connect() {

		if(!isset(self::$connection)){
			$config = parse_ini_file('config.ini');		
			self::$connection = new mysqli('127.0.0.1', $config['username'], $config['password'], $config['dbname']);
		}

		//var_dump(self::$connection);
		if(self::$connection == false) {
			// Handler error - notify administrator, log to a file, show an error screen, etc. 
			echo "Database error";
			return false;
		}
		return self::$connection;
	}

	public function query($query) {

		//Connect to the database
		$connection= $this->connect();

		//Query the database
		$result = $connection->query($query);
	
		return $result;
	}

	public function select($query) {
		
		$row = array();
		$result = $this->query($query);

		if($result === false) {
			return false;
		}

		while( $row = $result->fetch_assoc()){
			$rows[] = $row;
		}

		return $rows;
	}

	public function error(){
		$connection = $this->connect();
		return $connection->error;
	}

	public function quote($value) {
		$connection = $this->connect();
		return " ' " . $connection->real_escape_string($value) ." ' ";
	}

}
?>