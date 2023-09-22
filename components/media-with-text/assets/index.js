document.addEventListener("DOMContentLoaded", function () {
  const overlayPlayButton = document.querySelector(".overlay-play-button");
  const videoContainer = document.querySelector(".embed-container");
  const videoOverlay = document.querySelector(".video-overlay");
  const videoIframe = document.querySelector("iframe");
  let isVideoPlaying = false;

  videoOverlay.addEventListener("click", function () {
    if (!isVideoPlaying) {
      videoContainer.style.display = "block";
      videoOverlay.style.display = "none";
      if (videoIframe.src.indexOf("?autoplay=1&controls=0&modestbranding=1&rel=0") === -1) {
        videoIframe.src += "?autoplay=1&controls=0&modestbranding=1&rel=0";
      }
      overlayPlayButton.style.display = "none";
      isVideoPlaying = true;
    }
  }); 
});
