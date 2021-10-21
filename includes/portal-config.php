<?php
// prevent data from being sent early
ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// Timezones
date_default_timezone_set('America/Los_Angeles');

// Nav
$nav1 = array(
  "index.php" => "Welcome",
  "elements.html" => "HTML Elements",
  "aia.php" => "AIA",
  "big/index.php" => "BIG",
  "flowchart.php" => "Flowchart",
  "fp/index.php" => "Final Projects",
  "contact.php" => "Contact Michael",
);


// echo THIS_PAGE;
// die;
$logo_color = '';

switch(THIS_PAGE) {
  case 'index.php':
    $title = 'Michael Lyon - IT162';
    $logo = 'fa-home';
    $PageID = 'Welcome';
    $logo_color = ' style="color:#00f"';
  break;
  case 'contact.php':
    $title = 'Let\'s get in touch!';
    $logo = 'fa-paper-plane-o';
    $PageID = 'Contact Michael';
    $logo_color = ' style="color:#00f"';
  break;

  default:
    $title = THIS_PAGE;
    $logo = '🧸';
    $PageID = 'Welcome';
};

// build nav
function makeLinks($linkArr)
{
  $myReturn = '';
  foreach($linkArr as $url => $text)
  {
    if($url == THIS_PAGE)
    {
      $myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    }else{
      $myReturn .= '<a href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    }
  }
  return $myReturn;
};

?>