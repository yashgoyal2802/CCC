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
            /* background-image: linear-gradient(blue, pink); */
            background-color: white;
            margin: 0;
            width: 100%;
            padding: 0;
            background-repeat: no-repeat;
        }

        img {
            border-radius: 20px;
        }

        .bg-image {
            background-image: url("images/ccc.jpg");
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
    </style>
    <title>Competitive Coding Club</title>
</head>
<body>
    <header>
    <?php include('navbar.php')?>
    </header>
    <iframe src="https://calendar.google.com/calendar/embed?src=8a4ko50nq55ma5smhuhdp5rpmaek45lg%40import.calendar.google.com&ctz=Asia%2FKolkata" style="border: 0; margin-top: 6px" width="98%" height="600" frameborder="0" scrolling="no"></iframe>
    <br><br>
    <footer>
    <?php include('footer.php')?>
    </footer>
</body>
</html>
