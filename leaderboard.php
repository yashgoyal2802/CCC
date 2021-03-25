<!DOCTYPE html>
<html lang="en" class="content">

<head>
    <meta charset="utf-8" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="Navigation-Clean.css" />
    <link rel="stylesheet" href="footer.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />  
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

        #page-container {
          position: relative;
          min-height: 100vh;
        }

    </style>
    <title>Competitive Coding Club</title>
</head>
<body>
    <div id="page-container">
    <header>
    <?php include('navbar.php')?>
    </header>
    <div>
    <br>
    <?php include('leaderbinclude.php')?>
    </div>
    <?php include('footer.php')?>
    </div>
</body>
</html>
