
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area privata</title>
    <link rel="stylesheet" href="styleAccess.css">
    <link rel="stylesheet" href="../mediaqueries.css">
</head>
<body>
  
    <section id="info-utente">
    <div class="disconnetti">
        <button >
            <a href="logout.php">Disconnetti</a>
        </button>
    </div>

    <h1 class="benvenuto">Benvenuto/a! </h1> 
   
    <div class="info-box">
        <div class="logo-box">
            <img id="" src="../icons/logo-adidas.png" alt="logo adidas" >
        </div>
        <div class="info-section">
            <div class="account-icon">
             <img src="../icons/account.png" alt="account icon" >
            </div>
           <div class="profile-info">

           </div>
            
        </div>
    </div>
    
    <div id="home">
        <button >
            <a href="../index.php">Torna alla Home</a>
        </button>
    </div>
   
    </section>

   <script>
    document.addEventListener("DOMContentLoaded",function(){
    fetch('getUserInfo.php').then(response =>{
        if(!response.ok){
            throw new Error('Errore durante il recupero dei dati del profilo');
        }
        return response.json();
    }).then(data =>{
        


    const userInfo = document.createElement('div');
            userInfo.setAttribute('id', 'userInfo'); 
            userInfo.innerHTML = `
             <p>Nome:   </p>
             <p id="name" > ${data.name} </p>
             <img src="../icons/editing.png"  class="small-icon" id="edit-name">
             <p>Username:    </p>
             <p id="dati"> ${data.username} </p>
             <p>Email:    </p>
            <p id="dati"> ${data.email} </p>`;
            const infoSection = document.querySelector('.profile-info');
            infoSection.appendChild(userInfo);

            document.getElementById('edit-name').addEventListener('click', () => {
                const nameSpan = document.getElementById('name');
                const currentName = nameSpan.innerText;
                nameSpan.innerHTML = `<input type="text" id="name-input" value="${currentName}"> <button id="save-name">Salva</button>`;
                
                document.getElementById('save-name').addEventListener('click', () => {
                    const newName = document.getElementById('name-input').value;
                    fetch('updateUserInfo.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ name: newName }),
                    }).then(response => {
                        if (!response.ok) {
                            throw new Error('Errore durante l\'aggiornamento del nome');
                        }
                        return response.json();
                    }).then(result => {
                        if (result.success) {
                            nameSpan.innerHTML = newName;
                        } else {
                            alert('Errore durante l\'aggiornamento del nome');
                        }
                    }).catch(error => console.error('Si è verificato un errore', error));
                });
            });
        }).catch(error => console.error('Si è verificato un errore', error));
    });


   </script>
</body>
</html>

