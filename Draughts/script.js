var slideNo = 0;
var slideTimeout = 6000;
var slideshowImages = ["imagesD/slide1.jpg",
	"imagesD/slide2.jpg",
	"imagesD/slide3.jpg"];

var slideshowHeaders = ["Fun",
			"Smart",
			"Intuitive"];

	slideshow();

function slideshow() {
	var slide = document.getElementById("slide");
	slide.classList.add("fadeOut");
	setTimeout(function() {
		document.getElementById("slide").querySelector("img").src = slideshowImages[slideNo];
		document.getElementById("slide").querySelector("h2").innerHTML = slideshowHeaders[slideNo];
		slide.classList.remove("fadeOut");
	}, 1600);

	slideNo++;

	if (slideNo == slideshowImages.length)
		slideNo = 0;

	setTimeout(slideshow, slideTimeout);
}

