


const cuori=document.querySelectorAll('#like-icon');

cuori.forEach(image => {
    image.addEventListener('click',function(event){
        event.preventDefault();
        fetch('../autentificazione/checkSession.php')
        .then(response => response.json())
        .then(data => {
            if (data.logged) {
                const isLiked=this.dataset.liked==='true';
                const productID=this.dataset.productId; 
               if(!isLiked)
                {
                     this.src='../icons/black-heart.png';
                     this.dataset.liked='true';
                     addToFavourites(productID); 
                }
                else{
                    this.src='../icons/heart.png';
                    this.dataset.liked='false';
                   removeFromFavourites(productID);
                }
         } else {
            alert("Devi effettuare l'accesso per accedere a questa funzione.");
            }
    })
    .catch(error =>console.error('Errore:',error));
       
    })
    
 })


 function addToFavourites(productID){

    fetch('../pages/preferiti/aggiungi_preferiti.php',{
        method:'POST',
        body:JSON.stringify({product_id:productID}),
        headers:{
            'Content-Type':'application/json'
        } 
        
    }).then(response => { 
        if (!response.ok) {
            throw new Error('Si è verificato un errore durante l\'aggiunta ai preferiti.');
        }
        return response.json();
     

 }).then(data => {
    if (!data.success) {
        console.error('Errore durante l\'aggiunta ai preferiti:', data.message);
    }
}).catch(error => {
    console.error('Si è verificato un errore durante la richiesta: '.error);
 });
}



const cartIcons=document.querySelectorAll('#cart-icon');
cartIcons.forEach(image => {
    image.addEventListener('click',function(event){
        event.preventDefault();
        
        fetch('../autentificazione/checkSession.php')
        .then(response => response.json())
        .then(data => {
            if (data.logged) {
                const isBought=this.dataset.buy==='true';
                const productIDCart=this.dataset.productId; 
                
                if(!isBought)
                {
                    this.dataset.buy='true';
                    addToCartPage(productIDCart);
                }
                 else{ 
                    this.dataset.buy='false'; 
                     removeFromCartPage(productIDCart);    
                 }
            } else {
                alert("Devi effettuare l'accesso per accedere a questa funzione.");
            }
        })
        .catch(error =>console.error('Errore:',error));
              

    })
    
 })
 

 function addToCartPage(productIDCart){
    fetch('../pages/carrello/aggiungi_carrello.php',{
        method:'POST',
        body:JSON.stringify({product_id:productIDCart}),
        headers:{
            'Content-Type':'application/json'
        } 
    })
    .then(response => {
        if(!response.ok){
            throw new Error('Si è verificato un errore durante l\'aggiunta al carrello.');
        }
        return response.json();
    })

    .catch(error => {
        console.error('Si è verificato un errore durante la richiesta:', error);
    });
}

