<?php
    session_start();
    if(!isset($_SESSION['logged']) || $_SESSION['logged']!== true){
        header("location:login.html");
        exit;
    }


    require_once('../configurazione.php');
    
$sql="SELECT * FROM utenti WHERE username = ?";
$stmt = $connessione->prepare($sql);
$stmt->bind_param("s", $_SESSION['username']);
$stmt->execute();
$result = $stmt->get_result();

$user = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $user = $row;
    }
}

$stmt->close();
$connessione->close();

header('Content-Type: application/json');
 echo json_encode($user);


?>

