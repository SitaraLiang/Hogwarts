<?php

require_once 'Database.php';

class Candidate extends Database {

    public function __construct() {
        parent::__construct();
        $this->pdo->query('CREATE TABLE IF NOT EXISTS candidates (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            firstname VARCHAR(50) NOT NULL,
            lastname VARCHAR(50) NOT NULL,
            house VARCHAR(20) NOT NULL,
            grade VARCHAR(20) NOT NULL,
            message TEXT NOT NULL
        )');
    }

    public function insertCandidate(string $firstname, string $lastname, string $house, string $grade, string $message) : void {
        $stmt = $this->pdo->prepare("INSERT INTO candidates (`firstname`, `lastname`, `house`, `grade`, `message`) VALUES (:firstname, :lastname, :house, :grade, :message)");
        $stmt->bindValue(':firstname', $firstname);
        $stmt->bindValue(':lastname', $lastname);
        $stmt->bindValue(':house', $house);
        $stmt->bindValue(':grade', $grade);
        $stmt->bindValue(':message', $message);
        $stmt->execute();
    }

    public function getCandidates(): array
    {
        return $this->pdo->query('SELECT * FROM candidates')->fetchAll();
    }

}

