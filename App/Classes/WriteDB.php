<?php

namespace App\Classes;

/**
* 
*/
class ReadDB
{
	private $select;
	private $from;	
	private $table;
	private $where;
	private $order;
	private $limit;
	private $offset;



    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

        //$query = $this->pdo->prepare("SELECT * FROM $table");    


	public function select($select = '*')
	{
		$this->select = $select;
		return $this;
	}	

	public function from($from)
	{
		$this->from = $from;
		return $this;
	}	


	public function where($where)
	{
		$this->where = " WHERE ".$where;
		return $this;
	}	

	public function order($order, $sort = 'ASC')
	{
		$this->order = " ORDER BY ".$order." ".$sort;
		return $this;
	}	

	public function limit($limit, $offset = null)
	{
		$this->limit  = " LIMIT " .$limit;
		$this->offset = " OFFSET ".$offset;
		return $this;
	}	

	public function result()
	{
		
        $query = $this->pdo->prepare("INSERT INTO $this->table");
        $query->execute();
        return $query->fetchAll();

	}
}