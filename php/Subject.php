<?php

require_once 'Database.php';

class Subject extends Database { 
                    
    public function __construct() {
        parent::__construct();
        $this->pdo->query('CREATE TABLE IF NOT EXISTS subjects (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name VARCHAR(50) NOT NULL,
            description TEXT NOT NULL,
            is_OWL INTEGER NOT NULL,
            is_NEWT INTEGER NOT NULL
        )');
    }

    public function insertSubject(string $name, string $description, int $is_OWL, int $is_NEWT) : void {
        $stmt = $this->pdo->prepare("INSERT INTO subjects (`name`, `description`, `is_OWL`, `is_NEWT`) VALUES (:name, :description, :is_OWL, is_NEWT)");
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':description', $description);
        $stmt->bindValue(':is_OWL', $is_OWL);
        $stmt->bindValue(':is_NEWT', $is_NEWT);
        $stmt->execute();
    }

    public function getSubjects(): array
    {
        return $this->pdo->query('SELECT * FROM subjects')->fetchAll();
    }

    public function getOWTSubjects(): array {
        return $this->pdo->query('SELECT * FROM subjects WHERE IS_OWL is 1')->fetchAll();
    }

    public function getNEWTSubjects(): array {
        return $this->pdo->query('SELECT * FROM subjects WHERE IS_NEWT is 1')->fetchAll();
    }

    public function getSebjectByName($name): array {
        $stmt = $this->pdo->prepare('SELECT * FROM subjects WHERE name is :name');
        $stmt->bindValue(':name', $name);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}