<?php
namespace App\Database;

class Database
{

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getDbData($table = '')
    {
        $query = $this->pdo->prepare("SELECT * FROM $table");

        $query->execute();
        return $query->fetchAll();
    }

    
}
