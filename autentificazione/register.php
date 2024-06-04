<?php


 require_once('../configurazione.php');


$email=$connessione->real_escape_string($_POST['email']);
$username=$connessione->real_escape_string($_POST['username']);
$name=$connessione->real_escape_string($_POST['nome']);
$password=$connessione->real_escape_string($_POST['password']);

$passwordCriptata= password_hash($password,PASSWORD_DEFAULT);



$sql_check_username="SELECT * FROM utenti where username= '$username'";
$result_check_username= $connessione ->query($sql_check_username);
if($result_check_username && $result_check_username->num_rows>0){
    header("Location: Sign_Up.html?error=username_exists");
    exit();
}


$sql_check_email = "SELECT * FROM utenti WHERE email='$email'";
$result_check_email = $connessione->query($sql_check_email);
if ($result_check_email && $result_check_email->num_rows > 0) {
    header("Location: Sign_Up.html?error=email_exists");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
$sql="INSERT INTO utenti(name,email,username,password) VALUES ('$name','$email','$username','$passwordCriptata')";
if($connessione->query($sql)==true)
{
    echo "registrazione effettuata con successo";
    header("Location: login.html");
    exit();
}else{
    "errore durante registrazione utente $sql. ".$connessione->error;
     header("Location: Sign_Up.html?error=registration_failed");
    exit();
}
}

?>