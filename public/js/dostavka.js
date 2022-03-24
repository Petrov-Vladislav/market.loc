let dostav_pickup = document.querySelector('#pickup');
let dostav_delivery = document.querySelector('#delivery');
let price_dost = document.querySelector('#price_dost');
let button_newdostavka = document.querySelector('#button_newdostavka');
let new_dostavka = document.querySelector('#new_dostavka');
let sum = document.querySelector('#sum').innerHTML;
let summa = Number(sum.slice(0, -3));

let total_summa = document.querySelector('#sum');

dostav_pickup.addEventListener('click', function() {
    price_dost.innerHTML = "0 р.";
    total_summa.innerHTML = sum;
    new_dostavka.style.cssText = 'display: none';
    button_newdostavka.style.cssText = 'display: none';
});

dostav_delivery.addEventListener('click', function() {
    price_dost.innerHTML = "500 р.";
    total_summa.innerHTML = summa + 500 + ' р.';
    button_newdostavka.style.cssText = 'display: block';
});

button_newdostavka.addEventListener('click', function() {
    if(dostav_delivery.checked) {
        new_dostavka.style.cssText = 'display: block';
    }
});
