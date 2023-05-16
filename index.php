<?php
  $con=myswli_connect();

  $sql="select * from projekte where pro_id=1";
  $result=mysqli_query($con, $sql);
  $row=mysqli_fetch_row($result);                                                            
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.typekit.net/qiy2lpb.css" />
    <link rel="stylesheet" href="style.css" />
    <title>WANKAZ</title>
  </head>
  <body>

    <input id="toggle" type="checkbox"></input>

    <label for="toggle" class="hamburger">
      <div class="top-bun"></div>
      <div class="meat"></div>
      <div class="bottom-bun"></div>
    </label>

    <div class="nav">
      <div class="nav-wrapper">
        <nav>
          <a href="#video_anchor" class="navlink" onclick="uncheckToggle()">video</a><br>
          <a href="#abstract_anchor" class="navlink" onclick="uncheckToggle()">research</a><br>
          <a href="#poster_anchor" class="navlink" onclick="uncheckToggle()">poster</a><br>
          <a href="#team_anchor" class="navlink" onclick="uncheckToggle()">team</a>
        </nav>
      </div>
    </div>

    <div style="height: 100vh" class="wankaz_big_container">
      <svg
        viewBox="0 0 100 100"
        preserveAspectRatio="none"
        width="100%"
        height="100%"
      >
        <image
          href="media/pictures/Wankaz_Logo_white.svg"
          width="100%"
          height="100%"
          preserveAspectRatio="none"
        />
      </svg>
    </div>
    <div class="video_container" id="video_anchor">
      <video src="media/pictures/video.mp4" class="video" id="myVideo"></video>
      <div class="textgrid">
        <h2>machen videos</h2>
        <p>
          Beschreibung eines Atemberaubenden Videos wo zumindest das Titelbild
          für den Look der Website in schwarz - weiß sein sollte
        </p>
        <button>
          <svg
            viewBox="0 0 100 100"
            preserveAspectRatio="none"
            width="100%"
            height="100%"
          >
            <image id="playBtn"
              href="media/pictures/press_to_play.svg"
              width="100%"
              height="100%"
              preserveAspectRatio="none"
            />
          </svg>
        </button>
        <script src="javascript.js"></script>
      </div>
    </div>
    <div class="abstract_container" id="abstract_anchor">
      <svg
        viewBox="0 0 100 100"
        preserveAspectRatio="none"
        width="100%"
        height="100%"
      >
        <image
          href="media/pictures/Wankaz_Logo_white.svg"
          width="100%"
          height="100%"
          preserveAspectRatio="none"
        />
      </svg>
      <h2>schreiben<br />auch abstracts</h2>
      <p>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum."
      </p>
      <button>
        <svg
          viewBox="0 0 100 100"
          preserveAspectRatio="none"
          width="100%"
          height="100%"
        >
          <image
            href="media/pictures/press_to_play_blue.svg"
            width="100%"
            height="100%"
            preserveAspectRatio="none"
          />
        </svg>
      </button>
    </div>
    <div class="poster_container" id="poster_anchor">
        <img class="poster">
        <div class="poster_text">
          <h2>cooles poster<br>made by</h2>
          <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat."</p>
            <svg
            viewBox="0 0 100 100"
            preserveAspectRatio="none"
            width="100%"
            height="100%"
          >
            <image
              href="media/pictures/Wankaz_Logo_blue.svg"
              width="100%"
              height="100%"
              preserveAspectRatio="none"
            />
          </svg>
        </div>
        <div class="gap_div"></div>
    </div>


    <div class="team_container" id="team_anchor">
      <div class="image-container">
        <span style="--i: 1">
          <img
            src="media/pictures/teampic_florian.jpg"
          />
          <p>web<br>florian thausing</p>
        </span>
        <span style="--i: 2">
          <img
            src="media/pictures/teampic_sebastian.jpg"
          />
          <p>research<br>sebastian leitgeb</p>
        </span>
        <span style="--i: 3">
          <img
            src="media/pictures/teampic_benjamin.jpg"
          />
          <p>video<br>benjamin höll</p>
        </span>
      </div>
  
      <div class="btn-container">
        <button class="btn" id="prev"><</button>
        <button class="btn" id="next">></button>
      </div>
  
    </div>
    <script src="app.js"></script>

    <div class="impressum_container">
      <p>Terms</p>
      <p>agb</p>
      <p>research</p>
    </div>
    <script src="javascript.js"></script>
  </body>
</html>
