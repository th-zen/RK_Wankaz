var playBtn = document.getElementById("playBtn");
var myVideo = document.getElementById("myVideo");

playBtn.addEventListener("click", function() {
  myVideo.play();
});

myVideo.addEventListener('ended', () => {
    myVideo.currentTime = 0;
  });