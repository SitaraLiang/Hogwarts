<?php

/*

Encapsulates the logic for connecting to a SQLite database using PDO, 
with error handling and default fetch mode settings. 
Other parts of the application can use this class to obtain a PDO instance for 
performing database operations.

*/

class Database {
    protected PDO $pdo; // PHP Data Objects

    public function __construct() {
        $this->pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite"); // __DIR__ represents the directory of the current file
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // fetch mode will return an associative array
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO will throw exceptions for errors
    }

    public function getPDO() : PDO{
        return $this->pdo;
    }

}