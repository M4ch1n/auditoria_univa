<?php

class Database {

	protected static $conn;

	function __construct() {
		self::$conn = $this->connect();
	}

	public function connect() {
		
		if(!isset(self::$conn)) {

			$config = parse_ini_file('config.ini');
			try {
				self::$conn = new PDO('mysql:host='. $config['host'] . ';dbname=' . $config['database'] . '', $config['username'], $config['password']);	
				self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo 'Error: ' . $e->getMessage();
			}			
		}

		return self::$conn;
	}

	public function query($sql, $params) {

		try {
			$stmt = self::$conn->prepare($sql);
			$stmt->execute($params);

			return($stmt);	
		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}		
	}

	public function getAll($sql) {
		echo $sql;
		try {

			$stmt = self::$conn->query( $sql );
			
			return $stmt;

		} catch (PDOException $e) {
			echo 'Error: ' . $e->getMessage();
		}

	}

}