<?php

class CRUDController{
	private $server_name='localhost';
	private $user_name='root';
	private $password='';
	private $db_name='test';
	private $connection=null;

	public function __construct()
	{
	  $this->connection=new PDO("mysql:host=$this->server_name; dbname=$this->db_name", $this->user_name,$this->password);
     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

  public function index($query)
  {
      $statement=$this->connection->prepare($query);
      $statement->execute();

      $statement->setFetchMode(PDO::FETCH_OBJ);
      return $statement->fetchAll();
  }

  public function show($query)
  {
  	$statement=$this->connection->prepare($query);
     $statement->execute();

     $statement->setFetchMode(PDO::FETCH_OBJ);
      return $statement->fetch();
  }

  public function store($query)
  {
  	$statement=$connection->prepare($query);
     $statement->execute();
  }

   public function update($query)
  {
  	$statement=$this->connection->prepare($query);
    $statement->execute();
  }

  public function delete($query)
  {
  	$statement=$this->connection->prepare($query);
	$statement->execute();
  }

   public function __destruct()
	{
		$this->connection=null;
	}

}

?>