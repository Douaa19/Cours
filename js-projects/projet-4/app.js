var addToDoButton = document.querySelector('.addItems-submit');
var inputField = document.querySelector('.addItems-input');
var toDoContainer = document.querySelector('.displayItems-container');

addToDoButton.addEventListener('click', function(ele) {
    ele.preventDefault();
    var paragraph = document.createElement('p');
    let addItems = document.querySelector(".addItems");
    let addItemsText = document.createTextNode(inputField.value);
    addItems.appendChild(addItemsText);
    inputField.value = "";
    let displayItemsClear = document.querySelector(".displayItems-clear");
    let tqediaList = document.querySelector(".tqedia-list");
    displayItemsClear.addEventListener('click', function() {
        tqediaList.removeChild(addItems);
    })


})






