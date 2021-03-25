<!DOCTYPE html>
<html lang="en" class="content">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="Navigation-Clean.css">
    <link rel="stylesheet" href="footer.css">    
    <style>

        .content {
            text-align: center;
            align-self: center;
            font-family: Charcoal, sans-serif;
            font-size: 130%;
            margin: 0;
            padding: 0;
            max-width: 100%;
            overflow-x: hidden;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #262626;
            font-size: 20px;
            display: block;
        }

        li a {
            float: right;
            color: white;
            text-align: center;
            padding: 12px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        header {
            text-align: center;
            /* background-color: #F7F7FF; */
            /* background-color: #F0EFEB; */
            background-color: #F4F1DE;
            /* background-image: linear-gradient(blue, pink); */
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(#25c481, #25b7c4);
            margin: 0;
            width: 100%;
            padding: 0;
            background-repeat: no-repeat;

        }

        img {
            border-radius:20px;
        }

        .bg-image {
            background-image: url("images/ccc_title.jpg");
            background-color: #F4F1DE;
            position: relative;
            margin: 0 auto;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 60%;
            height: 500px;
        }

        .bg-text {
            text-align: center;
            position: absolute;
            bottom: 0px;
            left: 310px;
            /* right: 20px;  */
            color: #D0CEBA;
        }

        @keyframes rotation {
            from {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }
        .rotate {
            animation: rotation 8s infinite linear;
        }

        #page-container {
          position: relative;
          min-height: 100vh;
        }

        footer {
            text-align: left;
            padding: 3px;
            /* background-color: #262626; */
            background-color: #111;
            color: white;
            font-size: 15px;
            border-width: thin;
            border-style: solid;
            border-color: #262626;
            border-right-style: hidden;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer a {
            text-decoration: none;
            color: #5E7CE2;
        }
    </style>
    <title>Competitive Coding Club</title>
</head>
<body>
    <div id="page-container">
    <header>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean mynav">
            <img src="images/ccc.png" alt="logo" width="5%">
            <div class="container"><a class="navbar-brand" href="#">Competitive Coding Club</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link mylink" href="#">Resources</a></li>
                        <li class="nav-item"><a class="nav-link mylink" href="contests.html">Calendar</a></li>
                        <li class="nav-item"><a class="nav-link mylink" href="leaderboard.php">Leader Board</a></li>
                        <li class="nav-item"><a class="nav-link mylink" href="achievements.php">Achievements</a></li>
                        <li class="nav-item"><a class="nav-link mylink" href="#">My profile</a></li>
                        <li class="nav-item"><a class="nav-link mylink" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="board">
    <p></p>
    <?php include('leaderbinclude.php')?>
    </div>
    <footer>
        <br><br>
        <img style="float: right; width: 80px; height: 80px; margin-right: 10px;" src="images/ccc.png" class="rotate">
        <p>You can contact us at 
            <a href="mailto:cccmpstme@gmail.com">cccmpstme@gmail.com</a> or +91
            7024003998<br><br></p>
        <p style="text-shadow: 0 1px"><p style="color: #FE654F">Copyright © 2020 Competitive Coding Club of MPSTME.
        </p></p>
    </footer>
    </div>
</body>
</html>
