<?php
require_once('../../configurazione.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($_SESSION['id']) && isset($data['product_id'])) {
        $userID = $_SESSION['id'];
        $productID = $data['product_id'];

        $sql = "DELETE FROM preferiti WHERE id_utente = ? AND productID = ?";
        $stmt = $connessione->prepare($sql);
        $stmt->bind_param("ii", $userID, $productID);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Errore nella rimozione del prodotto dai preferiti: ' . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'ID del prodotto non fornito']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Richiesta non valida']);
}

$connessione->close();
?>
