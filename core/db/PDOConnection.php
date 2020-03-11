<?php
namespace core\db;

use PDO;
use PDOException;

class PDOConnection 
{
    private $conn;
    /**
     * constructor
     * create database connection
     */
    public function __construct() 
    {
        $dns= 'mysql:host=marceloratton.com;dbname=mratton_clientes';
        $username= 'mratton_clientes';
        $passwd= 'R32X]X6bFHg~';

        try {
            $this->conn= new PDO($dns, $username, $passwd);
        } catch (PDOException $e) {
            debug($e);
        }
    }

    public function getConnection() : PDO 
    {
        return $this->conn;
    }
}