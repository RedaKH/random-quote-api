document.addEventListener("DOMContentLoaded", function() {
    var videoElement = document.getElementById("video");
  
    videoElement.addEventListener("ended", function() {
      videoElement.play();
    });
  
    videoElement.play();
  });
  