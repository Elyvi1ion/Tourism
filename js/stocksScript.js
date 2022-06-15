//Вывод дополнительного текста на странице

//Обьявление кнопок 
let stocksButton1 = document.getElementById("stocksButton1");
let stocksButton2 = document.getElementById("stocksButton2");
let stocksButton3 = document.getElementById("stocksButton3");
let stocksButton4 = document.getElementById("stocksButton4");

//По клику определенной кнопки появляется текст
stocksButton1.onclick = function () {
    let stocksWrapper1 = document.getElementById("stock1");
    stocksWrapper1.classList.toggle("stocks__card-more_visible");
    stocksWrapper1.classList.toggle("stocks__card-more_hidden");
    if (stocksWrapper1.classList.contains("stocks__card-more_visible")) {
        stocksButton1.textContent = "С";
    } else {
        stocksButton1.textContent = "П";
    }
};
stocksButton2.onclick = function () {
    let stocksWrapper2 = document.getElementById("stock2");
    stocksWrapper2.classList.toggle("stocks__card-more_visible");
    stocksWrapper2.classList.toggle("stocks__card-more_hidden");
    if (stocksWrapper2.classList.contains("stocks__card-more_visible")) {
        stocksButton2.textContent = "С";
    } else {
        stocksButton2.textContent = "П";
    }
};
stocksButton3.onclick = function () {
    let stocksWrapper3 = document.getElementById("stock3");
    stocksWrapper3.classList.toggle("stocks__card-more_visible");
    stocksWrapper3.classList.toggle("stocks__card-more_hidden");
    if (stocksWrapper3.classList.contains("stocks__card-more_visible")) {
        stocksButton3.textContent = "С";
    } else {
        stocksButton3.textContent = "П";
    }
};
stocksButton4.onclick = function () {
    let stocksWrapper4 = document.getElementById("stock4");
    stocksWrapper4.classList.toggle("stocks__card-more_visible");
    stocksWrapper4.classList.toggle("stocks__card-more_hidden");
    if (stocksWrapper4.classList.contains("stocks__card-more_visible")) {
        stocksButton4.textContent = "С";
    } else {
        stocksButton4.textContent = "П";
    }
};
