// array of image sources:
// let images = [
//     'image1.png', 'image2.png', 'image3.png','image4.png'
// ]


// var container = document.getElementById("canvas");


var myImage = document.getElementById("mainImage");
var right = document.getElementById("right");
var left = document.getElementById("left");

	var imageArray = ["images/image2.png","images/image3.png","images/image4.png","images/image1.png"];
	var i = 0;

	right.onclick = function() {
		myImage.setAttribute("src",imageArray[i]);
		i++;
		if (i >= imageArray.length) {
			i = 0;
		}
	}

  left.onclick = function() {
    i = i >= 0 ? --i : (images.length-1);
    --i;
    myImage.setAttribute("src",imageArray[i]);
	}





