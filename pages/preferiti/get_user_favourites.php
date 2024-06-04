<?php
require_once('../../configurazione.php');
session_start();

$response = ['success' => false, 'favourites' => [], 'message' => ''];

if (isset($_SESSION['id']) && $_SESSION['id'] !== null) {
    $userID = $_SESSION['id'];
    $sql = "SELECT productID FROM preferiti WHERE id_utente = ?";
    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();



     if ($result) {
         while ($row = $result->fetch_assoc()) {
             $response['favourites'][] = $row['productID'];
         }
         $response['success'] = true;
     } else {
         $response['message'] = 'Query fallita: ' . $connessione->error;
     }
     $stmt->close();
 } else {
     $response['message'] = 'Utente non loggato';
 }

$connessione->close();
echo json_encode($response);
?>
