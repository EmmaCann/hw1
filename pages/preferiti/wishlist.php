
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="../pages_style.css">
    <link rel="stylesheet" href="../../mediaqueries.css">
</head>
<body>


    <h1 id="titolo-preferiti">LISTA DEI DESIDERI</h1>
   
    <button id="home"> <a href="../../index.php">Torna alla Home</a></button>

    <div class="products-box">
<?php

require_once('../../configurazione.php');

session_start();


$userID = $_SESSION['id']; 

$sql = "SELECT p.product_id, p.nome_prodotto, p.descrizione_prodotto, p.url_immagine
        FROM preferiti AS pr
        INNER JOIN prodotti AS p ON pr.productID = p.product_id
        WHERE pr.id_utente = ?
        UNION
        SELECT p_api.product_id, p_api.nome_prodotto, p_api.descrizione_prodotto, p_api.url_immagine
        FROM preferiti AS pr
        INNER JOIN prodotti_api AS p_api ON pr.productID = p_api.product_id
        WHERE pr.id_utente = ?";

$stmt = $connessione->prepare($sql);
$stmt->bind_param("ii", $userID, $userID);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $imagePath = '../../' . $row['url_immagine'];

        if (filter_var($row['url_immagine'], FILTER_VALIDATE_URL)) {
            $imagePath = $row['url_immagine'];
        }

        echo '<div class="product" data-product-id="' . htmlspecialchars($row['product_id']) . '">';
        echo '<img src="../../icons/bin2.png" alt="Description of image" class="delete-icon"> ';
        echo '<div class="img-box">';
        echo '<img src="' . $imagePath . '" alt="' .  htmlspecialchars($row['nome_prodotto']) . '">';
        echo '</div>';
        echo '<div class="prod-descr">';
        echo '<h3 >' . htmlspecialchars($row['nome_prodotto']). '</h3>';
        echo '<p >' . htmlspecialchars($row['descrizione_prodotto']) . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
 
    echo '<p class="testo-empty_class"> Non hai ancora salvato nessun articolo nella tua lista dei desideri. </p>';
}


$connessione->close();


?>
    </div>


    <script>
        document.querySelectorAll('.delete-icon').forEach(function(icon) {
            icon.addEventListener('click', function(event) {
                event.preventDefault();
                const productDiv = this.closest('.product');
                const productId = productDiv.getAttribute('data-product-id');
                removeFromWishlist(productId);
            });
        });

    function removeFromWishlist(productID) {
    fetch('rimuovi_preferiti.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ product_id: productID })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Errore durante la rimozione del prodotto dal carrello.');
        }
        return response.json();
    })
    .then(data => {
        location.reload();
    })
    .catch(error => {
        console.error('Si è verificato un errore durante la richiesta:', error);
    });
}

   
    </script>
</body>
</html>

