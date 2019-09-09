<?php

class QueryBuilder

{
	
	protected $dbpdo;

	function __construct($dbpdo)
	{
		$this-> dbpdo = $dbpdo;
	}

	public function selectAll($table)

	{
		$statement = $this->dbpdo->prepare("Select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters) 

	{
		$sql = sprintf(

			'insert into %s (%s) values (%s)',

			$table,

			implode(',', array_keys($parameters)),

			':'. implode(', :', array_keys($parameters))

		);

		try{

			$statement = $this->dbpdo->prepare($sql);

			$statement->execute($parameters);


		}catch(Exception $e) {

			die('Whoops, Something went wrong.');

		}
	}

}