

//api currency converter

const converterButton=document.querySelector('.cart-footer #converter');
const currencyBox=document.querySelector('#currency-box');
const exitIcon=document.querySelector('#currency-box #exit-icon');

converterButton.addEventListener('click',function(event){
    event.preventDefault();
    currencyBox.style.display='flex';
})
exitIcon.addEventListener('click',function(event){
    event.preventDefault();
    currencyBox.style.display='none';
})



const dropList=document.querySelectorAll('.drop-list select');
const getButton=document.querySelector('.converterButton');
const fromCurrency=document.querySelector('.from select');
const toCurrency=document.querySelector('.to select');

for(let i=0;i<dropList.length;i++){
    for(currency_code in country_code){
        let optionTag=`<option value="${currency_code}">${currency_code}</option>`;
        dropList[i].insertAdjacentHTML("beforeend",optionTag);
    }
   
}

getButton.addEventListener("click",function(event){
    event.preventDefault();
    getExchangeRate();
})

const exchangeIcon=document.querySelector('.exchange-icon');
exchangeIcon.addEventListener("click",function(){
    let tempCode=fromCurrency.value;
    fromCurrency.value=toCurrency.value;
    toCurrency.value=tempCode;
})

function getExchangeRate(){
    const amount=document.querySelector(".amount input"); 
    let  exchangeRateTxt=document.querySelector('.exchange-rate');
    let amountVal=amount.value;
    if(amountVal==""||amountVal=="0"){
        amount.value="1";
        amountVal=1;
    }
    let url=`https://v6.exchangerate-api.com/v6/d32f6b4385fc1d7d72a68488/latest/${fromCurrency.value}`;
    fetch(url).then(response =>response.json()).then(result =>{
       let exchangeRate=result.conversion_rates[toCurrency.value];
       let totalExchangeRate=(amountVal*exchangeRate).toFixed(2);
       exchangeRateTxt.innerText=`${amountVal} ${fromCurrency.value}=${totalExchangeRate} ${toCurrency.value}`;
    })
}

