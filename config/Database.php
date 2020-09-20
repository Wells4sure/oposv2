<?php 
namespace Config;
use Helpers\ServiceHelpers;

session_start();

class Database extends ServiceHelpers {

    protected $conn;

    // DB Connect
    public function __construct() {
    

      $this->conn = null;

      
    
      try { 
        $this->conn = new \PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      } catch(\PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
    
      }

      return $this->conn;
    }
  }