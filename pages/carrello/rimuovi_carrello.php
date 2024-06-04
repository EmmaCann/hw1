<?php
require_once('../../configurazione.php');


session_start();
header('Content-Type: application/json');
$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($_SESSION['id']) && isset($data['product_id'])) {
        $userID = $_SESSION['id']; 
        $productID = $data['product_id'];

        $sql = "DELETE FROM carrello WHERE id_utente = ? AND productID = ?";
 
        $stmt = $connessione->prepare($sql);
        $stmt->bind_param("ii", $userID, $productID); 
        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Prodotto rimosso dal carrello con successo";
        } else {
            $response['success'] = false;
            $response['message'] = "Errore nella rimozione del prodotto dal carrello: " . $stmt->error;

        }
        $stmt->close();
    } else {
        $response['success'] = false;
        $response['message'] = "ID del prodotto non fornito";

    }
} else {
    $response['success'] = false;
    $response['message'] = "Richiesta non valida";

}

echo json_encode($response);


?>