<?php

class DataHandler{
	// private $host;
	// private $dbdriver;
	// private $dbname;
	// private $username;
	// private $password;
    
    public $dbh;

	public function __construct($host, $dbdriver, $dbname, $username, $password)
	{
		// $this->host = $host;
		// $this->dbdriver = $dbdriver;
		// $this->dbname = $dbname;
		// $this->username = $username;
		// $this->password = $password;

		try {
			$this->dbh = new PDO("$dbdriver:host=$host;dbname=$dbname", $username, $password);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e) {
			echo "Connection with ".$dbdriver." failed: ".$e->getMessage();
		}
	}

	public function __destruct()
	{
		$this->dbh = null;
	}

	public function createData($sql)
    {
		$this->dbh->query($sql);
		return $this->lastInsertId();
	}

	public function readData($sql)
    {
        $thing = $this->dbh->prepare($sql);
        $thing->execute();
        return $result = $thing->fetchAll();

		// return $this->dbh->query($sql,PDO::FETCH_ASSOC);
	}

	// public function readsData($sql)
    // {
	// 	// $this->query($sql);
	// 	return $this->dbh->query($sql,PDO::FETCH_ASSOC);
	// }

	public function updateData($sql)
    {
		$this->query($sql);
		return $this->rowCount();
	}

	public function deleteData($sql)
    {
		$sth = $this->dbh->query($sql);
		return $sth->rowCount();
	}

	public function query($query)
    {  
		$sth = $this->dbh->prepare($query);
		return $sth->execute();  
	}

	public function lastInsertId()
    {  
		return $this->dbh->lastInsertId();  
	}
}


?>