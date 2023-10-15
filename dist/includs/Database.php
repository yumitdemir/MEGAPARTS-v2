<?php

class Database
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    private $pdo;

    public function __construct($servername = "localhost", $username = "root", $password = "", $dbname = "task_8", $charset = "utf8mb4")
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->charset = $charset;

        $this->Connect();
    }

    private function Connect()
    {
        try {
            $dsn = "mysql:host={$this->servername};dbname={$this->dbname};charset={$this->charset}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("PDO Error:" . $e);
        }

    }

    public function executeQuery($query, $params = [])
    {
        $satement = $this->pdo->prepare($query);
        $satement->execute($params);
        return $satement;
    }
}