
const iklan1 = document.querySelector('.iklan1');
const iklan2 = document.querySelector('.iklan2');
const iklan3 = document.querySelector('.iklan22');


function changeIklan1ToML() {
    changeImage(iklan1, 'asset/poster_ML.webp');
}


function changeIklan1ToPUBG() {
    changeImage(iklan1, 'asset/poster_pubg2.jpeg');
}


function changeIklan1ToThird() {
    changeImage(iklan1, 'asset/poster_valorant.jpg');
}


function changeIklan2ToML() {
    changeImage(iklan2, 'asset/poster_ML.webp');
}

function changeIklan2ToPUBG() {
    changeImage(iklan2, 'asset/poster_pubg2.jpeg');
}


function changeIklan2ToThird() {
    changeImage(iklan2, 'asset/poster_valorant.jpg');
}


function changeIklan3ToML() {
    changeImage(iklan3, 'asset/poster_ML.webp');
}


function changeIklan3ToPUBG() {
    changeImage(iklan3, 'asset/poster_pubg2.jpeg');
}


function changeIklan3ToThird() {
    changeImage(iklan3, 'asset/poster_valorant.jpg');
}


function changeImage(container, src) {
    const img = container.querySelector('img');
    img.classList.remove('show');
    setTimeout(() => {
        img.src = src;
        img.classList.add('show');
    }, 500); 
}


let currentIklan1 = 1;
let currentIklan2 = 1;
let currentIklan3 = 1;


function toggleIklan1() {
    if (currentIklan1 === 1) {
        changeIklan1ToPUBG();
        currentIklan1 = 2;
    } else if (currentIklan1 === 2) {
        changeIklan1ToML();
        currentIklan1 = 3;
    } else {
        changeIklan1ToThird();
        currentIklan1 = 1;
    }
}


function toggleIklan2() {
    if (currentIklan2 === 1) {
        changeIklan2ToML();
        currentIklan2 = 2;
    } else if (currentIklan2 === 2) {
        changeIklan2ToThird();
        currentIklan2 = 3;
    } else {
        changeIklan2ToPUBG();
        currentIklan2 = 1;
    }
}


function toggleIklan3() {
    if (currentIklan3 === 1) {
        changeIklan3ToThird();
        currentIklan3 = 2;
    } else if (currentIklan3 === 2) {
        changeIklan3ToPUBG();
        currentIklan3 = 3;
    } else {
        changeIklan3ToML();
        currentIklan3 = 1;
    }
}


setInterval(toggleIklan1, 1000);
setInterval(toggleIklan2, 1000);
setInterval(toggleIklan3, 1000);
