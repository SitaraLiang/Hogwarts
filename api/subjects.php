<?php

require_once "../assets/php/Subject.php";

if(isset($_GET['q']) && !empty($_GET['q'])) {
    $searchQuery = $_GET['q'];

    $database = new Subject();
    header('Content-Type: application/json'); // ensure that the client correctly interprets the response data as JSON.
    if ($searchQuery === "allsubjects") {
        echo json_encode($database->getSubjects()); // json_encode: converts a PHP data structure (such as an array or an object) into a JSON (JavaScript Object Notation) string.
    } else if ($searchQuery === "owl") {
        echo json_encode($database->getOWTSubjects());
    } else if ($searchQuery === "newt") {
        echo json_encode($database->getNEWTSubjects());
    } else {
        echo json_encode($database->getSebjectByName($searchQuery));
    }

} else {
    $errorResponse = ['error' => 'Search query parameter is missing or empty'];
    header('Content-Type: application/json');
    json_encode($errorResponse);
}


