<?php
namespace App\Classes;

class User {
  private $UserId;
  private $UserName;
  private $Email;
  private $Active;
  private $db;

  function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function exists($UserId)
  {
    $sql = "SELECT * FROM users WHERE name=?";
    $stm = $this->pdo->prepare($sql);
    $stm->execute(array($UserId));
    return $stm->fetchColumn();
  }        
  
  public function create($name, $email, $active)
  {
    if($this->exists($name)){
     echo "existuje";
     return false;
    } else {

    $stmt = $this->pdo->prepare("INSERT INTO users (name, email, active) VALUES (? ,? ,?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $active);
    // use PARAM_STR although a number  
     if($stmt->execute()) {
      echo "vložen";
     }               
     else {
      echo "nevložen";
      } 
    }
  }  


  // the rest going to use the same approach
}


