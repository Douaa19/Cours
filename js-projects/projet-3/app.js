// array of image sources:
// let images = [
//     'image1.png', 'image2.png', 'image3.png','image4.png'
// ]


// var container = document.getElementById("canvas");


var myImage = document.getElementById("mainImage");

	var imageArray = ["images/image1.png","images/image2.png","images/image3.png",
					  "images/image4.png"];
	var imageIndex = 0;

	function changeImage() {
		myImage.setAttribute("src",imageArray[imageIndex]);
		imageIndex++;
		if (imageIndex >= imageArray.length) {
			imageIndex = 0;
		}
	}

	// setInterval is also in milliseconds
	var intervalHandle = setInterval(changeImage, 5000);

	myImage.onclick =  function() {
		clearInterval(intervalHandle);
	    alert("You clicked the image");
	}




