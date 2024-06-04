<?php

require_once('../configurazione.php');
session_start();

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    $data = json_decode(file_get_contents('php://input'), true);
    $newName = $data['name'];
    $userId = $_SESSION['id']; 

    if (!empty($newName) && !empty($userId)) {
        $stmt = $connessione->prepare("UPDATE utenti SET name = ? WHERE id_utenti = ?");
        $stmt->bind_param("si", $newName, $userId);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Errore durante l\'aggiornamento del nome']);
        }
        $stmt->close();
        $connessione->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Nome o ID utente non valido']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Metodo di richiesta non valido']);
}
?>
