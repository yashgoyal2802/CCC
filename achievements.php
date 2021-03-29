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
            background-color: #F4F1DE;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: radial-gradient(circle, #292929, #2a2a2a, #2b2b2b, #2d2d2d, #2e2e2e, #2f2f2f, #303030, #313131, #323232, #323232, #333333, #343434);
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
    <title>Achievements | CCC</title>
</head>
<body>
    <div id="page-container">
    <header>
    <?php include('navbar.php')?>
    </header>
    <div>
    <br>
    <?php include('achievementsinclude.php')?>
    </div>
    <?php include('footer.php')?>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
