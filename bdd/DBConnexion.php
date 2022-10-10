<?php

namespace Database;


use PDO;


class DBConnexion {

    private $dbname;
    private $host;
    private $port;
    private $username;
    private $password;
    private $pdo;

    public function __construct(string $dbname, string $host, int $port, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPDO(): PDO
    {

        // dsn : Data Source Name
        $dsn = "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname};user=$this->username;password=$this->password";

        try {
            
            return $this->pdo ?? $this->pdo = new PDO($dsn);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        
    }



}