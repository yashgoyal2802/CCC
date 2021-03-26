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
            /* background-color: #F7F7FF; */
            /* background-color: #F0EFEB; */
            background-color: #F4F1DE;
            /* background-image: linear-gradient(blue, pink); */
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
    <?php include('navbar.php')?>
    </header>
    <div>
    <br>
    <?php include('achievementsinclude.php')?>
    </div>
    <?php include('footer.php')?>
    </div>
</body>
</html>
