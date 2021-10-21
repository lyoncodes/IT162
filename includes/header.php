<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title><?=$title?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <script src="https://use.fontawesome.com/6a71565c22.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/form.css" />
 </head>
 <body>
  <header>
   <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Michael Lyon, IT162</a></h1>
    <nav class="topnav" id="myTopnav">
      <?=makeLinks($nav1) ?>
      <!-- <a href="index.html" class="active">Welcome</a>
      <a href="elements.html">HTML Elements</a>
      <a href="aia.html">AIA</a>
      <a href="big/index.html">BIG</a>
      <a href="http://w3schools.com" target="_blank">W3 Schools</a>
      <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
      <a href="flowchart.html">Flowchart</a>
      <a href="fp/index.html">Final Project</a>
      <a href="contact.php">Contact Michael</a> -->
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
  </header>
  <div class="wrapper">
    <!-- header ends here -->