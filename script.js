
/*MENU MOBILE*/
const hamburger_icon=document.querySelector('.menu-icon');
const hamburger_menu=document.querySelector('.hamburger-menu');
const mobile_icons = document.getElementById('mobile-icons');
const heart_icon = document.getElementById('heart');

hamburger_icon.addEventListener("click",function() {
    hamburger_icon.classList.toggle("active");
    hamburger_menu.classList.toggle("active");
    document.getElementById('mobile-icons').style.display='none';
    document.getElementById('heart').style.display='none';

    if (hamburger_icon.classList.contains("active")) {
        mobile_icons.style.display = 'none';
        heart_icon.style.display = 'none';
    } else {
        mobile_icons.style.display = 'flex';
        heart_icon.style.display = 'block';
    }
 })


//  ricerca in mobile

const searchIcon=document.querySelector('#mobile-icons #search-icon');

searchIcon.addEventListener('click',function(event){
    event.preventDefault();


    const searchBar=document.getElementById('search-bar');
    if(searchBar){
        searchBar.remove();
    }
    else{

        const searchForm=document.createElement('form');
        searchForm.id='search-bar';
        searchForm.style.display='flex';


        const searchInput=document.createElement('input');
        searchInput.type='text';
        searchInput.name='query';
        searchInput.placeholder='Cerca..';
        searchInput.style.flex = '1'; 

        
    
        const submitButton=document.createElement('button');
        submitButton.type='submit';
        submitButton.textContent='Vai';
   

        searchForm.appendChild(searchInput);
        searchForm.appendChild(submitButton);

        document.querySelector('#mobile-icons').appendChild(searchForm);

        searchForm.addEventListener('submit',function(event){
            event.preventDefault();

            const query=searchInput.value;

            if(query){
                window.location.href=`ricerca/search_results.php?query=${encodeURIComponent(query)}`;
            }
        })
    }


})



 /*user icon - login/private page*/  
document.querySelector(' #user').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
            window.location.href = "autentificazione/private.php";
        } else {
            alert("Devi effettuare l'accesso per accedere a questa funzione.");
        }
    })
    .catch(error =>console.error('Errore:',error));

});




document.querySelector(' #user-mobile').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
            alert("Hai già effettuato il login.");
       } else {
           window.location.href = "autentificazione/login.html";
       }
    })
    .catch(error =>console.error('Errore:',error));
})

document.querySelector(' #mobile-profilo').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
         window.location.href = "autentificazione/private.php";  
       } else {
            alert("Devi effettuare il login per accedere a questo servizio.");
       }
    })
    .catch(error =>console.error('Errore:',error));
})


document.querySelector(' #accedi').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
             alert("Hai già effettuato il login.");
        } else {
           
            window.location.href = "autentificazione/login.html";
        }
    })
    .catch(error =>console.error('Errore:',error));

});




 /*PANNELLO A SCOMPARSA PASSAGGIO MOUSE SU NAVBAR*/



const items = document.querySelectorAll('.bottom_nav-links li');
const panels = document.querySelectorAll('.pannello-a-scomparsa');


items.forEach(item => {
    item.addEventListener('mouseover', function() {
       
        closeAllPanels();

        
        const panelId = this.dataset.panelId;
        const panelToOpen = document.querySelector(`#${panelId}`);
        panelToOpen.classList.add('open');
    });
});


panels.forEach(panel => {
    panel.addEventListener('mouseleave', function() {
        this.classList.remove('open');
    });
});

function closeAllPanels() {
    panels.forEach(panel => {
        panel.classList.remove('open');
    });
}



/*FAVOURITES ICONS - SHOES   /    FAVOURITE ICON NAVBAR*/




document.querySelector(' #nav-favourite').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
            window.location.href = "pages/preferiti/wishlist.php";
        } else {
            alert("Devi effettuare l'accesso per accedere a questa funzione.");
        }
    })
    .catch(error =>console.error('Errore:',error));

});




