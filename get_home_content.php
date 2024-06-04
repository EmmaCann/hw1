
<?php

require_once('configurazione.php');

$query="SELECT * FROM prodotti";
$result= $connessione->query($query);

$prodotti=array();

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $prodotti[]=$row;
    }
}

header('Content-type: application/json');
echo json_encode($prodotti);


$connessione->close();

?>