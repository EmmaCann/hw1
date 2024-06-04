<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adidas.it</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
    <script src="script.js" defer></script>
    

</head>

<body>
    
    <header>
        <section id="banner-publ-nero">
           <div class="small-banner"> 
            <p><a href="">SPEDIZIONE GRATUITA PER GLI ORDINI SUPERIORI A 50€</p></a>
            </div> 
        </section>    
        
        
        <nav id="desktop-nav">
            <div id="top_desktop-nav">
                <ul class="top_nav-links">
                   
                   <li><a href="">aiuto</a></li>
                   <li><a href="">ordini e resi</a></li>
                   <li><a href="">iscriviti</a></li>
                   <li><a href="">adiclub</a></li>
                   <li id="accedi"><a href="autentificazione/login.html">accedi</a></li>
               </ul>
            </div>
    

            <div id="bottom_desktop-nav">
                <div id="website-logo">
                    <a href=""><img src="icons/logo-adidas.png" alt="logo adidas" class="logo"></a>
                </div>
                <ul class="bottom_nav-links">
            
                    <li data-panel-id="pan-uomo" class="bold-text"><a href="">UOMO</a></li>
                    <li data-panel-id="pan-donna" class="bold-text"><a href="">DONNA</a></li>
                    <li data-panel-id="pan-bambini" class="bold-text"><a href="">BAMBINI</a></li>
                    <li data-panel-id="pan-novita"><a href="">NOVITA'</a></li>
                    <li data-panel-id="pan-sport"><a href="">SPORTS</a></li>
                    <li data-panel-id="pan-collezioni"><a href="">COLLEZIONI</a></li>
                    <li data-panel-id="pan-outlet" class="bold-text"><a href="">OUTLET</a></li>

                </ul>
                <div class="search-bar">
                    <form id="search-form" action="ricerca/search_results.php" method="GET">
                        <input type="text" name="query" placeholder="Cerca" required>
                        <button type="submit"><img src="icons/icona-lente.png" alt="icona lente ingrandimento" class="small-icon"></button>
                    </form>
                </div>
                <div class="nav-icons">
                    <a href=""><img id="user" src="icons/user.png" alt="user icon" class="medium-icon"></a>
                    <a href="pages/preferiti/wishlist.php"><img id="nav-favourite" src="icons/heart.png" alt="favourites icon" class="medium-icon"></a>
                    <a href="pages/carrello/carrello.php"><img id="shopping-bag" src="icons/shopping-bag.png" alt="shopping bag icon" class="medium-icon"></a>
                    <span class="quantity">0</span>
                </div>
            </div>
        </nav>

    

        <nav id="mobile-nav">
            <div id="menu-mobile">
            <div class="menu-icon" >
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="pages/preferiti/wishlist.php"><img id="heart" src="icons/heart.png" alt="favourites icon" class="medium-icon"></a>
            <div id="website-logo">
                <a href=""><img src="icons/logo-adidas.png" alt="logo adidas" class="logo"></a>
            </div>
            <div id="mobile-icons">
                    <a href="autentificazione/login.html"><img id="user-mobile" src="icons/user.png" alt="user icon" class="medium-icon"></a>
                    <a href=""><img id="search-icon" src="icons/lente3.png" alt="search icon" class="medium-icon"></a>
                    <a href="pages/carrello/carrello.php"><img id="cart-mobile" src="icons/shopping-bag.png" alt="shopping bag icon" class="medium-icon"></a>
                    <span class="quantity">0</span>
            </div>
            </div>
            <div class="hamburger-menu">
                <div class="nav-links">
                    <li class="bold-text"><a href="">UOMO</a></li>
                    <li class="bold-text"><a href="">DONNA</a></li>
                    <li class="bold-text"><a href="">BAMBINI</a></li>
                    <li ><a href="">NOVITA'</a></li>
                    <li ><a href="">SPORTS</a></li>
                    <li ><a href="">COLLEZIONI</a></li>
                    <li class="bold-text"><a href="">OUTLET</a></li>
                </div>
                <div class="nav-info">
                    <li ><a href="">Tracking ordine</a></li>
                    <li id="mobile-profilo"><a href="">Il mio profilo</a></li>
                    <li ><a href="">Trova negozio</a></li>
                    <li ><a href="">Aiuto e Servizio clienti'</a></li>
                    <li ><a href="">RESI</a></li>
                    <li ><a href="">Iscriviti ad adiClub</a></li>
                    <li ><a href="">Gift Card</a></li>
                </div>
                <div class="nav-info-nazionalita">
                    <img src="icons/italy.png" alt="italian flag" class="medium-icon">
                    <p>Italy</p>
                </div>
            </div>
        </nav>

           
            <section >
            <div id="pan-uomo" class="pannello-a-scomparsa">
                <div class="colonna"> 
                     <h3>NOVITA' E TENDENZE</h3>
                     <p>Nuovi arrivi</p>
                     <p>Calendario Lanci</p>
                     <p>Solo da adidas</p>
                     <p>Trend</p>
                     <p>UEFA EURO 2024</p>
                     <p>Shopping di primavera</p>
                     <p class="color-black">Promo di metà stagione</p>
                     <img src="images/promoMetaStagione.avif" alt="promo sconti" >
                </div>
                <div class="colonna">
                   <h3>SCARPE</h3>
                     <p>Sneakers</p>
                     <p>Calcio</p>
                     <p>Hiking e Outdoor</p>
                     <p>Running</p>
                     <p>Ciabatte e Infradito</p>
                     <p>Allenamento e Palestra</p>
                     <p>Camminata</p>
                     <p>Golf</p>
                     <p>Basket</p>
                     <p class="color-black">Promo di metà stagione</p>
                </div>
                <div class="colonna">
                   <h3>ABBIGLIAMENTO</h3>
                    <p>Pantaloni da allenamento</p>
                     <p>Hoodie</p>
                     <p>Giacche</p>
                     <p>T-shirt & Top</p>
                     <p>Tute</p>
                     <p>Felpe</p>
                     <p>Pantaloni</p>
                     <p>Maglie da Calcio</p>
                     <p>Pantaloncini</p>
                     <p>Costumi da bagno</p>
                     <p>Originals</p>
                     <p class="color-black">Promo di metà stagione</p>
                </div>
                <div class="colonna">
                   <h3>ACCESSORI</h3>
                  <p> Calze</p>
                     <p>Berretti e Cappelli</p>
                     <p>Borse</p>
                     <p>Palloni</p>
                     <p>Occhiali</p>
                     <p class="color-black">Promo di metà stagione</p>
                </div>
                 <div class="colonna">
                   <h3>SPORT</h3>
                   <p> Calcio</p>
                     <p>Golf</p>
                     <p>Running</p>
                     <p>Padel</p>
                     <p>Allenamento e Palestra</p>
                     <p>Tennis</p>
                     <p>Hiking e Outdoor</p>
           
                </div>
                 <div class="colonna">
                   <h3>BRAND</h3>
                     <p>Originals</p>
                     <p>Sportsware</p>
                     <p>Terrex</p>
                     <p>Five Ten</p>
                     <p>Y-3</p>
                     <p>End Plastic Waste</p>
                </div>
            </section>
            <section >
                <div id="pan-donna" class="pannello-a-scomparsa">
                    <div class="colonna"> 
                         <h3>NOVITA' E TENDENZE</h3>
                         <p>Nuovi arrivi</p>
                         <p>Calendario Lanci</p>
                         <p>Solo da adidas</p>
                         <p>Trend</p>
                         <p>UEFA EURO 2024</p>
                         <p>Shopping di primavera</p>
                         <p class="color-black">Promo di metà stagione</p>
                         <img src="images/promoMetaStagione.avif" alt="promo sconti" >
                    </div>
                    <div class="colonna">
                       <h3>SCARPE</h3>
                         <p>Sneakers</p>
                         <p>Hiking e Outdoor</p>
                         <p>Running</p>
                         <p>Ciabatte e Infradito</p>
                         <p>Allenamento e Palestra</p>
                         <p>Camminata</p>
                         <p>Golf</p>
                         <p>Calcio</p>
                         <p class="color-black">Promo di metà stagione</p>
                    </div>
                    <div class="colonna">
                       <h3>ABBIGLIAMENTO</h3>
                        <p>Pantaloni da allenamento</p>
                         <p>Hoodie</p>
                         <p>Leggins</p>
                         <p>Pantaloni da allenamento</p>
                         <p>T-shirt & Top</p>
                         <p>Giacche</p>
                         <p>Tute</p>
                         <p>Felpe</p>
                         <p>Pantaloni</p>
                         <p>Reggiseni sportivi</p>
                         <p>Taglie forti</p>
                         <p>Pantaloni</p>
                         <p>Pantaloncini</p>
                         <p>Costumi da bagno</p>
                         <p>Originals</p>
                         <p class="color-black">Promo di metà stagione</p>
                    </div>
                    <div class="colonna">
                       <h3>ACCESSORI</h3>
                      <p> Calze</p>
                         <p>Berretti e Cappelli</p>
                         <p>Borse</p>
                         <p>Palloni</p>
                         <p>Occhiali</p>
                         <p class="color-black">Promo di metà stagione</p>
                    </div>
                     <div class="colonna">
                       <h3>SPORT</h3>
                       <p> Nuovo</p>
                         <p>Golf</p>
                         <p>Running</p>
                         <p>Padel</p>
                         <p>Allenamento e Palestra</p>
                         <p>Tennis</p>
                         <p>Hiking e Outdoor</p>
                         <p>Yoga</p>
                         <p>Danza</p>
               
                    </div>
                     <div class="colonna">
                       <h3>BRAND</h3>
                         <p>Originals</p>
                         <p>Sportsware</p>
                         <p>Terrex</p>
                         <p>Five Ten</p>
                         <p>Y-3</p>
                         <p>End Plastic Waste</p>
                    </div>
                </section>
                <section >
                    <div id="pan-bambini" class="pannello-a-scomparsa">
                        <div class="colonna"> 
                             <h3>NOVITA' E TENDENZE</h3>
                             <p>Nuovi arrivi</p>
                             <p>Calendario Lanci</p>
                             <p>Solo da adidas</p>
                             <p>Trend</p>
                             <p>Prodotti personalizzabili</p>
                             <p>UEFA EURO 2024</p>
                             <p>Shopping di primavera</p>
                             <p class="color-black">Promo di metà stagione</p>
                             <img src="images/promoMetaStagione.avif" alt="promo sconti" >
                        </div>
                        <div class="colonna">
                           <h3>SCARPE RAGAZZI</h3>
                             <p>Sneakers</p>
                             <p>Calcio</p>
                             <p>Ciabatte e sandali</p>
                             <p>Allenamento e Palestra</p>
                             <p class="color-black">Promo di metà stagione</p>
                        
                        </div>
                        <div class="colonna">
                           <h3>ABBIGLIAMENTO <br> RAGAZZI</h3>
                            <p>Tute</p>
                             <p>Set completi</p>
                             <p>T-shirt</p>
                             <p>Short</p>
                             <p>Pantaloni</p>
                             <p>Hoodie</p>
                             <p>Felpe</p>
                             <p> Giacche</p>
                             <p>Maglie da calcio</p>
                             <p class="color-black">Promo di metà stagione</p>
                            
                        </div>
                        <div class="colonna">
                           <h3>ACQUISTA PER <br>NUMERO DI SCARPA</h3>
                          <p> Babies & Toddlers (16-27)</p>
                             <p>Children (28-35)</p>
                            <p>Teenagers (35-40)</p>
                             <h3>ACQUISTA PER TAGLIA <br>ABBIGLIAMENTO</h3>
                             <p>Bebè e Bimbi (62-104)</p>
                             <p>Bambini (110-128)</p>
                             <p>Teenager (134-176)</p>
                        </div>
                         <div class="colonna">
                           <h3>ACCESSORI</h3>
                           <p> Zaini</p>
                             <p>Calze</p>
                             <p>Cappelli e berretti</p>
                             <p class="color-black">Promo di metà stagione</p>
                   
                        </div>
                         <div class="colonna">
                           <h3>SPORT</h3>
                             <p>Calcio</p>
                             <p>Nuoto</p>
                             <p>Allenamento e palestra</p>
                             <p>Basket</p>
                             <p>Tennis</p>
                             <p>Golf</p>
                             <h3>COLLEZIONI</h3>
                             <p>Disney</p>
                             <p>Mickey & Friends</p>
                             <p>Marvel</p>
                             <p>Star Wars</p>
                        </div>
                    </section>
           <section >
            <div id="pan-novita" class="pannello-a-scomparsa">
                <div class="colonna">
                    <h3>NOVITA' UOMO</h3>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Accessori</p>
                    <br>
                    <br>
                    <img src="images/originals.avif" alt="originals adv">
                    <br>
                    <p class="color-black">Tutti i prodotti Originals</p>
                </div>
                <div class="colonna">
                    <h3>NOVITA' DONNA</h3>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Accessori</p>
                    <br>
                    <br>
                    <img src="images/adidas-sportswear.avif" alt="adidas adv">
                    <br>
                    <p class="color-black">Tutti i prodotti Sportswear</p>
                </div>
                <div class="colonna">
                    <h3>NOVITA' KIDS</h3>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Accessori</p>
                    <br>
                    <br>
                    <img src="images/terrex.avif" alt="terrex adv">
                    <br>
                    <p class="color-black">Tutti i prodotti Terrex</p>
                </div>
                <div class="colonna">
                    <h3>NOVITA' NEUTRAL</h3>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Accessori</p>
                    <br>
                    <br>
                    <img src="images/y-3.avif" alt="y-3 adv">
                    <br>
                    <p class="color-black">Tutti i prodotti Y-3</p>
                </div>
                <div class="colonna">
                    <h3>SPORT</h3>
                    <p>Calcio</p>
                    <p>Running</p>
                    <p>Allenamento e palestra</p>
                    <br>
                    <br>
                    <img src="images/stell.avif" alt="stell adv">
                    <br>
                    <p class="color-black">Tutti i prodotti Stella <br>McCartney</p>
                </div>
                <div class="colonna">
                    <h3>COLLEZIONI</h3>
                    <p>Stan Smith</p>
                    <p>adicolor</p>
                    <p>Esclusiva adidas</p>
                    <br>
                    <br>
                    <img src="images/sustainability.avif" alt="sustainability adv">
                    <br>
                    <p class="color-black">Linea better choices</p>
                </div>
            </div>
           </section>
           <section >
            <div id="pan-sport" class="pannello-a-scomparsa">
            <div class="colonna">
                <h3>CALCIO</h3>
                <img src="images/sport-calcio.avif" alt="immagine con quadri">
                <p>UEFA EURO 2024</p>
                <p>Scarpe da calcio</p>
                <p>Club</p>
                <p>Nazionali</p>
                <p>Prodotti per l'allenamento</p>
                <p>Tutto l'abbigliamento</p>
                <p>Palloni & Accessori</p>
                <p>Predator</p>
                                
                <p class="color-black"> Prodotti calcio</p>
            </div> 
            <div class="colonna">
                <h3>RUNNING</h3>
                <img src="images/sport-running.avif" alt="running shoes">
                <p>Scarpe</p>
                <p>Abbigliamento</p>
                <p>Accessori</p>
                
                <p>Scarpe da running per tutti <br> i giorni</p>
                <p>Preparazione gara</p>
                <p>Scarpe da running per le <br>lunghe distanze</p>
                <p>Runnig Shoe Finder</p>
                
                <p class="color-black">Prodotti Running</p>

            </div>
            <div class="colonna">
                <h3>OUTDOOR</h3>
                <img src="images/sport-outdoor.avif" alt="people hiking">
                <p>Scarpe</p>
                <p>Abbigliamento</p>
                <p>Accessori</p>
                
                <p>Hiking</p>
                <p>Trail Running</p>
                <p>Mountain bike</p>
                <p>Climbing</p>
                <p>Alpinismo</p>
                <p>Sport invernali</p>
                
                <p class="color-black">Prodotti outdoor</p>
            </div>
            <div class="colonna">
                <h3>ALLENAMENTO </h3>
                <img src="images/sport-palestra.avif" alt="people at the gym">
                <p>Scarpe</p>
                <p>Abbigliamento</p>
                <p>Accessori</p>
                
                <p>HIIT</p>
                <p>Allenamento di <br>potenziamento</p>
                <p>Yoga & Studio</p>
                <p>TECHFIT</p>
                <p>Sports bra finder</p>
                
                <p class="color-black">Allenamento e palestra</p>
            </div>
            <div class="colonna">
                <h3>GOLF</h3>
                <img src="images/sport-golf.avif" alt="people playing golf">
                <p>Scarpe</p>
                <p>Abbigliamento</p>
                <p>Accessori</p>
                <br>
                <p>Ultimate 365</p>
                <p>adicros</p>
                <p>CodeChaos</p>
                <p>Tour 360</p>
            
                
                <br>
                <p class="color-black">Prodotti golf</p>
            </div>
            <div class="colonna">
                <h3>ALTRI SPORT</h3>
               
                <p>Sport invernali</p>
                <p>Tennis</p>
                <p>Nuoto</p>
                <p>Ciclismo</p>
                <p>Basket</p>
                <p>Rugby</p>
                <p>Boxe</p>
                <p>Pallamano</p>
                <p>Yoga</p>
                <p>Padel</p>
                <p>Pallavolo</p>
                
            </div>
            </div>
           </section>
           <section >
            <div id="pan-collezioni" class="pannello-a-scomparsa">
                <div class="colonna">
                    <h3>I TREND DEL MOMENTO</h3>
                    <img src="images/trend-del-momento.avif" alt="trend del momento">
                    <p>Blog Adidas</p>
                    <p>Pantaloni cargo</p>
                    <p>Hoodie</p>
                    <p>Tute</p>
                    <p>Strati base</p>
                    <p>Giacche impermeabili</p>
                    <p>Piumini</p>
                    <p>Gilet</p>
                    <p>Sneakers nere</p>
                    <p>Guanti</p>
                
                </div> 
                <div class="colonna">
                    <h3>RUNNING</h3>
                    <img src="images/running.avif" alt="running shoes">
                    <p>Running trainers</p>
                    <p>Ultraboost</p>
                    <p>Adizero</p>
                    <p>4DFWD</p>
                    <p>Scarpe Trail Running</p>
                    <p>Runing T-shirt</p>
                    <p>Pantaloncini Running</p>
                    <p>Leggins Running</p>
                    <p>Giacche Running</p>
                    <p>Calze Running</p>
   
    
                </div>
                <div class="colonna">
                    <h3>CALCIO</h3>
                    <img src="images/sport-calcio.avif" alt="magliettte appese al muro">
                    <p>Scarpe da calcio per <br>superfici compatte</p>
                    <p>Scarpe da calcio per <br>superfici morbide</p>
                    <p>Scarpe da calcio indoor</p>
                    <p>Pantaloncini calcio</p>
                    <p>Parastinchi da calcio</p>
                    <p>Calzettoni da calcio</p>
                    <p>collezione Linel Messi</p>
                                 
                    
                </div>
                <div class="colonna">
                    <h3>ABBIGLIAMENTO</h3>
                    <img src="images/abbigliamento.avif" alt="person at the gym">
                    <p>Felpe</p>
                    <p>Felpe con cappuccio</p>
                    <p>Tute</p>
                    <p>Giacche da allenamento</p>
                    <p>Pantaloni da allenamento</p>
                    <p>T-shirt & top</p>
                    <p>Leggins da palestra</p>
                    <p>Canotte</p>
                    <p>Premaman</p>
                  
                </div>
                <div class="colonna">
                    <h3>OUTDOOR</h3>
                    <img src="images/outdoor.avif" alt="person hiking">
                    <p>Terrex Agravic</p>
                    <p>Terrex Free Hiker</p>
                    <p>Terrex AX</p>
                    
                    <p>Terrex Swift</p>
                    <p>Terrex Skychaser</p>
                    <p>Five Ten Sleuth</p>
                    <p>Terrex Waterproof</p>
                    <p>Terrex Better Choices</p>
                    <p>XPLORIC</p>
                    
                    
                </div>
                <div class="colonna">
                    <h3>SOLO DA ADIDAS</h3>
                    <img src="images/solo-adiads.avif" alt="people">
                    <p>Esclusive per gli iscritti</p>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Accessori</p>
                    <p>Esclusive Uomo</p>
                    <p>Esclusive Donna</p>
                    <p>Esclusive Kids</p>
                    <p>Eslusive Originals</p>
                    <p>Esclusive Sportswear</p>
                    
                </div>
                </div>
           </section>
           <section >
            <div id="pan-outlet" class="pannello-a-scomparsa">
                <div class="colonna">
                    <h3>UOMO</h3>
                    <p>Tutti i prodotti Uomo</p>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Hoodie e felpe</p>
                    <p>Giacche</p>
                    <p>Pantaloni da allenamento</p>
                    <p>T-shirt & top</p>
                    <p>Tute</p>
                    <p>Ciabatte e infradito</p>
                    <p>Accessori</p>
                    <p>Borse & Zaini</p>
                    <p>Short</p>
                    <p>Originals</p>
                
                </div> 
                <div class="colonna">
                    <h3>DONNA</h3>
                    
                    <p>Visualizza tutto </p>
                    <p>Scarpe</p>
                    <p>Abbigliamento</p>
                    <p>Felpe e Felpe con Cappuccio</p>
                    <p>Giacche</p>
                    <p>Pantaloni da allenamento</p>
                    <p>T-shirt & Top</p>
                    <p>T-shirt & Leggings</p>
                    <p>Tute</p>
                    <p>Accesori</p>
                    <p>Ciabatte e infradito</p>
                    <p>Borse & Zaini</p>
    
                </div>
                <div class="colonna">
                    <h3>BAMBINI</h3>
                    
                    <p>Tutti i prodotti Bambini</p>
                    <p>Scarpe Kids</p>
                    <p>Tracksuits</p>
                    <p>Shorts</p>
                    <p>Abbigliamento Ragazzi</p>
                    <p>Abbigliamento Ragazza</p>
                    <p>Accessori</p>
                    <p>Borse e Zaini</p>
                    <p>Originals</p>
                    
                </div>
                <div class="colonna">
                    <h3>SPORT</h3>
                    
                    <p>Allenamento e Palestra</p>
                    <p>Running</p>
                    <p>Calcio</p>
                    <p>Outdoor</p>
                    <p>Golf</p>
                    <p>Sport invernali</p>
                    <p>Tennis</p>
                    <p>Nuoto</p>
                    <p>Basket</p>
                  
                </div>
                <div class="colonna">
                    <h3>COLLEZIONI  </h3>
                    
                    <p>Originals</p>
                    <p>Ultraboost</p>
                    <p>Ozweego</p>
                    <p>ZX</p>
                    <p>NMD</p>
                    <p>Adilette</p>
                    
                    
                    
                </div>
               
                </div>
           </section>



          
    </header>
        <section class="big-container">
            <div class="text-container">
                <h1>YEEZY BOOST</h1>
                <h1>350 V2 MX ROCK</h1>
            </div> 
                <div class="button">
                <div class="button-container1">
                    <button>
                        <span>SCOPRI DI PIU'</span>
                        <img src="icons/right-white-arrow.png" alt="freccia a destra" class="medium-icon">
                    </button>  
                    <div class="button-container2"> </div>
                </div>
                </div>
                  
            <div id="image-container">
                <img src="images/big-shoe.png" alt="advertisement of a shoe" class="big-image">
            </div> 

        </section>
        <section id="second-container">
            <div id="video-container">
                <video width=auto loop>   
                    <source src="images/video2.mp4" type="video/mp4">
                </video>
                
                
            </div>
            <div class="text-container2">
                <h1>FOR THE FAST.ADIZERO</h1>
                <p>Scopri la nostra collezione dei record.</p>
            </div>
            <div class="button2">
                <div class="button2-container1">
                    <button>
                        <span>ACQUISTA</span>
                        <img src="icons/right-black-arrow.png" alt="freccia a destra" class="medium-icon">
                    </button>  
                    <div class="button2-container2"> </div>
                </div> 
            </div>  
                <div id="play-icon">
                    <a href=""><img src="icons/white-play-button.png" alt="play button" ></a>
                </div>
               
            
        
         </section>
        <section id="looks-section">
            <div id="section-title">
                <h2>ACQUISTA PER LOOK</h2>
            </div>
            <div id="products">
            <div class="product-container">
                <div class="product">
                    <a href=""><img src="images/first-look.avif" alt="first look"></a>
                    <div class="pro-description">
                        <p>7 articoli</p>
                        <a href="">
                        <span>ACQUISTA</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <a href=""><img src="images/second-look.avif" alt="second look"></a>
                    <div class="pro-description">
                        <p>5 articoli</p>
                        <a href=""><span>ACQUISTA</span></a>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <a href=""><img src="images/third-look.avif" alt="third look"></a>
                    <div class="pro-description">
                        <p>7 articoli</p>
                        <a href=""><span>ACQUISTA</span></a>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <a href=""><img src="images/fourth-look.avif" alt="fourth look"></a>
                    <div class="pro-description">
                        <p>7 articoli</p>
                        <a href=""><span>ACQUISTA</span></a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="shoes-section">
            <div id="buttons-container">
                <div class="button-container1">
                    <button>
                        <span>Nuovi arrivi</span>
                    </button>
                
                </div>
                <div class="button2-container1">
                    
                    <button>
                        <span>Il meglio di adidas</span>
                    </button>
                   
                </div>
                <div class="button2-container1">
                    
                    <button>
                        <span>Coming soon</span>
                    </button>
                 
                </div>
            </div>
            <div id="products">
               
                
            
     
            </div>
        </section>
        <section id="advertisement-section">
            <div id="products">
                <div class="product-container">
                    <div class="product">
                        <a href=""><img src="images/ad1.png" alt="advertisemtn"></a>
                        <div class="pro-description">
                            <h3>Supercomfort.Supernova</h3>
                            <p id="p1">Scopri la scarpa da running premiata da 
                                Women's Health.</p>
                                <div id="span">
                                    <span>ACQUISTA</span>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product">
                        <a href=""><img src="images/ad2.png" alt="advertisemtn"></a>
                        <div class="pro-description">
                            <h3>2000's Running</h3>
                            <p>Riscopri i codici stilistici delle più iconiche
                                silhoutte running degli anni 2000, rielaborati
                                in chiave contemporanea.
                            </p>
                            <div id="span2">
                                <span>ACQUISTA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product">
                        <a href=""><img src="images/ad3.png" alt="advertisemtn"></a>
                        <div class="pro-description">
                            <h3>Pallone UCL Pro London</h3>
                            <p>Fai sentire il tuo ruggito in campo:forte,
                                coraggioso e maestoso come un leone
                            </p>
                            <div id="span">
                                <span>ACQUISTA</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <div class="product">
                        <a href=""><img src="images/ad4.png" alt="advertisemtn"></a>
                        <div class="pro-description">
                            <h3>Mostra il tuo stile</h3>
                            <p>Prodotti training realizzati per raggiungere tutti
                                i tuoi obiettivi, e per crearne di nuovi.</p>
                                <div id="span">
                                    <span>ACQUISTA</span>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        <section id="history">
            <div class="big-container">
            <div class="paragrafo">
                <h2>ADIDAS: ARTICOLI SPORTIVI, STILE E STORIE DAL 1949</h2>
                <p>Lo sport ci mantiene in forma. Nel corpo e nello spirito. Ci unisce. Ha il potere di cambiare la vita delle persone. Attraverso storie di atleti di successo, ispirazione e suggerimenti per l'allenamento. Articoli sportivi dotati delle tecnologie più sofisticate per migliorare le tue performance. Migliora i tuoi record personali. adidas è la casa degli amanti di ogni sport, dal running al calcio. Per chi vuole fuggire dal caos della città e dedicarsi all'hiking. Per l'appassionata di yoga che vuole eseguire pose perfette. Le 3 Strisce sono protagoniste della scena musicale. Sul palcoscenico dei festival. In un negozio di articoli sportivi adidas trovi prodotti che ti permettono di mantenere la concentrazione fino al fischio finale. Durante una gara. Fino al traguardo. Siamo qui per sostenere ogni creator. Migliorare le loro performance, le loro vite, e cambiare il mondo.

                    adidas è molto più che abbigliamento per fare sport e per allenarsi. Collaboriamo con i migliori del settore per co-creare. In questo modo offriamo ai nostri fan gli abiti per lo sport e lo stile che corrispondono alle loro esigenze atletiche, tenendo conto della sostenibilità. Siamo qui per supportare i creatori. Migliorare il loro gioco. Dar vita ai cambiamenti. E pensiamo agli effetti di tutto quello che facciamo sul nostro mondo.
                adidas è molto più che abbigliamento per fare sport e per allenarsi. Collaboriamo con i migliori del settore per co-creare. In questo modo offriamo ai nostri fan gli abiti per lo sport e lo stile che corrispondono alle loro esigenze atletiche, tenendo conto della sostenibilità. Siamo qui per supportare i creatori. Migliorare il loro gioco. Dar vita ai cambiamenti. E pensiamo agli effetti di tutto quello che facciamo sul nostro mondo. 
            <br> <br>adidas è molto più che abbigliamento per fare sport e per allenarsi. Collaboriamo con i migliori del settore per co-creare. In questo modo offriamo ai nostri fan gli abiti per lo sport e lo stile che corrispondono alle loro esigenze atletiche, tenendo conto della sostenibilità. Siamo qui per supportare i creatori. Migliorare il loro gioco. Dar vita ai cambiamenti. E pensiamo agli effetti di tutto quello che facciamo sul nostro mondo. </p>
            </div>
            <div class="paragrafo">
                <h2>ABBIGLIAMENTO SPORTIVO, PER OGNI ATTIVITÀ.</h2>
                <p>adidas crea abbigliamento per la palestra per ogni tipo di atleta. Creator che vogliono cambiare il proprio sport. Sfidare le convenzioni. Infrangere le regole per scriverne di nuove. E poi infrangerle di nuovo. Forniamo a team e atleti i migliori prodotti per l'allenamento. Per mantenere alta la concentrazione. Creiamo abbigliamento sportivo progettato per aiutarti a raggiungere il traguardo. E conquistare trofei. Il nostro store dedicato alle donne offre i migliori reggiseni e tight sportivi. Per ogni genere di attività. Creiamo, innoviamo e sperimentiamo. Mettiamo alla prova le nuove tecnologie sul campo. Negli stadi, sulle piste, in piscina. Ci ispiriamo ai nostri prodotti più iconici per creare lo streetwear del futuro. come ad esempio NMD o le nostre tracksuit Firebird. Modelli sportivi d'archivio ritornano protagonisti. Come Stan Smith e Superstar. Icone dello streetstyle e non solo.

                    Con le nostre collezioni abbiamo eliminato il confine tra alta moda e alte prestazioni. Come la nostra collezione di abbigliamento sportivo adidas by Stella McCartney, disegnata per essere sempre perfetti dentro e fuori dalla palestra. O alcuni dei nostri capi lifestyle adidas Originals, che possono essere indossati anche come abbigliamento sportivo. Le nostre vite cambiano costantemente. Diventano sempre più versatili. E adidas crea con questo in mente.
                <br><br> Con le nostre collezioni abbiamo eliminato il confine tra alta moda e alte prestazioni. Come la nostra collezione di abbigliamento sportivo adidas by Stella McCartney, disegnata per essere sempre perfetti dentro e fuori dalla palestra. O alcuni dei nostri capi lifestyle adidas Originals, che possono essere indossati anche come abbigliamento sportivo. Le nostre vite cambiano costantemente. Diventano sempre più versatili. E adidas crea con questo in mente.</p>
            </div>
            </div>
        </section>

        <!-- mobile opinion banner -->
        <section id="opinion-banner">
            <div id="banner">
                    <h3>LA TUA OPINIONE E' IMPORTANTE</h3>
                    <p>Ci impegniamo a migliorare il livello del nostro
                        servizio e <br> appreziamo i tuoi commenti
                    </p>
            </div>
        </section>

        <!-- mobile back to the beginning banner -->
        <section id="back-to-beginning">
            <div class="small-banner">
                <img src="icons/up-arrow.png" alt="up arrow" class="small-icon">
                <span>TORNA ALL'INIZIO</span>
            </div>
        </section>

        <!-- mobile bottom-page navbar -->
        <section id="bottom-page-navbar">
            <div class="small-banner">
                <div id="testo">
                    <p id="sx">ACCEDI</p>
                    <p id="dx">IL TUO CARRELLO </p>
                </div>
                
            </div>
        </section>

        <section id="banner-publ-giallo">
            <div id="bg-giallo">
                <h1>ISCRIVITI E RISPARMIA IL 10%*</h1>
                <div id="button">
                <div class="button-container1">
                    <button>
                        <span>ISCRIVITI GRATUITAMENTE</span>
                        <img src="icons/right-white-arrow.png" alt="freccia a destra" class="medium-icon">
                    </button>  
                    <div class="button-container2"> </div>
                </div>
                </div>

            </div>
        </section>

        <!-- info-section mobile -->
        <section id="info-section-mobile">
            <div id="background">
                <div class="colonna-sx">
                    <p>Spedizioni</p>
                    <p>Pagamento</p>
                    <p>Tracking ordine</p>
                    <p>Imprint</p>
                </div>
                <div class="colonna-dx">
                    <p>Restituzioni</p>
                    <p>Aiuto</p>
                    <p id="storeFinderMobile">Trova Negozio</p>
                </div>
            </div>
        </section>

        <section id="info-section">
            <div id="info-background">
                <div class="colonna">
                    <a href=""><h3>PRODOTTI</h3></a>
                    <a href=""><p>Scarpe</p></a>
                    <a href=""><p>Accessori</p></a>
                    <a href=""><p>Nuovi arrivi</p></a>
                    <a href=""><p>Calendario Lanci</p></a>
                    <a href=""><p>Più venduti</p></a>
                    <a href=""><p>Outlet</p></a>
                </div>
          
            
                <div class="colonna">
                    <a href=""><h3>SPORTS</h3></a>
                    <a href=""><p>Calcio</p></a>
                    <a href=""><p>Basket</p></a>
                    <a href=""><p>Allenamento e palestra</p></a>
                    <a href=""><p>Outdoor</p></a>
                    <a href=""><p>Rugby</p></a>
                    <a href=""><p>Running</p></a>
                    <a href=""><p>Tennis</p></a>
                </div>
           
      
                <div class="colonna">
                    <a href=""><h3>COLLEZIONI</h3></a>
                    <a href=""><p>Originals</p></a>
                    <a href=""><p>IVY PARK</p></a>
                    <a href=""><p>Ultraboost</p></a>
                    <a href=""><p>NMD</p></a>
                    <a href=""><p>Gazelle</p></a>
                    <a href=""><p>Superstar</p></a>
                    <a href=""><p>Stan Smith</p></a>
                    <a href=""><p>Ozweego</p></a>
                </div>
            
            
                <div class="colonna">
                    <a href=""><h3>ASSISTENZA</h3></a>
                    <a href=""><p>Aiuto e Servizio clienti</p></a>
                    <a href=""><p>Consegna</p></a>
                    <a href=""><p>Resi e rimborsi</p></a>
                    <a href=""><p>Tabelle taglie</p></a>
                    <a href=""><p id="storeFinder">Trova negozio</p></a>
                    <a href=""><p>Mappa del sito</p></a>
                    <a href=""><p>Procedure europeee di risoluzione delle controversie</p></a>
                    <a href=""><p>Imprint</p></a>
                </div>
           
          
                <div class="colonna">
                    <a href=""><h3>INFO <br> SULL'AZIENDA</h3></a>
                    <a href=""><p>Chi siamo</p></a>
                    <a href=""><p>Lavora con noi</p></a>
                    <a href=""><p>Stampa</p></a>
                    <a href=""><p>App per smartphone</p></a>
                    <a href=""><p>adidas Confirmed</p></a>
                    <a href=""><p>adidas Blog</p></a>
                    <a href=""><p>Affiliate program</p></a>
                    <a href=""><p>Selezione Posizione</p> </a>
                    <a href=""><h3>ALTRI <br> PRODOTTI <br> ADIDAS</h3></a>
                    <a href=""><p> Attrezzatura Training</p></a>
                             
                </div>
           
        
                <div class="colonna">
                    <h3>SEGUICI</h3>
                    <div id="icons">
                        <a href=""><img src="icons/facebook.png" alt="facebook icon" ></a>
                        <a href=""><img src="icons/instagram.png" alt="instagram icon" ></a>
                        <a href=""><img src="icons/twitter.png" alt="twitter icon" ></a>
                        <a href=""><img src="icons/pinterest-logo.png" alt="pinterest-logo"></a>
                        <a href=""><img src="icons/tiktok.png" alt="tik tok icon" ></a>
                        <a href=""><img  src="icons/youtube.png" alt="youtube icon" ></a>
                    </div>
                   
                             
                </div>
           
        </div>
       
        
        </section>

        <footer id="footer-mobile">
            <div class="colonna-sx">
                <p>Impostazioni cookie</p>
                <p>Privacy Centre</p>
                <p>Informativa sulla privacy</p>
            </div>
            <div class="colonna-dx">
                <p>Gestione Dati</p>
                <p>Cookies</p>
                <p>Termini e Condizioni</p>
            </div>
        </footer>

        <footer>
        <div id="testo">
            <a href=""><span>Impostazioni cookie</span></a>
            |
            <a href=""><span>Gestisci dati</span></a>
            |
            <a href=""><span>Privacy Centre</span></a>
            |
            <a href=""><span>Cookies</span></a>
            |
            <a href=""><span>Informativa sulla privacy</span></a>
            |
            <a href=""><span>Termini e Condizioni</span></a>
        </div>
        </footer>

      
</body>
</html>