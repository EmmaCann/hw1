<?php
require_once('../../configurazione.php');

session_start();

if (isset($_SESSION['id'])) { 
    $userID = $_SESSION['id'];
    $sql = "SELECT COUNT(*) AS item_count FROM carrello WHERE id_utente = ?";
    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $result = $stmt->get_result();


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(['count' => $row['item_count']]);
} else {
    echo json_encode(['count' => 0]);
}
}

$connessione->close();
?>