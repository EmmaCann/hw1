<?php
require_once('../configurazione.php'); 


$apiUrl = 'https://fakestoreapi.com/products';


$apiResponse = file_get_contents($apiUrl);
$products = json_decode($apiResponse, true);


if ($products === null) {
    die('Errore durante il recupero dei dati dall\'API');
}



$sql = "INSERT INTO prodotti_api (product_id,nome_prodotto,descrizione_prodotto,url_immagine,prezzo_prodotto) VALUES (?, ?, ?, ?, ?) ";

$stmt = $connessione->prepare($sql);


foreach ($products as $product) {
    $stmt->bind_param(
        'isssi',
        $product['id'],
        $product['title'],
        $product['category'],
        $product['image'],
        $product['price']
    );
    
    if (!$stmt->execute()) {
        echo 'Errore durante l\'inserimento del prodotto ID ' . $product['product_id'] . ': ' . $stmt->error . '<br>';
    }
}


$stmt->close();
$connessione->close();

echo 'Dati caricati con successo nel database';
?>
