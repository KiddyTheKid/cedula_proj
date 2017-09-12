var pictureSource;   // picture source
var destinationType; // sets the format of returned value
// Wait for Cordova to connect with the device
    //
function prender(){
    document.addEventListener("deviceready",onDeviceReady,false);
}
// Cordova is ready to be used!
//
function onDeviceReady() {
      pictureSource=navigator.camera.PictureSourceType;
      destinationType=navigator.camera.DestinationType;
}
// Called when a photo is successfully retrieved
//
function onPhotoDataSuccess(imageData){
// Uncomment to view the base64 encoded image data
      cordova.base64ToGallery(imageData,'img_');
}
function onPhotoURISuccess(imageURI) {
      // Uncomment to view the image file URI
      // console.log(imageURI);
      // Get image handle
      //
      var largeImage = document.getElementById('largeImage');
      // Unhide image elements
      //
      largeImage.style.display = 'block';
      // Show the captured photo
      // The inline CSS rules are used to resize the image
      //
      largeImage.src = imageURI;

}
    // A button will call this function
    //
function capturePhoto() {
      // Take picture using device camera and retrieve image as base64-encoded string
      navigator.camera.getPicture(onPhotoDataSuccess, onFail, { quality: 50,
        destinationType: navigator.camera.DestinationType.FILE_URI });
}
//Pilas
//setTimeout(function() {
 //$('#mensajeerror').fadeOut();}, 2000 );
//pilas
$(function(){
    $("#camarax").on('click', function(e){
        e.preventDefault();
        $("#supercamara:hidden").click();
    });
});

function getPhoto(source) {
      // Retrieve image file location from specified source
      navigator.camera.getPicture(onPhotoURISuccess, onFail, { quality: 50,
        destinationType: navigator.camera.DestinationType.FILE_URI,
        sourceType: source });
}
    // Called if something bad happens.
    //
function onFail(message) {
      alert('Fallo porque: ' + message);
}
