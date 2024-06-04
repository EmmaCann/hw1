<?php


require_once('../../configurazione.php');
session_start(); 
header('Content-Type: application/json'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($_SESSION['id']) && isset($data['product_id'])) {
        $userID = $_SESSION['id']; 
        $productID = $data['product_id'];

        $sql = "INSERT INTO carrello (id_utente, productID) VALUES (?, ?)";
        $stmt = $connessione->prepare($sql);
        $stmt->bind_param("ii", $userID, $productID); 

        if ($stmt->execute()) {
            $response = ['success' => true, 'message' => 'Prodotto aggiunto al carrello con successo'];
          
        } else {
            $response = ['success' => false, 'message' => 'Errore nell\'aggiunta del prodotto nel carrello: ' . $stmt->error];
            
        }
        $stmt->close();

       
        $response = ['success' => true];
        echo json_encode($response);
    } else {
        
        $response = ['success' => false, 'message' => 'ID del prodotto non fornito'];
        echo json_encode($response);
    }
} else {
   
    $response = ['success' => false, 'message' => 'Richiesta non valida'];
    echo json_encode($response);
}





?>