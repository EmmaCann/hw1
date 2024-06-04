<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style_carrello.css">
    <link rel="stylesheet" href="../../mediaqueries.css">
    <script src="payment/payment_script.js" defer></script>
</head>
<body>
    <h1 id="titolo">IL TUO CARELLO</h1>
   
        <button id="home"> <a href="../../index.php">Torna alla Home</a></button>

   <div class="cart-container">
    <div class="cart-items">
<?php



    require_once('../../configurazione.php');
    session_start();


    $userID = $_SESSION['id']; 


    $sql = "
    SELECT product_id, nome_prodotto, descrizione_prodotto, url_immagine, prezzo_prodotto, SUM(quantity) as quantity
    FROM (
        SELECT p.product_id, p.nome_prodotto, p.descrizione_prodotto, p.url_immagine, p.prezzo_prodotto, COUNT(c.productID) as quantity
        FROM prodotti AS p
        JOIN carrello as c ON p.product_id = c.productID
        WHERE c.id_utente = ?
        GROUP BY p.product_id, p.nome_prodotto, p.descrizione_prodotto, p.url_immagine, p.prezzo_prodotto
        UNION ALL
        SELECT p_api.product_id, p_api.nome_prodotto, p_api.descrizione_prodotto, p_api.url_immagine, p_api.prezzo_prodotto, COUNT(c.productID) as quantity
        FROM carrello as c
        INNER JOIN prodotti_api AS p_api ON c.productID = p_api.product_id
        WHERE c.id_utente = ?
        GROUP BY p_api.product_id, p_api.nome_prodotto, p_api.descrizione_prodotto, p_api.url_immagine, p_api.prezzo_prodotto
    ) as combined
    GROUP BY product_id, nome_prodotto, descrizione_prodotto, url_immagine, prezzo_prodotto
";



    $stmt = $connessione->prepare($sql);
    $stmt->bind_param("ii", $userID, $userID); 
    $stmt->execute();
    $result = $stmt->get_result();

    $total=0;

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            if (empty($row['product_id']) || empty($row['nome_prodotto']) || empty($row['prezzo_prodotto'])) {
                continue;
            }
            
            $total += $row['quantity'] * $row['prezzo_prodotto'];
            $product_image='../../' . $row['url_immagine'];

            if (filter_var($row['url_immagine'], FILTER_VALIDATE_URL)) {
                $product_image = $row['url_immagine'];
            }

            echo '
            <div class="cart-item">
                <img src="' . $product_image . '" alt="' .htmlspecialchars($row['nome_prodotto']) . '" class="product-image">
                <div class="product-details">
                    <h2 class="product-name">' . htmlspecialchars($row['nome_prodotto']) . '</h2>
                    <p class="product-quantity">Quantità: ' . $row['quantity']. '</p>
                    <p class="product-price">€' . number_format($row['prezzo_prodotto'], 2) . '</p>
                </div>
                <button class="remove-button" onclick="removeItem(' . $row['product_id'] . ')">X</button>
            </div>';}
    } else {
     
        echo '<p class="testo-empty_class"> Non hai ancora salvato nessun articolo nel carrello. </p>';
    }
    $stmt->close(); 
    $connessione->close();
?>

</div>
    </div> 
    <div class="cart-footer">
            <img  id="converter" src="../../icons/exchange.png" alt="currency exchange icon" >
            <p class="total-amount">Totale: €<?php echo number_format($total, 2); ?></p>
            <button class="checkout-button">Procedi al Pagamento</button>
        </div>
    </div>


    <div id="currency-box">
                <header>Convertitore di valuta</header>
                <img id="exit-icon" src="../../icons/cross.png" alt="exit icon" class="small-icon">
                <form class="form2" >
                <div class="amount">
                    <p>Inserisci importo</p>
                    <input type="text" value="1">
                </div>
                <div id="dl1" class="drop-list">
                    <div class="from">
                        <p>Valore di partenza</p>
                        <div class="select-box">
                            <select > </select>
                        </div>
                    </div>
                </div>
                <div class="exchange-icon">
                    <img src="../../icons/transfer.png" alt="exchange arrows" class="medium-icon">
                </div>
                <div  id="dl2" class="drop-list">
                    <div class="to">
                        <p>Valore finale</p>
                        <div class="select-box">
                            <select ></select>
                        </div>
                    </div>
                </div>
                <div class="exchange-rate">Getting exchange rate...</div>
                <button class="converterButton">Get Exchange Rate</button>
            </form>
            </div>
       <script src="country-list.js"></script>




      
<script>
        
function removeItem(id) {
    fetch('rimuovi_carrello.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ product_id: id })
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

