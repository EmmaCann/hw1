const payButton = document.querySelector('.cart-footer .checkout-button');

const cartTotalElement = document.querySelector('.total-amount');
const cartTotalText = cartTotalElement.textContent;
const cartTotal = parseFloat(cartTotalText.replace('Totale: €', '').trim());

const initiatePayment = async () => {
    try {
        
        const response = await fetch('payment/initiate_payment.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ cartTotal })
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const jsonResponse = await response.json();

        if (jsonResponse.error) {
            throw new Error(jsonResponse.error);
        }

        window.location.href = jsonResponse.approvalUrl;
    } catch (error) {
        console.error('Failed to initiate payment:', error);
        alert('Errore durante l\'avvio del pagamento: ' + error.message);
    }
};

payButton.addEventListener('click', initiatePayment);




/* 
    email di prova pragamento: sb-o8wuj29937643@personal.example.com
    password di prova pagamento: K1:8B6!w

    oppure procedere senza account
    */