<?php

class Bd {
    private $conn;
    
    function __construct() {
        
        /* Connect to a MySQL database using driver invocation */
        $dsn = 'mysql:dbname=id15541598_bancofelipe;host=localhost';
        $user = 'id15541598_felipe';
        $password = 'wv2UF\OyZi/!tq#1';
        
        try {
           $this->conn  = new PDO($dsn, $user, $password);
           
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

    }
  
    /**
     * Só trabalha com select 
     * */
    function query($sql) {
        
        try {
           return $this->conn->query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }

        
    }
    
    /**
     * Só trabalha com insert, update, delete 
     * */
    function exec($sql) {
        
        try {
           return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }

        
    }
  

  
}

?>