<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="views/bootstrap.css" rel="stylesheet">
    <link href="views/styles.css?ver=<?php echo rand(111, 999) ?>" rel="stylesheet">

    <link rel="shortcut icon" href="views/logo.png" type="image/x-icon">
    <title>Skopje Bar Crawl</title>
  </head>
  <body>
    <audio id="myAudio"><source src="views/beer.mp3"></audio>
    <?php include("views/navbar.php");?>
    <?php include("views/About.php");?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      function play(){document.getElementById("myAudio").play();}
    </script>
  </body>
</html>