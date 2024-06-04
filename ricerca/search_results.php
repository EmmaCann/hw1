<?php
require_once('../configurazione.php');
$query = isset($_GET['query']) ? $_GET['query'] : '';

$filteredProducts = [];


function filterApiProducts($products, $query) {
    return array_filter($products, function($product) use ($query) {
        return stripos($product['title'], $query) !== false || stripos($product['category'], $query) !== false;
    });
}


if ($query) {
    $apiUrl = 'https://fakestoreapi.com/products';
    $apiResponse = file_get_contents($apiUrl);
    $products = json_decode($apiResponse, true);

    if ($products) {
        $filteredProducts = filterApiProducts($products, $query);
    }
}


if ($query) {
    $stmt = $connessione->prepare("SELECT * FROM prodotti WHERE nome_prodotto LIKE ? OR descrizione_prodotto LIKE ?");
    $searchParam = '%' . $query . '%';
    $stmt->bind_param("ss", $searchParam, $searchParam);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $filteredProducts[] = [
            'id' => $row['product_id'],
            'title' => $row['nome_prodotto'],
            'category' => $row['descrizione_prodotto'],
            'price' => $row['prezzo_prodotto'],
            'image' => '../' . $row['url_immagine']
        ];
    }
    $stmt->close();
}

$connessione->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati della ricerca</title>
    <link rel="stylesheet" href="searchStyle.css">
    <link rel="stylesheet" href="../mediaqueries.css">
    <script src="ricerca_script.js" defer></script>
</head>
<body>
<h1>Risultati della ricerca per "<?php echo htmlspecialchars($query); ?>"</h1>
<button id="home">
        <a href="../index.php">Torna alla Home</a>
</button>
    <div id="search-results">
        <?php
        if (count($filteredProducts) > 0) {
            foreach ($filteredProducts as $product) {
                echo '
                <div class="product-container">
                    <div class="product">
                        <div id="icon">
                            <a href=""><img id="like-icon" src="../icons/heart2.png" alt="favourite icon" class="small-icon" data-liked="false" data-product-id="' . $product['id'] . '"></a>
                            <a href=""><img id="cart-icon" src="../icons/buy-icon.png" alt="buy icon" class="small-icon" data-buy="false" data-product-id="' . $product['id'] . '"></a>
                        </div>
                        <a href="#"><img src="' . $product['image'] . '" alt="immagine del prodotto" class="product-image"></a>
                        <div class="price-tag">
                            <span>' . $product['price'] . '€</span>
                        </div>
                        <div class="product-desc">
                            <p id="nome">' . htmlspecialchars($product['title']) . '</p>
                            <p id="categoria">' . htmlspecialchars($product['category']) . '</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p class="testo-empty_class">Non è stato trovato alcun prodotto con il termine di ricerca.</p>';
        }
        ?>
    </div>
</body>
</html>