document.querySelector(' #menu-mobile #heart').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
            window.location.href = "pages/preferiti/wishlist.php";
        } else {
            alert("Devi effettuare l'accesso per accedere a questa funzione.");
        }
    })
    .catch(error =>console.error('Errore:',error));
})



window.onload = function() {
    loadFavourites();
  };


document.addEventListener('DOMContentLoaded', function() {
    loadFavourites();
    initializeFavouriteIcons();
});

let likedItems = 0;

function initializeFavouriteIcons() {
    const favouriteIcons = document.querySelectorAll('#favourite-icon');
    favouriteIcons.forEach(icon => {
        icon.addEventListener('click', function(event) {
            event.preventDefault();
            const productID = this.dataset.productId;
            const isLiked = this.dataset.liked === 'true';
            
            fetch('autentificazione/checkSession.php')
            .then(response => response.json())
            .then(data => {
                if (data.logged) {
                    if (!isLiked) {
                        addToFavourites(productID, this);
                    } else {
                        removeFromFavourites(productID, this);
                    }
                } else {
                    alert("Devi effettuare l'accesso per accedere a questa funzione.");
                }
            })
            .catch(error => console.error('Errore:', error));
        });
    });
}

function addToFavourites(productID, icon) {
    fetch('pages/preferiti/aggiungi_preferiti.php', {
        method: 'POST',
        body: JSON.stringify({ product_id: productID }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            icon.src = 'icons/black-heart.png';
            icon.dataset.liked = 'true';
            likedItems++;
            updateCounter();
            loadFavourites();
        } else {
            console.error('Errore durante l\'aggiunta ai preferiti:', data.message);
        }
    })
    .catch(error => console.error('Errore:', error));
}

function removeFromFavourites(productID, icon) {
    fetch('pages/preferiti/rimuovi_preferiti.php', {
        method: 'POST',
        body: JSON.stringify({ product_id: productID }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            icon.src = 'icons/heart.png';
            icon.dataset.liked = 'false';
            likedItems--;
            updateCounter();
            loadFavourites();
        } else {
            console.error('Errore durante la rimozione dai preferiti:', data.message);
        }
    })
    .catch(error => console.error('Errore:', error));
}

function loadFavourites() {
    fetch('pages/preferiti/get_user_favourites.php')
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            const favourites = data.favourites;
            likedItems = favourites.length;
            updateCounter();
            favourites.forEach(productID => {
                const icon = document.querySelector(`#favourite-icon[data-product-id='${productID}']`);
                if (icon) {
                    icon.src = 'icons/black-heart.png';
                    icon.dataset.liked = 'true';
                }
            });
        } else {
            console.error('Errore durante il caricamento dei preferiti:', data.message);
        }
    })
    .catch(error => console.error('Errore:', error));
}




 function updateCounter(){
    let counterBox=document.getElementById('counter-box');
    if(!counterBox)
    {
        const newCounterBox=document.createElement('div');
        newCounterBox.id='counter-box';
        newCounterBox.className='counter-Box';
        document.querySelector('#bottom_desktop-nav .nav-icons').appendChild(newCounterBox);
        newCounterBox.textContent= likedItems +  "   ELEMENTI PIACIUTI";
        
    }
    else{
        counterBox.textContent= likedItems + "   ELEMENTI PIACIUTI" ;
    }
 }

const navFav=document.getElementById('nav-favourite');
navFav.addEventListener('mouseenter',function(){
    updateCounter();
    const counterBox=document.getElementById('counter-box');
    if(counterBox)
    {
        counterBox.style.display='block';
    }
})
navFav.addEventListener('mouseleave',function(){
    const counterBox=document.getElementById('counter-box');
    if(counterBox)
    {
        counterBox.style.display='none';
    }
})
 


 /*VIDEO PLAYER*/
 const video=document.querySelector("#video-container video");
 const button=document.querySelector("#play-icon img");
 let isPlaying=false;

 button.addEventListener('click',function(event){
    event.preventDefault();
    if(!isPlaying)
    {
        video.play();
        button.src='icons/pause-button.png';
    }
    else{
        video.pause();
        button.src='icons/white-play-button.png';
    }
    isPlaying=!isPlaying;
 })





 /* CARRELLO*/


 document.querySelector(' #shopping-bag').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
            window.location.href = "pages/carrello/carrello.php";
        } else {
            alert("Devi effettuare l'accesso per accedere a questa funzione.");
        }
    })
    .catch(error =>console.error('Errore:',error));

});




