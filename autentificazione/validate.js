

function validate(){
    let passwordReg=document.getElementById("password").value;
    let usernameReg=document.getElementById("register-username").value;
    let checkbox=document.getElementById("checkbox");

    if(usernameReg.length<5||usernameReg.length>30){
       alert("L'username deve essere compreso tra 5 e 30 caratteri.");
        return false;
    }
    if(passwordReg.length<8 || !/\d/.test(passwordReg)){
        alert("La password deve contenere almeno 8 caratteri tra cui un numero.");


        return false;
    }
    if(!checkbox.checked){
        alert("E' necessario accettare i termini e condizioni.");
        return false;
    }
        
    return true;
}