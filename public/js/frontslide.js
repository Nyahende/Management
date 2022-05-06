var i = 0;
var images = [];
var time = 5000;

images[0] = "images/berger1.jpg";
images[1] = "images/berger2.jpg";
images[2] =  "images/berger3.jpg";
images[3] =  "images/berger4.jpg";

function changeImg() {
  document.frontslide.src = images[i];
  if (i < images.length - 1) {
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}
window.onload = changeImg;