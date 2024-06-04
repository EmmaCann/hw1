<?php
header('Content-Type: application/json');

$client_id = "AWCSRd8QFsVlzF0H7_z0LqKRexkmqj1-RyVXo1C-QI4MdUhFZBd1R_xiOXJKwwn_O5f90TbuNTfKilJS";
$client_secret = "EInbjEUt7kyDfLUG_a8lK726JK6VQL4uxtwtgY3H4uUHC-QeuN7vrRGPa9a4v26nm5Rma_lmM3DqM7aA";
$environment = 'sandbox';
$endpoint_url = $environment === 'sandbox' ? 'https://api-m.sandbox.paypal.com' : 'https://api-m.paypal.com';

function generateAccessToken() {
    global $client_id, $client_secret, $endpoint_url;
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$endpoint_url/v1/oauth2/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($ch, CURLOPT_USERPWD, "$client_id:$client_secret");
        $headers = array();
        $headers[] = "Content-Type: application/x-www-form-urlencoded";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $data = json_decode($result, true);
        return $data['access_token'];
    } catch (Exception $error) {
        echo "Failed to generate Access Token: " . $error->getMessage();
    }
}

function createOrder($cartTotal) {
    global $endpoint_url;
    try {
        $accessToken = generateAccessToken();
        $url = "$endpoint_url/v2/checkout/orders";
        $payload = json_encode([
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'amount' => [
                        'currency_code' => 'EUR',
                        'value' => $cartTotal
                    ]
                ]
            ],
            'application_context' => [
                'return_url' => 'http://localhost/adidas_website/pages/carrello/payment/success.html',
                'cancel_url' => 'http://localhost/adidas_website/pages/carrello/payment/cancel.html'
            ]
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "Authorization: Bearer $accessToken";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $jsonResponse = json_decode($result, true);
        return $jsonResponse;
    } catch (Exception $error) {
        echo "Failed to create order: " . $error->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    if (isset($input['cartTotal'])) {
        $cartTotal = $input['cartTotal'];
        $order = createOrder($cartTotal);
        if (isset($order['id'])) {
            echo json_encode([
                'approvalUrl' => "https://www.sandbox.paypal.com/checkoutnow?token=" . $order['id']
            ]);
        } else {
            echo json_encode(['error' => 'Failed to create order']);
        }
    } else {
        echo json_encode(['error' => 'Invalid cart total']);
    }
}




function captureOrder($orderID) {
   
    $client_id = "AWCSRd8QFsVlzF0H7_z0LqKRexkmqj1-RyVXo1C-QI4MdUhFZBd1R_xiOXJKwwn_O5f90TbuNTfKilJS";
    $client_secret = "EInbjEUt7kyDfLUG_a8lK726JK6VQL4uxtwtgY3H4uUHC-QeuN7vrRGPa9a4v26nm5Rma_lmM3DqM7aA";
    $environment = 'sandbox'; 
    $endpoint_url = $environment === 'sandbox' ? 'https://api-m.sandbox.paypal.com' : 'https://api-m.paypal.com';

    
    $accessToken = generateAccessToken(); 

    $url = "$endpoint_url/v2/checkout/orders/$orderID/capture";


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = "Content-Type: application/json";
    $headers[] = "Authorization: Bearer $accessToken";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);


    $jsonResponse = json_decode($result, true);

    return $jsonResponse;
}


?>
