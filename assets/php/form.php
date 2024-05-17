<?php

require_once './Candidate.php';

// htmlspecialchars: prevent XSS (Cross-Site Scripting) attacks by escaping characters that have special meaning in HTML.
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$house = htmlspecialchars($_POST['house']);
$grade = htmlspecialchars($_POST['grade']);
$message = htmlspecialchars($_POST['message']);

// var_dump => pour débuguer

if ($firstname !== '' && $lastname !== '' && $message !== '' && $house != '' && $grade != '' 
    && is_string($firstname) && is_string($lastname) && is_string($house) && is_string($grade) && is_string($message)
    && strlen($firstname) < 50 && strlen($lastname) < 50 && strlen($message >= 200)) 
{
    $candidate = new Candidate();
    $candidate->insertCandidate($firstname, $lastname, $house, $grade, $message);

    header('Location: /registration.php');
}