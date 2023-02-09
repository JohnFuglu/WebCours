const { Color } = require("three");

const btn = document.getElementById("couleurBouton");
btn.addEventListener('click',() =>{
    const rndCol = `rgb(${random(255)}, ${random(255)}, ${random(255)})`;
    document.getElementById("labelContacts");
})