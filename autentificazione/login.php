<?php
require_once('../configurazione.php');

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

header('Content-Type: application/json');

$response = array('success' => false, 'message' => '');

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $connessione->real_escape_string($_POST['username']);
        $password = $connessione->real_escape_string($_POST['password']);

        $sql_select = "SELECT * FROM utenti WHERE username='$username'";
        if ($result = $connessione->query($sql_select)) {
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['logged'] = true;
                    $_SESSION['id'] = $row['id_utenti']; 
                    $_SESSION['username'] = $row['username'];

                    $response['success'] = true;
                   
                
                } else {
                    $response['message'] = "Attenzione! <br> La password non è corretta.";
                }
            } else {
                $response['message'] = "Attenzione!<br> Non ci sono account con quello username.";
            }
        } else {
            $response['message'] = "Attenzione! <br> Errore in fase di login.";
        }
    }
} catch (Exception $e) {
    $response['message'] = "Errore: " . $e->getMessage();
}

$connessione->close();
echo json_encode($response);
?>
