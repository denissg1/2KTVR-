<?php
class DBH {

	private $dbh;
	private $table;

//---------------------------------------------------------------------------

	public function DBH($table)
	{
		require_once 'config.php';

		$dsn = "mysql:host=$host; 
						dbname=$db; 
							charset=$charset";

		$opt = array (
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

		$this->dbh = new PDO($dsn, $user, $pass, $opt);
		$this->table = $table;
	}



//-------------------------------------------------------------------------

	public function getDBH()
	{

		return $this->dbh;

	} 

//-------------------------------------------------------------------------

	public function get_all_rows()
	{
		$sql = "SELECT * FROM $this->table";

		$stmt = $this->getDBH()->query($sql);
		$rows = array();
		while($row = $stmt->fetch())
		{
			$rows[] = $row;
		}
		return $rows;
	}
	
}