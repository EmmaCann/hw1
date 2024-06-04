<?php


require_once('../../configurazione.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($_SESSION['id']) && isset($data['product_id'])) { 
        $userID = $_SESSION['id']; 
        $productID = $data['product_id'];

        $sql = "INSERT INTO preferiti (id_utente, productID) VALUES (?, ?)"; 

        $stmt = $connessione->prepare($sql);
        $stmt->bind_param("ii",$userID,$productID);  
        if ($stmt->execute()) {
            echo json_encode(['success' => true]); 
           
        } else {
            
            echo json_encode(['success' => false, 'message' => $stmt->error]); 
        }
        $stmt->close();

    } else {
        
        $response = ['success' => false, 'message' => 'ID del prodotto non fornito'];
        echo json_encode($response);
    }
} else {
   
    $response = ['success' => false, 'message' => 'Richiesta non valida'];
    echo json_encode($response);
}





?>