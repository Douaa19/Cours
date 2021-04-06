// var btn = document.getElementById("submitBtn");

// bnt.onclick = function(e) {
//     e.preventDefault();
//     var message= document.getElementById('message').value;
//     document.getElementById('disply').innerHTML= "hello" + " " + message;
// }

var btn = document.getElementById("submitBtn");

var msg = document.getElementById("message");

btn.onclick = function(e) {
    e.preventDefault();
    var inputValuee = msg.value;
    if(msg.value === '') {
        console.log("Empty");
    } else {
        msg.value = '';
        document.getElementById("disply").innerHTML = "Hello" + " " + inputValuee;
        
    }

}
