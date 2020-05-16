var slideNo = 0;
var slideTimeout = 4100;
var slideshowImages = ["images/slide1.jpg",
	"images/slide2.jpg",
	"images/slide3.jpg"];
var slideshowDescriptions = ["First image of the slideshow: 1",
	"Second image of the slideshow: 2",
	"Third image of the slideshow: 3"
];
var slideshowHeaders = ["Text1.",
			"Text2.",
			"Text3."];

	slideshow();

function slideshow() {
	var slide = document.getElementById("slide");
	slide.classList.add("fadeOut");
	setTimeout(function() {
		document.getElementById("slide").querySelector("img").src = 
			slideshowImages[slideNo];
		document.getElementById("slide").querySelector("img").alt =
			slideshowDescriptions[slideNo];
		document.getElementById("slide").querySelector("h2").innerHTML = 
			slideshowHeaders[slideNo];
		slide.classList.remove("fadeOut");
	}, 1600);

	slideNo++;

	if (slideNo == slideshowImages.length)
		slideNo = 0;

	setTimeout(slideshow, slideTimeout);
}

