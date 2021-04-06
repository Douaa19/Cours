//array example const colors = ['black', 'white', 'blue', 'yellow', 'pink', 'green']
// document.querySelector("button").addEventListener("click", function(){
//     document.body.style.background = randColor();
//   })
  
//   function randColor(){
//     return '#' + (function co(lor){   return (lor +=
//       [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f'][Math.floor(Math.random()*16)])
//       && (lor.length == 6) ?  lor : co(lor); })('');
//   }





const colors = ["#e74c3c", "#3498db", "#9b59b6", "#e67e22", "#1abc9c", "#bdc3c7"];
var i = 0;
document.querySelector("button").addEventListener("click", function() {
  i = i < colors.length ? ++i : 0;
  document.querySelector("body").style.background = colors[i]
}
)