document.querySelector(' #cart-mobile').addEventListener("click",function(e){
    e.preventDefault();
    fetch('autentificazione/checkSession.php')
    .then(response => response.json())
    .then(data => {
        if (data.logged) {
            window.location.href = "pages/carrello/carrello.php";
        } else {
            alert("Devi effettuare l'accesso per accedere a questa funzione.");
        }
    })
    .catch(error =>console.error('Errore:',error));
})


 function initializeBuyIcons(){
 const buy_icon= document.querySelectorAll('#to-buy-icon');
 buy_icon.forEach(image => {
    image.addEventListener('click',function(event){
        event.preventDefault();
        
        fetch('autentificazione/checkSession.php')
        .then(response => response.json())
        .then(data => {
            if (data.logged) {
                const isBought=this.dataset.buy==='true';
                const productIDCart=this.dataset.productId; 
                
                if(!isBought)
                {
                    this.dataset.buy='true';
                    console.log(productIDCart);
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
 }

 function addToCartPage(productIDCart){

    fetch('pages/carrello/aggiungi_carrello.php',{
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
    .then(data => {
        updateCartCount(); 
    })
    .catch(error => {
        console.error('Si è verificato un errore durante la richiesta:', error);
    });
}

function removeFromCartPage(productIDCart){
    fetch('pages/carrello/rimuovi_carrello.php',{
        method:'POST',
        body:JSON.stringify({product_id:productIDCart}),
        headers:{
            'Content-Type':'application/json'
        } 
    })
    .then(response => {
        if(!response.ok){
            throw new Error('Si è verificato un errore durante la rimozione dai preferiti.');
        }
        return response.json();
    })
    .then(data => {
        updateCartCount(); 
    })
    .catch(error => {
        console.error('Si è verificato un errore durante la richiesta:', error);
    });
}

function updateCartCount() {
    fetch('pages/carrello/get_cart_count.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        if (data.count !== undefined) {
            document.querySelector('.nav-icons .quantity').textContent = data.count;
            document.querySelector('#mobile-icons .quantity').textContent = data.count;
        } else {
            console.error('Count not found in data:', data);
        }
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}


 document.addEventListener('DOMContentLoaded', function() {
    
    updateCartCount();
    
 });



  

    /*caricamento prodotti da database*/
    document.addEventListener('DOMContentLoaded',function(){
        fetch('get_home_content.php')
        .then(response => response.json())
        .then(data =>{
            const productsContainer=document.querySelector('#shoes-section #products');
            data.forEach(product =>{
                const productContainer=document.createElement('div');
                productContainer.className='product-container';

                productContainer.innerHTML=`<div class="product">
                <div id="icon"> 
                   <a href=""><img id="favourite-icon" src="icons/heart2.png" alt="favourite icon" class="small-icon" data-liked="false" data-product-id="${product.product_id}"></a>
                   <a href=""><img id="to-buy-icon" src="icons/buy-icon.png" alt="cart icon" class="small-icon" data-buy="false" data-product-id="${product.product_id}"></a>
                </div>
                <a href=""><img id="shoe" src="${product.url_immagine}" alt="${product.nome_prodotto}"></a>
                <div class="price-tag">
                    <span>${product.prezzo_prodotto}€</span>
                </div>
                <div class="shoe-desc">
                    <p id="nome">${product.nome_prodotto}</p>
                    <p>${product.descrizione_prodotto}</p>
                    <span>Scarpe</span>`;
                
                productsContainer.appendChild(productContainer);
            });

            initializeFavouriteIcons();
            initializeBuyIcons();

        }).catch(error => console.error('Error fetching products:',error));
    });