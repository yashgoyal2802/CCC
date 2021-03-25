<?php
  if(isset($_COOKIE[$username]))
  {
    $usern = $_COOKIE[$username];
    $loggedin = true;
    $putnav='href="logout.php">Logout';
    $putprof='profile.html';
  }
  else{
    $usern = "My Profile";
    $putnav='href="register.html">Login';
    $putprof= 'register.html';
  }

  echo'
  <nav class="navbar navbar-light navbar-expand-md navigation-clean mynav">
          <img src="images/ccc.png" alt="logo" width="5%" />
          <div class="container">
            <a class="navbar-brand" href="#">Competitive Coding Club</a>
            <button
              data-toggle="collapse"
              class="navbar-toggler"
              data-target="#navcol-1"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link mylink" href="#">Resources</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mylink" href="contests.html">Calendar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mylink" href="leaderboard.php"
                    >Leader Board</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link mylink" href="achievements.php"
                    >Achievements</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link mylink" href="'.$putprof.'">'.$usern.'</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mylink"'.$putnav.'</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>';
?>
