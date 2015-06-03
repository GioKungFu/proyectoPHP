// Efecto de la imagen. 
var slideCache = new Array(); 
function RunSlideShow(pictureName,imageFiles,displaySecs) 
{ 
var imageSeparator = imageFiles.indexOf(";"); 
var nextImage = imageFiles.substring(0,imageSeparator); 
if (document.all) 
{ 
document.getElementById(pictureName).style.filter="blendTrans(duration=2)"; 
document.getElementById(pictureName).filters.blendTrans.Apply(); 
} 
document.getElementById(pictureName).src = nextImage; 
if (document.all) 
{ 
document.getElementById(pictureName).filters.blendTrans.Play(); 
} 
var futureImages= imageFiles.substring(imageSeparator+1,imageFiles.length) 
+ ';' + nextImage; 
setTimeout("RunSlideShow('"+pictureName+"','"+futureImages+"',"+displaySecs+")", 
displaySecs*1000); 
// cambio de imagen. 
imageSeparator = futureImages.indexOf(";"); 
nextImage = futureImages.substring(0,imageSeparator); 
if (slideCache[nextImage] == null) { 
slideCache[nextImage] = new Image; 
slideCache[nextImage].src = nextImage; 
} 
} 
