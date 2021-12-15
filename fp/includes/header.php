<?php include 'final-config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/portal.css" />
  <link rel="stylesheet" href="../css/nav.css" />
  <link rel="stylesheet" href="../css/form.css" />
</head>
<body>
  <h1><a href=<?=$logo_url?>><i class="logo fa <?=$logo?>"<?=$logo_color?>></i><?=$title?></a></h1>
  <nav class="topnav" id="myTopnav">
    <?=makeLinks($finalNav) ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </nav>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }  
  </script>
</body>
</html>