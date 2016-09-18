var page=document.documentElement;
// -------------------------------------------
// CHANGE THIS NUMBER WHEN ADDING NEW IMAGES
var numberOfImages=3;
//-------------------------------------------

changeImage();
//--------- SETTING INTERVAL ----------
setInterval(function(){
  changeImage();
}, 5000);
function changeImage(){
  var random_number=Math.random();
  random_number*=numberOfImages+1;
  random_number=Math.floor(random_number);
  // EDITING PAGE STYLE ( I MEAN BACKGROUND PROPERTYES)
  page.style.background="url(\"/iQ/RES/IMAGES/image_"+random_number+".jpg\") no-repeat center center fixed";
  page.style.backgroundSize="cover";
}
