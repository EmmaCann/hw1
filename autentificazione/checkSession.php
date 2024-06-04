

<?php
session_start();
header('Content-Type: application/json');

$response = ['logged' => false];

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    $response['logged'] = true;
    $response['userID'] = $_SESSION['id']; 
    $response['username'] = $_SESSION['username']; 
}

echo json_encode($response);
?>






