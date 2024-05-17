<?php

require_once "../assets/php/Candidate.php";


$database = new Candidate();


header('Content-Type: application/json');
echo json_encode($database->getCandidates());
