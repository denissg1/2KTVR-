<?php
class DBH {

	private $dbh;


	public function DBH()
	{
		require_once 'config.php';

		$dsn = "mysql:host=$host; 
						dbname=$db; 
							charset=$charset";

		$opt = array (
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

		$this->dbh = new PDO($dsn, $user, $pass, $opt);
	}




	public function getDBH()
	{

		return $this->dbh;

	} 
	
}