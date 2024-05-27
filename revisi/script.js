// Get the elements
const iklan1 = document.querySelector('.iklan1');
const iklan2 = document.querySelector('.iklan2');

// Function to change iklan1 to poster_ML.webp
function changeIklan1() {
iklan1.querySelector('img').src = 'asset/poster_ML.webp';
}

// Function to change iklan2 to poster_pubg2.jpeg
function changeIklan2() {
iklan1.querySelector('img').src = 'asset/poster_pubg2.jpeg';
}

// Initialize a flag to keep track of the current iklan
let currentIklan = 1;

// Function to toggle between iklan1 and iklan2
function toggleIklan() {
if (currentIklan === 1) {
    changeIklan2();
    currentIklan = 2;
} else {
    changeIklan1();
    currentIklan = 1;
}
}

// Function to change iklan1 to poster_ML.webp
function changeIklan3() {
iklan2.querySelector('img').src = 'asset/poster_ML.webp';
}

// Function to change iklan2 to poster_pubg2.jpeg
function changeIklan4() {
iklan2.querySelector('img').src = 'asset/poster_pubg2.jpeg';
}

// Initialize a flag to keep track of the current iklan
let currentIklan_2 = 1;

// Function to toggle between iklan1 and iklan2
function toggleIklan2() {
if (currentIklan_2 === 1) {
    changeIklan3();
    currentIklan_2 = 2;
} else {
    changeIklan4();
    currentIklan_2 = 1;
}
}

// Call the toggleIklan function every second
setInterval(toggleIklan, 3000);
setInterval(toggleIklan2, 3000);




